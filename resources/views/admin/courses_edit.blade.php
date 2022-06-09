@extends('admin.layouts.master')
@section('content')
<div style="padding: 10%">
{{-- <section class="teachers-container"> --}}
    <div class="teachers-header">
        <h2 class="teachers-title">Хичээл Засах</h2>
        <a href="{{route('panel')}}"><button class="teachers-more-text">Буцах</button></a>
    </div>
    @foreach ($oneCourse as $c)
        <form action="{{route('course_update', $c->id)}}" method="POST">
            @csrf
            @method('put')
            <div >
                <label for="">Нэр</label>
                <input class="create-input" type="text" name="title" value="{{$c->title}}">
                <label for="">Тайлбар</label>
                <input class="create-input" type="text" name="description" value="{{$c->description}}">
                <label for="">User</label>
                <input class="create-input" type="text" name="user" value="{{$c->user}}">
                <label for="">Image</label>
                <input class="create-input" type="File" name="img" value="{{$c->img}}">
                <label for="">Video</label>
                <input class="create-input" type="File" name="video" value="{{$c->video}}">
                <label for="">Price</label>
                <input class="create-input" type="text" name="price" value="{{$c->price}}">
                <label for="">Sale</label>
                <input class="create-input" type="text" name="sale" value="{{$c->sale}}">
                <label for="">Mark</label>
                <input class="create-input" type="text" name="mark" value="{{$c->mark}}">
                <label for="">Rating</label>
                <input class="create-input" type="text" name="rating" value="{{$c->rating}}">
                <label for="">Subscribers</label>
                <input class="create-input" type="text" name="subs" value="{{$c->subers}}">
                <div><select name="cat_id" style="border: 1px;
                    border-color: #333 transparent transparent transparent;">
                    @foreach ($cat as $cs)
                        <option style="color: #333;
                        padding: 8px 16px;
                        border: 1px solid ;
                        border-color:  rgba(0, 0, 0, 0.1) transparent;
                        cursor: pointer;
                        user-select: none;" value="{{$cs->id}}">{{$cs->name}}</option>
                    @endforeach
                    </select></div>
                <button class="create-btn" type="submit" name="submit" value="insert" style="margin-top:20px">Add</button>
            </div>
        </form>
        @endforeach
    </section>
</div>
@endsection