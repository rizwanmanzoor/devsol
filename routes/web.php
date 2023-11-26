<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('home');
});
// Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('services', [HomeController::class, 'services'])->name('services');
Route::get('blog', [HomeController::class, 'blog'])->name('blog');
Route::get('blogdetail', [HomeController::class, 'blogdetail'])->name('blogdetail');
