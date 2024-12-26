<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Specification;
use App\Models\ProductType;
use App\Helpers\FileUploadManager;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Validator;



class ProductController extends Controller
{
    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'product_model' => 'required|string|max:255',
    //         'wattage' => 'required|numeric|min:0',
    //         'guarantee' => 'nullable|string',
    //         'initial_lumen' => 'required|',
    //         'stable_lumen' => 'required|',
    //         'ra' => 'required|',
    //         'beam_angle' => 'required|',
    //         'life_hours' => 'required|',
    //         'lamp_size_h1' => 'required|',
    //         'lamp_size_h2' => 'required|',
    //         'lamp_size_d' => 'required|',
    //         'inches' => 'required|',
    //         'd_round' => 'required|',
    //         'd_square' => 'required|',
    //         'cut_square' => 'required|',
    //         'cut_round' => 'required|',
    //         'h' => 'required|',
    //         'life' => 'required|',
    //         'shape' => 'required|',
    //      //   'image_url' => 'required|',
    //         'lamp_size_w' => 'required|',
    //         'lamp_size_i' => 'required|',
    //         'lamp_size_l' => 'required|',
    //         'lamp_size_t' => 'required|',
    //         'ip_class' => 'required|',
    //     ]);
    //         $product = new Product($validatedData);
    //         $product->save();
    
    //         return redirect()->route('products.index')->with('success', 'Product created successfully!');
        

    // }


    public function index()
    {
        $products = Product::with('productType')->orderByDesc('created_at')->get();
        return view('Admin.product.index', compact('products'));
    }

    public function listing()
    {
        
        
        $products = Product::orderByDesc('created_at')->get();
        
       
        return view('product.data-table', compact('products'))->render();
    }

    public function getAllProductType()
    {
        
          
            $data = ProductType::orderBy('type_name')->get();
            return response()->json($data);
      

    }

    public function store(Request $request)
    {
        
        $data = $request->all();
    
        if ($request->hasFile('image_url')) {
            $brochure = FileUploadManager::uploadFile($request->file('image_url'), 'public/images/products/');
         
            $data['image_url'] = $brochure['doc_name'];
        }
        return Product::updateOrCreate(['id' => $data['id']],$data);
    }

    public function edit(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        return $product;
    }
    public function delete($id)
    {
        $product =  Product::findOrFail($id);
        if($product){
            $product->delete();
            $products = Product::with('productType')->orderByDesc('created_at')->get();
            return view('Admin.product.data-table', compact('products'))->render();
        }
    }



    //user site 



  public function productList(Request $request, $id = null)
{
    // Fetch products by category or all products
    $products = Product::with('productType');

    if ($id) {
        $products = $products->where('product_type_id', $id);
    }

    $products = $products->get();

    // AJAX Response for dynamic updates
    if ($request->ajax()) {
        return view('partials.product-data-table', compact('products'))->render();
    }

    // Default response with full view
    return view('partials.products-list', compact('products'));
}
public function List(Request $request, $id = null)
{
    // Fetch products by category or all products
    $products = Product::with('productType');

    if ($id) {
        $products = $products->where('product_type_id', $id);  // Filter by category ID
    }

    $products = $products->get();

    // AJAX Response for dynamic updates
    if ($request->ajax()) {
        // Return only the updated product listing HTML
        return view('partials.product-listing', compact('products'))->render();
    }

    // Default response with full page (including sidebar, etc.)
    return view('layout.master', compact('products'));
}
   
    public function professional()
    {
        $products = ProductType::where('product_category_id',ProductType::PROFESSIONAL_TYPE)->get();
        return view('partials.products-professional', compact('products'));
    }


    public function products()
    {
        return view('Admin.partials.products-consumer');
    }
    public function consumer()
    {
        $products = ProductType::where('product_category_id',ProductType::CONSUMER_TYPE)->get();
        return view('partials.products-consumer', compact('products'));
    }

    // show each product detail 

    public function singleproduct($id)
    {  
        $pro = Specification::find($id);
        return view('partials.single-product', compact('pro'));
    }
    
   public function search(Request $request)
    {
        $query = $request->input('query'); 
        $products = Product::where('product_model', 'LIKE', "%{$query}%")->get();
        return response()->json($products);  // Return results as JSON
    }

}


