<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Warranty;
use Illuminate\Http\Request;
use App\Models\ProductType;
use App\Http\Requests\WarrantyRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Helpers\FileUploadManager;

class WarrantyController extends Controller
{
    public function getAllWarranties()
    {
        $warranties =  Warranty::with('productType')->get();
        return view('Admin.warranty.index', compact('warranties'));

    }


    public function store(WarrantyRequest $request)
    {
        dd($request);
     
        $request_data = $request->all();
        // Gather all request data
        $data = [];
        $product = ProductType::findOrFail($request->product_type_id);
        $data['Product_Name'] = $product->type_name;
        $data['Warranty_Start'] = $request->start_date;
        $data['Valid_Upto'] = $request->end_date;
        // Generate QR code data
        $qrData = json_encode($data);

        
        // Create the QR code with a margin to center it
        $qrCodeSvg = QrCode::size(300)
            ->backgroundColor(255, 255, 255)
            ->margin(10) // Adjust the margin to center the QR code
            ->generate($qrData);

        $qrFileName = 'warranty_' . uniqid() . '.svg';
        $qrFilePath = storage_path('app/public/images/warranty/' . $qrFileName);

        // Ensure the directory exists
        if (!Storage::exists('public/images/warranty')) {
            Storage::makeDirectory('public/images/warranty');
        }

        // Store the SVG file in the filesystem
        file_put_contents($qrFilePath, $qrCodeSvg);

        // Create an UploadedFile instance from the SVG file
        $uploadedFile = new UploadedFile(
            $qrFilePath,
            $qrFileName,
            'image/svg+xml',
            null,
            true
        );
    

    // Use the FileUploadManager to handle the uploaded file
    $brochure = FileUploadManager::uploadFile($uploadedFile, 'public/images/warranty/');
    $request_data['image_url'] = $brochure['doc_name'];

    // Create or update the warranty record
    $warranty = Warranty::updateOrCreate(['id' => $request_data['id']], $request_data);

    // Clean up the SVG file
    unlink($qrFilePath);

    // Return a response or redirect as needed
    if ($warranty) {
        return $this->getAllWarrantiesData();
    }
}

// public function edit(Request $request, $id)
// {
//     return Warranty::findOrFail($id);
// }
// public function update(Request $request, $id)
// {
//     $data = $request->all();
//     return Warranty::update($data);
// }

// public function delete(Request $request, $id)
// {
//     $warranty =  Warranty::findOrFail($id);
//     if($warranty){
//         $warranty->delete();
//         $warranties = Warranty::with('productType')->orderByDesc('created_at')->get();
//         return view('Admin.warranty.data-table', compact('warranties'))->render();
//     }
// }

private function getAllWarrantiesData()
{
    $warranties =  Warranty::with('productType')->get();
    return view('Admin.warranty.data-table', compact('warranties'))->render();
}

public function delete(Request $request, $id)
{
    $warranty =  Warranty::findOrFail($id);
    if($warranty){
        $warranty->delete();
        $warranties = Warranty::with('productType')->orderByDesc('created_at')->get();
        return view('admin.warranty.data-table', compact('warranties'))->render();
    }
}

public function data($id)
{
    $data=Warranty::findOrFail($id);
    return view('Admin.warranty.detail', compact('data'))->render();
}

}


