<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsIndexController;

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

Route::get('/', [PostsIndexController::class, 'index']);
Route::get('add_post', [PostsIndexController::class, 'newPost'])->name('add_post');
Route::post('add_post', [PostsIndexController::class, 'insertNewPost'])->name('insert_post');
