<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

use App\Models\Task;

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
	return redirect()->route('tasks.index');
})->name('index'); 

Route::get('/tasks', function (){
	$tasks = Task::latest()->where('completed', true)->get();  
    return view('tasks.index', [ 
        'tasks' => $tasks 
    ]);
})->name('tasks.index'); 

Route::get('tasks/{id}/more/', function ($id){
	$task = Task::findOrFail($id); 
    return view('tasks.show', [ 
        'task' => $task  
    ]);
})->name('tasks.show'); 

Route::get('tasks/{id}/edit/', function ($id){ 
	$task = Task::findOrFail($id); 
    return view('tasks.edit', [  
        'task' => $task  
    ]);
})->name('tasks.edit'); 


Route::put('tasks/{id}/edit/', function ($id, Request $request){  
	$task = Task::findOrFail($id); 
	$data = $request->validate([
		'title' => 'required|max:255',
		'description' => 'required',
		'long_description' => 'required' 
	]);

	$task->title = $data['title'];
	$task->description = $data['description'];
	$task->long_description = $data['long_description'];
	$task->save();

	return redirect()->route('tasks.show', ['id' => $task->id])
		->with('success', 'Task created successfully');  
})->name('tasks.update');  

Route::view('/tasks/create', 'tasks.create')->name('tasks.create');
Route::post('/tasks', function (Request $request) { 
	$data = $request->validate([
		'title' => 'required|max:255',
		'description' => 'required',
		'long_description' => 'required' 
	]);
	
	$task = new Task;
	$task->title = $data['title'];
	$task->description = $data['description'];
	$task->long_description = $data['long_description'];
	$task->save();

	return redirect()->route('tasks.show', ['id' => $task->id])
		->with('success', 'Task created successfully');  
})->name('tasks.store'); 


Route::get('/greet/{id?}', function ($id) {
	return "hello";
});