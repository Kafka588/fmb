<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class FMB extends Controller
{
    public function index(){
        $Courses = Course::OrderByDesc('id')->limit(15)->get();
        $category = Category::get();
        return view('index', compact('Courses'));
    }
    public function signup(){
        return view('signup');
    }
    public function login(){
        return view('login');
    }
    public function cart(){
        $Courses = Course::OrderByDesc('id')->limit(15)->get();
        return view('cart', compact('Courses'));
    }
    
    public function cat(category $category){
        $catCourse = Course::find($category);
        return view('category', compact('catCourse'));
    }
    public function lesson(Course $lecture){
        return view('lesson', compact('lecture'));
    }
}