<?php
namespace App\http\Controllers;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('task-list-app/resources/views/tasks');
// });
//Route::get('/', [TaskController::class, 'index'])->name('index.index'); // Redirecting the homepage to task list
Route::get('/', [TaskController::class, 'index'])->name('index.index');
Route::resource('tasks', controller: TaskController::class);
