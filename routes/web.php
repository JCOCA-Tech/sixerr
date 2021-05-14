<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserServicesController;
use App\Http\Controllers\HomeController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

// index page
Route::get('/', [PagesController::class, 'index']);

// about page
Route::get('/about', [PagesController::class, 'about']);

// users page
Route::get('/users/{id}', function ($id) {
    return 'This is a user '.$id;
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// blog page
Route::resource('posts', PostsController::class);

// marketplace page
Route::resource('userServices', UserServicesController::class);
