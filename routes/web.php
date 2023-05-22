<?php

use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\MatakuliahController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [UserController::class, 'index']);
Route::get('/create-user', [UserController::class, 'create']);
Route::post('/store-user', [UserController::class, 'store']);
Route::get('/edit-user/{id}', [UserController::class, 'edit']);
Route::put('/update-user', [UserController::class, 'update']);
Route::delete('/delete-user/{id}', [UserController::class, 'destroy']);

Route::get('/mata-kuliah', [MatakuliahController::class, 'index']);
Route::get('/create-mata-kuliah', [MatakuliahController::class, 'create']);
Route::post('/store-mata-kuliah', [MatakuliahController::class, 'store']);
Route::get('/edit-mata-kuliah/{id}', [MatakuliahController::class, 'edit']);
Route::put('/update-mata-kuliah', [MatakuliahController::class, 'update']);
Route::delete('/delete-mata-kuliah/{id}', [MatakuliahController::class, 'destroy']);

Route::get('/enrollment', [EnrollmentController::class, 'index']);