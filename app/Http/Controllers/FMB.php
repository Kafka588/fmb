<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class FMB extends Controller
{
    public function index(){
        return view('index');
    }
    public function signup(){
        return view('signup');
    }
    public function login(){
        return view('login');
    }
    public function cart(){
        return view('cart');
    }
    public function teacher(){
        return view('teacher-panel');
    }
    public function lesson(){
        return view('lesson');
    }
}
