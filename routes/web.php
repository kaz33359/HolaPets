<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminAuth;

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


//admin-side 


//login section

Route::group(['middleware' => ['AdminAuth']], function () {
        Route::post('admin/login_pro', [AdminController::class, 'checkadmin'])->name('auth.checkadmin');
        Route::get('admin/index', [AdminController::class, 'dashboard']);
        Route::get('admin/enquiry', [AdminController::class, 'enquiry']);
        Route::get('admin/userManagement', [AdminController::class, 'userManagement']);
        Route::get('admin/vendorManagement', [AdminController::class, 'vendorManagement']);
        Route::get('admin/viewProduct', [AdminController::class, 'viewProduct']);
        Route::get('admin/viewUser', [AdminController::class, 'viewUser']);
        Route::get('admin/viewVendor', [AdminController::class, 'viewVendor']);
});

Route::get('admin/login', [AdminController::class, 'login']);
Route::get('admin/hash', [AdminController::class, 'hashp']);


//admin-side

//user side
Route::get('/' , [UserController::class, 'dashboard']);
Route::get('user/about' , [UserController::class, 'about']);
Route::get('user/blog' , [UserController::class, 'blog']);
Route::get('user/blogDetails' , [UserController::class, 'blogDetails']);
Route::get('user/cart' , [UserController::class, 'cart']);
Route::get('user/checkout' , [UserController::class, 'checkout']);
Route::get('user/contact' , [UserController::class, 'contact']);
Route::get('user/faq' , [UserController::class, 'faq']);
Route::get('user/productDetails' , [UserController::class, 'productDetails']);
Route::get('user/products' , [UserController::class, 'products']);
Route::get('user/trackOrder' , [UserController::class, 'trackOrder']);
Route::get('user/userProfile' , [UserController::class, 'userProfile']);
Route::get('user/wishlist' , [UserController::class, 'wishlist']);