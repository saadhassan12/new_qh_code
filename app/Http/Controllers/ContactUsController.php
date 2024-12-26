<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ContactUs;
class ContactUsController extends Controller
{


    public function show()

    {
        $queries=ContactUs::all();
        return view("Admin.contact-us.index",compact("queries"));
    }
      public function store(Request $request)
      {
       

        if ($request->type === 'Quotation') {

          $query = ContactUs::updateOrCreate(['id' => @$request->id],$request->all());
          return response()->json(['message' => 'Your qutation have been received successfully!'], 200);



        }
        else

        {
            $query = ContactUs::updateOrCreate(['id' => @$request->id],$request->all());

            if($query)
            {
                return response()->json(['success' => 'Your contact have been received successfully!'], 200);

            }
            return redirect()->back();

        }




}

public function delete(Request $request, $id)
{
    $warranty =  ContactUs::findOrFail($id);
    if($warranty){
        $warranty->delete();
        $contact = ContactUs::orderByDesc('created_at')->get();
        return view('admin.contact-us.data-table', compact('contact'))->render();
    }
}

public function index()
{

    $queries = ContactUs::orderByDesc('created_at')->get();

    return view('admin.partials.contact-us', compact('queries'));
}

public function support()
{


    return view('Admin.partials.support');
}
}
