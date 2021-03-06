<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/admin', [AdminController::class, 'admin']);
Route::get('/addcategory', [CategoryController::class, 'addcategory']);
Route::post('/savecategory', [CategoryController::class, 'savecategory']);
Route::get('/categories', [CategoryController::class, 'categories']);
Route::get('/edit_category/{id}', [CategoryController::class, 'edit_category']);
Route::post('/updatecategory', [CategoryController::class, 'updatecategory']);
Route::get('/delete_category/{id}', [CategoryController::class, 'delete_category']);

Route::get('/addslider', [SliderController::class, 'addslider']);
Route::get('/sliders', [SliderController::class, 'sliders']);

Route::get('/products', [ProductController::class, 'products']);
Route::post('/saveproduct', [ProductController::class, 'saveproduct']);
Route::get('/editproduct/{id}', [ProductController::class, 'editproduct']);
Route::post('/updateproduct', [ProductController::class, 'updateproduct']);
Route::get('/addproduct', [ProductController::class, 'addproduct']);
Route::get('/deleteproduct/{id}', [ProductController::class, 'deleteproduct']);
Route::get('/activateProduct/{id}', [ProductController::class, 'activateProduct']);
Route::get('/unactivateProduct/{id}', [ProductController::class, 'unactivateProduct']);
Route::get('/view_product_by_category/{category_name}', [ProductController::class, 'view_product_by_category']);




Route::get('/', [ClientController::class, 'home']);
Route::get('/shop', [ClientController::class, 'shop']);
Route::get('/archive', [ClientController::class, 'archive']);
Route::get('/about', [ClientController::class, 'about']);
Route::get('/products/{id}', [ClientController::class, 'show'])->name("product.show");
Route::get('/addToCart/{id}', [ClientController::class, 'addToCart']);
Route::get('/remove_from_cart/{id}', [ClientController::class, 'remove_from_cart']);
Route::get('/cart', [ClientController::class, 'cart']);
Route::get('/checkout', [ClientController::class, 'checkout']);
Route::get('/login', [ClientController::class, 'login']);
Route::get('/signup', [ClientController::class, 'signup']);
Route::post('/creatingAccount', [ClientController::class, 'creatingAccount']);
Route::post('/accessAccount', [ClientController::class, 'accessAccount']);
Route::get('/logOut', [ClientController::class, 'logOut']);
Route::post('/finalCheckout', [ClientController::class, 'finalCheckout']);
Route::get('/orders', [ClientController::class, 'orders']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
