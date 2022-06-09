@extends('admin.layouts.master')
@section('content')
<main>
      
        <button class="nav-icon-btn bars-container" aria-label="menu">
          <i class="fas fa-bars nav-icon"></i>
        </button>
        <div class="header-left">
          <h1 class="panel-nav-title">Хяналтын самбар</h1>
        </div>
        <div class="header-right">
        </div>
        <section class="fit cards-container">
       
      
        <div class="card-container add-course-container">
          <a href="{{route('course_create')}}" class="add-course">
            <h2 class="add-course-title">Сургалт нэмэх</h2>
          </a>
        </div>
        <div class="card-container add-course-container">
          <a href="{{route('cat_create')}}" class="add-course">
            <h2 class="add-course-title">Категори нэмэх</h2>
          </a>
        </div>
      </section>
      <section class="teachers-container half-fit">
        <div class="teachers-header">
          <h2 class="teachers-title">Сургалт</h2>
          <a href="{{route('course')}}"><button class="teachers-more-text">Бүгдийг үзэх</button></a>
        </div>
        <div class="teachers-list-container shadow-25-3 mg-20">
          <table>
          @foreach ($allCourses as $cs)
          <tbody>
            <tr>
            <td><p class="income-number">{{$cs->id}}<i class="fas fa-sort-up"></i></p></td>
            <td><p class="income-desc">{{$cs->title}}</p></td>
            <td><p class="income-date">{{$cs->user}}</p></td>
            <td><p class="income-date">{{$cs->price}}</p></td>
          </tr>
          </div>  
        </tbody>
          @endforeach
        </table>
      </section>
      <section class="teachers-container half-fit">
        <div class="teachers-header">
          <h2 class="teachers-title">Категори</h2>
          <a href="{{route('cat_create')}}"><button class="teachers-more-text">Бүгдийг үзэх</button></a>
        </div>
        <div class="teachers-list-container shadow-25-3 mg-20">
          @foreach ($category as $cat)
            <div class="income-item">
            <p class="income-number">{{$cat->id}}<i class="fas fa-sort-up"></i></p>
            <p class="income-desc">{{$cat->name}}</p>
            <p class="income-date">{{$cat->updated_at}}</p>
          </div>
          @endforeach
        </div>
      </section>
    </main>
@yield('content')

@endsection