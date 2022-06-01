<?php

use App\Http\Controllers\FMB;
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

Route::get('/', [FMB::class, 'index','FMB@index'])->name('index');
Route::get('/signup', [FMB::class, 'signup','FMB@signup'])->name('signup');
Route::get('/login', [FMB::class, 'login', 'FMB@login'])->name('login');
Route::get('/cart', [FMB::class, 'cart', 'FMB@cart'])->name('cart');
Route::get('/teacher', [FMB::class, 'teacher', 'FMB@teacher'])->name('teacher');
Route::get('/lesson', [FMB::class, 'lesson', 'FMB@lesson'])->name('lesson');