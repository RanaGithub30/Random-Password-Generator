<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PasswordGenerateController;


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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [PagesController::class, 'home'])->name('/');
Route::get('register', [PagesController::class, 'register'])->name('register');
Route::post('post-register', [PagesController::class, 'post_register'])->name('post-register');
Route::get('login', [PagesController::class, 'login'])->name('login');
Route::post('post-login', [PagesController::class, 'post_login'])->name('post-login');
Route::get('logout', [PagesController::class, 'logout'])->name('logout');

// password generation..

Route::get('password-generation', [PasswordGenerateController::class, 'generate'])->name('password-generation');