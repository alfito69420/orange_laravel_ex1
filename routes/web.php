<?php

use App\Http\Controllers\OrangeController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [OrangeController::class, 'index'])->name("index");

Route::get("/posts/index", [PostsController::class, 'posts'])->name("admin.posts.index");

Route::get('/detail-product/{id}', [OrangeController::class, 'show'])->name('detail');









