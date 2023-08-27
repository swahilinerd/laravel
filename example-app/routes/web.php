<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;

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
    return redirect()->route('posts.index'); 
});

Route::get('/home', function () {
    return redirect()->route('articles.index');
});

Route::resource('articles', ArticleController::class);
Auth::routes();

Route::resource('users', UserController::class)->only('index', 'show'); 
Route::resource('users.profile', ProfileController::class)->only('create', 'store', 'update');

Route::resource('categories', CategoryController::class); 
Route::resource('posts', PostController::class);