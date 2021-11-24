<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/', function () {
    return view('welcome');
});

//Get all tasks
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks');
//Add a new task
Route::match(['get', 'post'], '/add-task', [TaskController::class, 'addTask'])->name('add.task');
//Edit task
Route::match(['get', 'post'], '/edit-task/{id}', [TaskController::class, 'editTask'])->name('edit.task');
//Delete task
Route::get('/delete-task/{id}', [TaskController::class, 'deleteTask'])->name('delete.task');
