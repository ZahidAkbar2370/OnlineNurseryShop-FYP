<?php

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
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
    $products = Product::all();
    $categories = Category::all();
    return view('welcome', compact('products', 'categories'));
});

Route::get('user_logout', function () {
    Auth::logout();

    return redirect("/");
});

Route::get('/admin', function () {
    return view('Admin.admin_layout');
});

Route::get("admin/categories", [App\Http\Controllers\Admin\CategoryController::class, "index"]);
Route::get("admin/create-category", [App\Http\Controllers\Admin\CategoryController::class, "create"]);
Route::post("admin/save-category", [App\Http\Controllers\Admin\CategoryController::class, "store"]);
Route::get("admin/delete-category/{id}", [App\Http\Controllers\Admin\CategoryController::class, "destroy"]);


Route::get("admin/products", [App\Http\Controllers\Admin\ProductController::class, "index"]);
Route::get("admin/create-product", [App\Http\Controllers\Admin\ProductController::class, "create"]);
Route::post("admin/save-product", [App\Http\Controllers\Admin\ProductController::class, "store"]);
Route::get("admin/delete-product/{id}", [App\Http\Controllers\Admin\ProductController::class, "destroy"]);

Route::get("admin/customers", [App\Http\Controllers\Admin\CustomerController::class, "index"]);
Route::get("admin/create-customer", [App\Http\Controllers\Admin\CustomerController::class, "create"]);
Route::post("admin/save-customer", [App\Http\Controllers\Admin\CustomerController::class, "store"]);
Route::get("admin/delete-customer/{id}", [App\Http\Controllers\Admin\CustomerController::class, "destroy"]);

Route::get("admin/invoices", [App\Http\Controllers\Admin\InvoiceController::class, "index"]);
Route::get("admin/create-invoice", [App\Http\Controllers\Admin\InvoiceController::class, "create"]);
Route::post("admin/save-invoice", [App\Http\Controllers\Admin\InvoiceController::class, "store"]);
Route::get("admin/delete-invoice/{id}", [App\Http\Controllers\Admin\InvoiceController::class, "destroy"]);
Route::get("admin/invoice-detail/{id}", [App\Http\Controllers\Admin\InvoiceController::class, "detail"]);



Route::get("customer/add-to-cart/{id}", [App\Http\Controllers\Customer\CartController::class, "cart"]);
Route::get("customer/cart", [App\Http\Controllers\Customer\CartController::class, "viewCart"]);
Route::get("customer/remove-cart/{id}", [App\Http\Controllers\Customer\CartController::class, "remove"]);
Route::get("customer/profile", [App\Http\Controllers\Customer\ProfileController::class, "profile"]);
Route::post("customer/update-profile", [App\Http\Controllers\Customer\ProfileController::class, "profileUpdate"]);
Route::post("customer/history", [App\Http\Controllers\Customer\ProfileController::class, "history"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
