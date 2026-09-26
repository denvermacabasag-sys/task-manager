<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Redirect root to the task list
Route::redirect('/', '/tasks');

// Resourceful CRUD routes (except show — not needed for this project)
Route::resource('tasks', TaskController::class)->except('show');

// Extra route just for toggling Pending <-> Completed
Route::patch('/tasks/{task}/status', [TaskController::class, 'updateStatus'])
    ->name('tasks.updateStatus');
