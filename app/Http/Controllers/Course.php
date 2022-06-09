<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course as ModelsCourse;
use App\Models\Category;
class Course extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allCourses = ModelsCourse::orderByDesc('id')->get();
        return view('admin.courses_set', compact('allCourses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = Category::all();
        return view('admin.course_add', compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = $request->file('img')->getClientOriginalName();
        $zurag = $request->img->move('assets/course', $img);
        $courses = new ModelsCourse();
        $courses->title = $request->title;
        $courses->user = $request->user;
        $courses->price = $request->price;
        $courses->sale = $request->sale;
        $courses->mark = $request->mark;
        $courses->rating = $request->rating;
        $courses->subers = $request->subs;
        $courses->cat_id = $request->cat_id;
        $courses->img = $zurag;
        $courses->save();
        return redirect()->route('panel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelsCourse $courses)
    {
        $cat = Category::all();
        $oneCourse = ModelsCourse::find($courses);
        return view('admin.courses_edit', compact(['oneCourse', 'cat']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $img = $request->file('img')->getClientOriginalName();
        $justCat = ModelsCourse::find($id);
        $justCat->title = $request->title;
        $justCat->user = $request->user;
        $justCat->img = $request->img;
        $justCat->price = $request->price;
        $justCat->sale = $request->sale;
        $justCat->mark = $request->mark;
        $justCat->rating = $request->rating;
        $justCat->cat_id = $request->cat_id;
        $justCat->update();
        return redirect('admin/courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelsCourse $Course)
    {
        $Course->delete();
        return redirect('admin/home');
    }
}
