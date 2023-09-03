<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;

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
    return view('welcome');
});

Auth::routes();
Route::middleware('auth')->group(function(){
    Route::get('user/profile',[ProfileController::class,'index'])->name('user.profile');
    Route::get('/users/edit',[ProfileController::class,"edit"])->where('id','[0-9]+');
    Route::put('/users/{id}',[ProfileController::class,"update"])->where('id','[0-9]+');
    Route::get('/posts/index',[PostController::class,'index']);
    Route::get('/posts/create',[PostController::class,"create"]);
    Route::post('/posts',[PostController::class,"store"]);
    Route::get('/posts/like',[PostController::class,"like"]);
    Route::get('/posts/comment',[PostController::class,"comment"]);
    Route::post('/posts',[PostController::class,"save"]);
    Route::get('/posts/{id}/edit',[PostController::class,"edit"])->where('id','[0-9]+');
    Route::put('/posts/{id}',[PostController::class,"update"])->where('id','[0-9]+');
    Route::get('/posts/{id}',[PostController::class,"destroy"])->where('id','[0-9]+');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    });

