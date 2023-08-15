<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActionController;
use App\Http\Controllers\YetController;
use App\Http\Controllers\ArticleController;

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

// Route::view('/', 'home.index')->name('home.index'); 

// Route::prefix('/orders')->name('orders.')->group(function () {

//     Route::get('/', function () {
//         return 'All orders';
//     })->name('all'); 
    
//     Route::get('/pending', function () {
//         return 'pending orders';
//     })->name('pending');

// });

Route::get('/', function () {
    return redirect()->route('articles.index'); 
});

Route::get('/single', YetController::class)->name('single');

Route::prefix('/home')->name('home.')->group(function () {
    
    Route::get('/', [HomeController::class, 'index'])->name('index'); 
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
});

Route::resource('articles', ArticleController::class);