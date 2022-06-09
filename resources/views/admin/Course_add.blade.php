@extends('admin.layouts.master')
@section('content')
<div style="padding: 10%">
{{-- <section class="teachers-container"> --}}
    <div class="teachers-header">
        <h2 class="teachers-title">Хичээл Нэмэх</h2>
        <a href="{{route('panel')}}"><button class="teachers-more-text">Буцах</button></a>
    </div>
    
        <form action="{{route('course_store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div >
                <label for="">Нэр</label>
                <input class="create-input" type="text" name="title" >
                <label for="">Тайлбар</label>
                <input class="create-input" type="text" name="description" >
                <label for="">User</label>
                <input class="create-input" type="text" name="user" >
                <label for="">Image</label>
                <input class="create-input" type="File" name="img">
                <label for="">Video</label>
                <input class="create-input" type="File" name="video">
                <label for="">Price</label>
                <input class="create-input" type="text" name="price" >
                <label for="">Sale</label>
                <input class="create-input" type="text" name="sale" >
                <label for="">Mark</label>
                <input class="create-input" type="text" name="mark" >
                <label for="">Rating</label>
                <input class="create-input" type="text" name="rating" >
                <label for="">Subscribers</label>
                <input class="create-input" type="text" name="subs" >
                <div><select name="cat_id" style="border: 1px;
                    border-color: #333 transparent transparent transparent;">
                    @foreach ($cat as $c)
                        <option style="color: #333;
                        padding: 8px 16px;
                        border: 1px solid ;
                        border-color:  rgba(0, 0, 0, 0.1) transparent;
                        cursor: pointer;
                        user-select: none;" value="{{$c->id}}">{{$c->name}}</option>
                    @endforeach
                    </select></div>
                <button class="create-btn" type="submit" name="submit" value="insert" style="margin-top:20px">Save</button>
            </div>
        </form>
    </section>
</div>
@endsection