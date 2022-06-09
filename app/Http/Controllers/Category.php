<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Course as ModelsCourse;
use App\Models\Category as ModelsCategory;

class Category extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function panel()
    {
        $allCourses = ModelsCourse::orderByDesc('id')->get();
        $Category = ModelsCategory::orderByDesc('id')->get();
        $Courses = Course::OrderByDesc('id')->limit(15)->get();
        return view('admin.panel', compact(['Courses', 'Category','allCourses']));
        
    }
    public function income(){
        return view('admin.income');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = new ModelsCategory;
        $cat->name = $request->cat_name;
        $cat->save();
        return redirect('admin/home');
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
    public function edit(ModelsCategory $cat)
    {
        $oneCategory = ModelsCategory::find($cat);
        return view('admin.category_edit', compact('oneCategory'));
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
        $justCat = ModelsCategory::find($id);
        $justCat->name = $request->cat_name;
        $justCat->update();
        return redirect('admin/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelsCategory $Category)
    {
        $Category->delete();
        return redirect('admin/home');
    }
}
