<?php

// use App\Http\Controllers\PhotoController;
// use App\Http\Controllers\WelcomeController;
// use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\ProductController;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\SalesController;
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

// Route::get('/', [HomeController::class,'index']);   
// Route::get('/hello', function () {
//     return 'Hello World';
// });

// Route::get('/world', function () {
//     return 'World';
//     });

// Route::get('/selamat', function () {
//     return 'Selamat Datang';
//     });

// Route::get('/about', function () {
//     return 'Chandra Bagus Sulaksono 2241760079';
//     });
    
// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya '.$name;
//     });

// Route::get('/posts/{post}/comments/{comment}', function
//     ($postId, $commentId) {
//     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
//     });

//     Route::get('/user/{name?}', function ($name=null) {
//         return 'Nama saya '.$name;
//     });

// Route::get('/user/{name?}', function ($name='John') {
//     return 'Nama saya '.$name;
//     });

// Route::get('/hello', [WelcomeController::class,'hello']);

// Route::get('/', [HomeController::class,'index']);   

// Route::get('/about', [AboutController:: class,'about']);

// Route::get('/articles/{id}', [ArticleController::class, 'showArticle']);

// Route::resource('photos', PhotoController::class);

// Route::resource('photos', PhotoController::class)->only([
//     'index', 'show'
//     ]);

//     Route::resource('photos', PhotoController::class)->except([
//         'create', 'store', 'update', 'destroy'
//         ]);

// Route::get('/greeting', function () {
// return view('hello', ['name' => 'Chandra']);
// });

// Route::get('/greeting', [WelcomeController::class,'greeting']);   


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route untuk kategori produk dengan prefix 'category'
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage'])->name('category.food_beverage');
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth'])->name('category.beauty_health');
    Route::get('/home-care', [ProductController::class, 'homeCare'])->name('category.home_care');
    Route::get('/baby-kid', [ProductController::class, 'babyKid'])->name('category.baby_kid');
});

// Route untuk User dengan parameter
Route::get('/user/{id}/name/{name}', [UserController::class, 'show'])->name('user.profile');

// Route untuk halaman penjualan
Route::get('/sales', [SalesController::class, 'index'])->name('sales');


