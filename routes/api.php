<?php

use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Display all tasks
Route::get('/', [TaskController::class, 'find_all']);


//add a task 
Route::post('/add_task',[TaskController::class, 'add_task']);

//Display a task
Route::get('/task/{id}', [TaskController::class, 'find_one']);


//Delete a task

Route::get('delete_task/{id}', [TaskController::class, 'delete_task']);


// //Afficher au navigateur
// Route::get('/tasks', [TaskController::class, 'task']);
