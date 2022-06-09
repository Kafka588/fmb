<?php

use App\Http\Controllers\FMB;
use App\Http\Controllers\Category;
use App\Http\Controllers\Course;
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
Route::get('/cart', [FMB::class, 'cart', 'FMB@cart'])->name('cart');

Route::get('/lesson/{lecture}', [FMB::class, 'lesson', 'FMB@lesson'])->name('lesson');
Route::get('/login', [FMB::class, 'login', 'FMB@login'])->name('login');
Route::get('/category', [FMB::class, 'cat'])->name('catAll');
Route::get('/category/{category}', [FMB::class, 'cat'])->name('catLecture');

//admin
Route::get('/admin/home', [Category::class, 'panel'])->name('panel');
Route::get('/admin/category/create', [Category::class, 'create'])->name('cat_create');
Route::post('/admin/category/create', [Category::class, 'store'])->name('cat_store');
Route::get('/admin/category/update/{cat}', [Category::class, 'edit'])->name('cat_edit');
Route::put('/admin/category/update/{id}', [Category::class, 'update'])->name('cat_update');
Route::delete('/admin/category/delete/{category}', [Category::class, 'destroy'])->name('cat_delete');

Route::get('/admin/courses', [Course::class, 'index'])->name('course');
Route::get('/admin/courses/create', [Course::class, 'create'])->name('course_create');
Route::post('/admin/courses/store', [Course::class, 'store'])->name('course_store');
Route::get('/admin/course/update/{courses}', [Course::class, 'edit'])->name('course_edit');
Route::put('/admin/course/course/{id}', [Course::class, 'update'])->name('course_update');
Route::delete('/admin/course/delete/{course}', [Course::class, 'destroy'])->name('course_delete');