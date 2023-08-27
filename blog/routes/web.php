<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Livewire\Counter;
use App\Http\Livewire\Calculator;
use App\Http\Livewire\TodoItem;

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
    return redirect()->route('articles.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('articles', ArticleController::class); 
Route::resource('categories', CategoryController::class);
Route::resource('articles.comments', CommentController::class);

// livewire routes
Route::get('/counter', Counter::class)->name('counter');
Route::get('/calculator', Calculator::class)->name('calculator');  
Route::get('/todo', TodoItem::class)->name('todo'); 