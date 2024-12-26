<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function dashboard()
    {
        return view('Admin.dashboard');
    }
    public function indexproduct()
    { 
       
        return view('Admin.product.index');
    }

    public function indexp()
    {
        return view('Admin.product.data-table');
    }

    public function indexwarranty()
    {
        return view('Admin.warranty.index');
    }

    public function editwarranty()
    {
        return view('Admin.warranty.index');
    }

    
    public function products()
    {
        return view('Admin.partials.products');
    }
    
    public function professional()
    {
        return view('Admin.partials.professional');
    }

    
    public function projects()
    {
        return view('Admin.partials.projects');
    }

    
    // public function singleproducts($id)
    // {
    //     $pro = Product::find($id);
    //     return $pro;

    //     return view('partials.products-list', compact('pro'));
    // }

    
    public function support()
    {
        return view('Admin.partials.partials.support');
    }

    
    public function timeline()
    {
        return view('Admin.partials.partials.timeline');
    }

    
    public function video()
    {
        return view('Admin.partials.video-section');
    }

    public function productsgroup()
    {
        return view('Admin.partials.products-group');
    }

    public function productlist()
    {
        return view('Admin.partials.product-list');
    }

    public function product_data()
    {
        return view('Admin.partials.product-data');
    }

    public function oldsingleproduct()
    {
        return view('Admin.partials.old-single-product');
    }
    public function oldproduct()
    {
        return view('Admin.partials.old-products');
    }
    public function login()
    {
        return view('Admin.partials.login');
    }

    public function contact()
    {
        return view('Admin.partials.contact');
    }
    public function consumer()
    {
        return view('Admin.partials.consumer');
    }
    public function banner()
    {
        return view('Admin.partials.banner');
    }

    public function about()
    {
        return view('partials.about-us');
    }





}
