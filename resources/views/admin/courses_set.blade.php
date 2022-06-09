@extends('admin.layouts.master')
@section('content')
<div style="padding: 10%">
<section class="teachers-container ">
    <div class="teachers-header">
      <h2 class="teachers-title">Орлого</h2>
      <a href="{{route('panel')}}"><button class="teachers-more-text">Буцах</button></a>
    </div>
    <div class="teachers-list-container shadow-25-3 mg-20">
        <table style="padding-left:20px">    
            <thead>
                <tr>
                    <th>№</th>
                    <th>Гарчиг</th>
                    <th>Багш</th>
                    <th>Зураг</th>
                    <th>Үнэ</th>
                    <th>Марк</th>
                    <th>rating</th>
                    <th>Сурагч</th>
                    <th>ID</th>
                </tr>
            </thead> 
            <tbody>
      @foreach ($allCourses as $cs)
        <div class="income-item">
            <tr>
        <td><p class="income-number">{{$cs->id}}<i class="fas fa-sort-up"></i></p></td>
        <td><p class="income-desc">{{$cs->title}}</p></td>
        <td><p class="income-date">{{$cs->user}}</p></td>
        <td><img width="25%" src="{{asset($cs->img)}}"></img></td>
        <td><p class="income-date">{{$cs->price}}</p></td>
        <td><p class="income-date">{{$cs->mark}}</p></td>
        <td><p class="income-date">{{$cs->rating}}</p></td>
        <td><p class="income-date">{{$cs->subers}}</p></td>
        <td><p class="income-date">{{$cs->cat_id}}</p></td>
        <td><p class="income-date">Идэвхитэй</p></td>
        <td><a href="{{route('course_edit',$cs->id)}}">Засах</a></td>
        <td><form action="{{ route('course_delete', $cs->id) }}" method="POST">
            @csrf
            @method('DELETE')
        
            <button type="submit">
                Delete
            </button>
        </form></td>
        </tr>
      </div>
      @endforeach
    </tbody>
    </table>
    </div>
    <div style="padding-top: 20px">Нэмэх</div>
    <a href="{{route('course_create')}}"><button class="create-btn" type="submit" name="submit" value="insert">Add</button></a>
    </section>
</div>
@endsection