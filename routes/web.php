<?php


use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\client\AuthController;
use App\Http\Controllers\client\ContactController;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\ShopController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminAuth;

Route::get('/', function () {
    return view('/client/main');
});

//Client_contact
Route::controller(ContactController::class)->group(function () {
    Route::get('/views/client/pages/contact', 'index')->name('contactpage');
    Route::post('postcontact', 'postcontact')->name('postcontact');
});

//Client_login
Route::controller(AuthController::class)->group(function () {
    Route::get('/views/client/pages/login', 'login')->name('loginpage');
    Route::post('/processlogin', 'processlogin')->name('processlogin');
    Route::get('/views/client/pages/register', 'register')->name('registerpage');
    Route::post('/registerprocess', 'registerprocess')->name('registerprocess');
    Route::post('/logout', 'logout')->name('logout');
});


//Client_shop
Route::controller(ShopController::class)->group(function () {
    Route::get('/views/client/pages/shop', 'index')->name('shoppage');
});


//Admin_Login
Route::controller(LoginController::class)->group(function (){
    Route::get('/views/admin/pages/login', 'index')->name('loginadmin');
    Route::post('/login', 'login')->name('loginadminprocess');
    Route::post('/logout', 'logout')->name('logoutadmin');
});


//Admin_home
Route::controller(\App\Http\Controllers\admin\HomeController::class)->group(function (){
    Route::get('/views/admin/pages/home', 'index')->name('homepageadmin');
})->middleware(AdminAuth::class);


//Admin_User
Route::controller(UserController::class)->group(function (){
    Route::get('/views/admin/pages/account/list', 'index')->name('listAccount');
    Route::get('/views/admin/pages/account/add', 'addAccount')->name('addAccount');
    Route::post('/addprogressaccount', 'addProgress')->name('addProgress');
});

//Admin_product
Route::controller(ProductController::class)->group(function (){
    Route::get('/views/admin/pages/product/list','index')->name('listProduct');
    Route::get('/views/admin/pages/product/add','addProduct')->name('addProduct');
    Route::post('/addProgressProduct', 'addProgressProduct')->name('addProgressProduct');
});