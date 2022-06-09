<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Courses = Course::OrderByDesc('id')->limit(15)->get();
        $category = Category::get();
        return view('simple_user.home',compact('Courses'));
    }
    public function profile()
    {
        $Courses = Course::OrderByDesc('id')->limit(15)->get();
        $category = Category::get();
        return view('simple_user.profile',compact('Courses'));
    }
    public function cart()
    {
        $Courses = Course::OrderByDesc('id')->limit(15)->get();
        $category = Category::get();
        return view('simple_user.cart',compact('Courses'));
    }
    public function lesson(Course $lecture)
    {
        $Courses = Course::OrderByDesc('id')->limit(15)->get();
        $category = Category::get();
        return view('simple_user.lesson',compact(['lecture','Courses']));
    }
}
