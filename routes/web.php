<?php

use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;

Route::get('/tasks', [TaskController::class, 'task']);
Route::get('/login', [TaskController::class, 'login']);
Route::post('/login',[TaskController::class, 'add_task']);

