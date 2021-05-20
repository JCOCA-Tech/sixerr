<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserServicesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// blog page
Route::resource('posts', PostsController::class);

// user management page
Route::resource('users', UsersController::class);

// marketplace page
Route::resource('userServices', UserServicesController::class);

// user search
Route::get('/usersearch', [UsersController::class, 'search']);

// post search
Route::get('/postsearch', [PostsController::class, 'search']);
