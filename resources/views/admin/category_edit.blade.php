@extends('admin.layouts.master')
@section('content')
<div style="padding: 10%">
<section class="teachers-container half-fit">
    <div style="padding: 20px">Категори Засах</div>
    @foreach ($oneCategory as $cs)
    <form action="{{route('cat_update', $cs->id)}}" method="POST">
        @csrf
        @method('put')
        <div>
            
            <input class="create-input" type="text" name="cat_name" value="{{$cs->name}}">
            
            <button class="create-btn" type="submit" name="submit" value="insert">Update</button>
        </div>
       
    </form>
    @endforeach
  </section>
</div>
@endsection