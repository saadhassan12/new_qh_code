<?php

use Illuminate\Support\Facades\Route;

 //use App\Http\Controllers\ContactUsController;
 use App\Http\Controllers\ContactUsController;
 //use App\Http\Controllers\ProductController;
 use App\Http\Controllers\Admin\FrontendController;
 use App\Http\Controllers\Admin\ProductController;
 use App\Http\Controllers\ProductsController;
 use App\Http\Controllers\Admin\AuthController;
 use App\Http\Controllers\Admin\WarrantyController;
 use App\Http\Controllers\SpecificationController;;





Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get('/about-us', function () {
//     return view('partials.about-us');
// })->name('about.us');

Route::get('/contact-us', function () {
    return view('partials.contact-us');
})->name('contact.us');

Route::get('/products', function () {
    return view('partials.products');
})->name('products');

Route::get('/products/consumer/', function () {
    return view('partials.products-consumer');
})->name('consumer');
// Route::get('/products/professional', function () {
//     return view('partials.products-professional');
// })->name('professional');

// Route::get('/products-list', function () {
//     return view('partials.products-list');
// })->name('products-list');

// Route::get('/single-product', function () {
//     return view('partials.single-product');
// })->name('single-product');
//my admin pannel

Route::get('admin/login', [FrontendController::class,'login']);
Route::get('about', [FrontendController::class,'about'])->name('about.us');


Route::middleware('auth')->controller(FrontendController::class)->prefix('admin')->group(function(){

  //  Route::get('/about', 'about')->name('about.us');
    Route::get('/banner', 'banner');
    Route::get('/consumer', 'consumer');
   // Route::get('/contact', 'contact');
    Route::get('/old/product', 'oldproduct');
    Route::get('/old/single/product', 'oldsingleproduct');
    Route::get('/product/data', 'productdata');
    Route::get('/product/list', 'productlist  ');
  
    Route::get('/product/group', 'productsgroup')->name('product.group');
    Route::get('/video', 'video');
    Route::get('/timeline', 'timeline');
    Route::get('/support', 'suport');
   // delete krna hy  Route::get('/single/product', 'singleproduct')->name('single-product');
    Route::get('/projects', 'projects');
  //  Route::get('/professional', 'professional');
    Route::get('/warranty', 'indexwarranty');
    Route::get('/edit/warranty', 'editwarranty');
    Route::get('/product', 'indexp');
    Route::get('/edit/product', 'indexproduct');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
});

//admin dashboard

    Route::controller(App\Http\Controllers\Admin\AuthController::class)->prefix('admin')->group( function () {
        // Route::get('/', 'loginForm')->name('login');
         Route::post('/logindata', 'login')->name('auth.login');
         Route::get('/register', 'register')->name('register');
         Route::post('/register','register')->name('register');
         Route::post('/logout', 'logout')->name('auth.logout');
        // Route::get('/forgot-password', 'forgotPassword')->name('forgot-password');
        // Route::post('/forgot-password', 'forgotPassword')->name('forgot-password');
        // Route::get('/reset-password/{token}', 'resetPassword')->name('reset-password');
       //  Route::post('/reset-password', 'resetPassword')->name('reset-password');

     });

// admin products routes
     Route::middleware('auth')->controller(ProductController::class)->prefix('product')->group(function(){

        //  Route::get('/products', 'products')->name('products');
          Route::get('/', 'index')->name('admin.product');
          Route::post('/add', 'store')->name('product.store');
          Route::get('edit/{id}', 'edit')->name('product.edit');
          Route::get('delete/{id}', 'delete')->name('product.delete');

        });


       // admin warranty

        Route::controller(WarrantyController::class)->prefix('warranty')->middleware('auth')->group(function () {
            Route::get('/', 'getAllWarranties')->name('warranty.index');
            Route::post('add', 'store')->name('warranty.store');
            Route::get('/edit/{id}','edit')->name('warranty.edit');
            Route::delete('delete/{id}', 'delete')->name('warranty.delete');
            //image
            Route::get('view/{id}', 'data')->name('image.view');
        });
//Admin contact

        Route::middleware('auth')->controller(ContactUsController::class)->prefix('contact-us')->group(function (){
            Route::get('/show', 'show')->name('admin.contact-us');
            Route::get('delete/{id}', 'delete')->name('queries.delete');
        });

        // website products route
        Route::controller(ProductController::class)->prefix('product')->group(function(){

         // Route::get('/projects', 'projects')->name('projects');
          Route::get('/product-list/{id?}', 'productList')->name('product-list');
      //   Route::get('/products', 'products')->name('products');
              Route::get('/products/consumer', 'consumer')->name('consumer');
             Route::get('/products/professional', 'professional')->name('professional');
              Route::get('/projects', 'projects')->name('projects');
          //   Route::get('/product-list/{id?}', 'productList')->name('product-list');
             Route::get('get-all-product-type', 'getAllProductType')->name('product.delete');
             Route::get('/single/product/{id}', 'singleproduct')->name('single-product');
            

      });
      
       Route::get('/search', [ProductController::class, 'search'])->name('search');
      Route::get('/products/{id?}', [ProductController::class, 'List'])->name('list');

     // website Contact
    Route::controller(ContactUsController::class)->prefix('contact-us')->group(function (){
    //   Route::get('/', 'index')->name('contact.us');
     Route::post('/add', 'store')->name('contact-us.add');
        // Route::get('/show', 'show')->name('admin.contact-us');
        // Route::get('delete/{id}', 'delete')->name('queries.delete');

    });

    // website support
    Route::get('/support', [ContactUsController::class, 'support'])->name('support');


    Route::middleware('auth')->controller(SpecificationController::class)->prefix('specification')->group(function (){
       Route::get('/', 'index')->name('specification');
       Route::get('/models', 'getProductModelsByType');
       Route::post('/add', 'store');
       Route::post('/show', 'listing');
       Route::get('/edit/{id}', 'edit');
       Route::get('/delete/{id}', 'delete');

     //  Route::post('/show', 'listing');
        });

        //user side 

        Route::controller(SpecificationController::class)->prefix('specification')->group(function (){

             Route::get('/show/{id}', 'show')->name('model_specification');
             Route::get('/detail/{id}', 'detail')->name('detail');
            
     
         
               
         
             });


