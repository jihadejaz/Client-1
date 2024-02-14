<?php

use App\Http\Controllers\tahacontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/user_login', function () {
    return view('login');
})->name('loginpage');

Route::get('/user_registration', function () {
    return view('registration');
})->name('registrationpage');

Route::get('/shop_products', function () {
    return view('products');
});

Route::get('/about_us', function () {
    return view('aboutus');
})->name('aboutpage');

Route::get('/contact_us', function () {
    return view('contactus');
})->name('contactpage');



Route::get('/my_cart', function () {
    return view('cart');
})->name('mycart');

Route::get('/product_information', function () {
    return view('productdetails');
});

Route::get('/my_orders', function () {
    return view('myorders');
});

// USER REGISTRATION ROUTE 

Route::post('registerdata', [tahacontroller::class, 'registration'])->name('senddata');

// USER SIGN IN ROUTE 

Route::post('insert', [tahacontroller::class, 'signin'])->name('validatedata');






// FETCH PRODUCTS DATA IN HOME PAGE 

Route::get('/', [tahacontroller::class, 'FetchProducts'])->name('index');

// FETCH PRODUCTS DATA IN SHOP PAGE 

Route::get('/shop_products', [tahacontroller::class, 'FetchProductShop'])->name('productspage');


// ADD TO CART ROUTE 

Route::post('newcart/{id?}', [tahacontroller::class, 'AddToCart'])->name('add_to_cart');

Route::get('cart', [tahacontroller::class, 'readCart'])->name('orders');




Route::get('productdetails/{name}', [tahacontroller::class, "productdetails"])->name('singleProduct');


// EMPTY CART 
Route::get('cart/{id?}', [TahaController::class, 'removeFromCart'])->name('removecart');

// MY ORDER 
Route::get('my_orders', [tahacontroller::class, 'myorder'])->name('myorders');

// PLACE ORDER ROUTE 
Route::post('confirm-order', [tahacontroller::class, 'orderPlaced'])->name('orderPlaced');

// CANCLE ORDER ROUTE 

Route::get('order-cancelation/{name}', [tahacontroller::class, 'cancleOrderByProductTitle'])->name('cancelOrder');

// CONTACT US ROUTE 

Route::post('/models', [tahacontroller::class, 'contact'])->name('contactmsg');


// LOGOUT ROUTE 

Route::get('logout', function () {
    if (session()->has('adminemail')) {
        session()->pull('adminemail');
    } elseif (session()->has('uemail')) {
        session()->pull('uemail');
    }
    return redirect('/');
})->name('logout');




// ADMIN ROUTS 

Route::middleware('adminguard')->group(function () {

    Route::get('/my_admin_panel', function () {

        return view('admin.admin');
    })->name('adminpage');

    // FETCH ORDERS TO ADMIN 

    Route::get('admin-orders-page', [tahacontroller::class, 'FetchOrders'])->name('ordersPage');

    // FETCH CUSTOMERS TO ADMIN     

    Route::get('admin-customers-page', [tahacontroller::class, 'FetchCustomers'])->name('customersPage');

    // UPLOAD PRODUCTS ROUTE 

    Route::get('admin-products-upload', function () {
        return view('admin.productsupload');
    })->name('uploadProductsPage');


    // T-SHIRT ROUTE 

    Route::post('register_tshirt', [tahacontroller::class, 'tshirt'])->name('tshirt_registration');

    // BAG ROUTE 

    Route::post('register_bag', [tahacontroller::class, 'bag'])->name('bag_registration');

    // PERFUME ROUTE 

    Route::post('register_perfume', [tahacontroller::class, 'perfume'])->name('perfume_registration');

    // GLASSES ROUTE 

    Route::post('register_glasses', [tahacontroller::class, 'glasses'])->name('glasses_registration');

    // ORDER SHIPPED ROUTE 

    Route::get('admin-order-shipped/{order}', [tahacontroller::class, 'orderShipped'])->name('shippedOrder');
});
