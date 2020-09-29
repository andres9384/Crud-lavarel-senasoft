<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\UsersController;
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


Route::get('users',[UsersController::class, 'index'])->name('users.index');
Route::get('users/create',[UsersController::class, 'created'])->name('users.create');
Route::post('users',[UsersController::class, 'store'])->name('users.store');
Route::delete('users/{id}',[UsersController::class, 'destroy'])->name('users.delete');
Route::get('users/{id}',[UsersController::class, 'edit'])->name('users.edit');
Route::put('users/{id}',[UsersController::class, 'update'])->name('users.update');