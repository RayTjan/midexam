<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\HabitatController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Models\Animal;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/',[PageController::class,'index'])->name("index");
// make Index, Image
Route::resource('habitat',HabitatController::class);
Route::resource('animal',AnimalController::class);
Route::resource('user',UserController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
