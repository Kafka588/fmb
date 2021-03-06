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
    
    public function cat(category $category){
        $catCourse = Course::find($category);
        return view('category', compact('catCourse'));
    }
    
}