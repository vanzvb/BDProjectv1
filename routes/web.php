<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
return view('welcome');});

Auth::routes();
// Auth::routes([
//     'register' => false,
//     'reset' => false, 
//     'verify' => false,
//   ]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/admin/users',App\Http\Controllers\Admin\UserController::class,['except'=>['show','create','store']])->middleware('can:manage-users');

// Route::get('/admin/users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('users.index');
// Route::delete('/admin/users/{user}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('users.destroy');
// Route::patch('/admin/users/{user}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('users.update');
// Route::get('/admin/users/{user}/edit', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('users.edit');
