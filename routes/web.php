<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

Route::get('/',[BlogController::class,'index'])->name('blogs.index');
Route::get('Blogs/create',[BlogController::class,'create'])->name('blogs.create');
Route::get('Blogs/header',[BlogController::class,'header'])->name('blogs.header');
Route::get('Blogs/allblogs',[BlogController::class,'allblogs'])->name('blogs.allblogs');
Route::get('Blogs/login',[BlogController::class,'login'])->name('blogs.login');
