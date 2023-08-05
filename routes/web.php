<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::get('/create',[\App\Http\Controllers\AssignmentController::class,'Action']);



// Task--6
Route::get('/create/{category_id}',[\App\Http\Controllers\AssignmentController::class,'Action']);




//Task---7
Route::get('/posts/{id}/delete',[\App\Http\Controllers\AssignmentController::class,'Action']);




//Task---10
Route::get('/categories/{id}/posts',[\App\Http\Controllers\AssignmentController::class,'Action']);
