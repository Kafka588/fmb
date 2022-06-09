@extends('simple_user.layouts.master')
@section('content')
<main>
    <div class="poster">
        <img style="width: 100%" src="{{asset('assets/home-bg-desktop.jpg')}}" srcset="
        {{asset('assets/home-bg-desktop.jpg')}} 770w,
        {{asset('assets/home-bg-desktop.jpg')}} 360w
      " sizes="(max-width: 1000px) 770px, (max-width: 769px) 360px" alt="background-image" />
        <form class="poster-search-container">
            <label>
                <h3 class="poster-search-title">Ирээдүйгээ гэрэлтүүл</h3>
                <p class="poster-search-alert">Бүх сургалтууд 10/29 дуустал 29,900₮ хямдралтай байна</p>
                <div class="poster-input-search-container">
                    <button class="poster-icon-btn" aria-label="search-bottom">
                        <i class="fas fa-search nav-icon"></i>
                    </button>
                    <input type="text" placeholder="Хайх..." class="poster-search-input" />
                </div>
            </label>
        </form>
    </div>
    <div class="main-title-container">
        <a href="{{route('index')}}"><button class="main-title">Бүх сургалтууд</button></a>
        @foreach ($category as $c)
        <a href="{{route('catLecture', $c->id)}}"><button class="main-title">{{$c->name}}</button></a>
        @endforeach
        
    </div>
    <hr />
    <div class="cards-container">
        @foreach ($Courses as $co)
        <div class="card-container">
            <a href="{{route('lesson',$co->id)}}">
                <img style="width:260px; height:160px;object-fit: contain" src="{{asset($co->img)}}" srcset="{{asset($co->img)}} 1x, {{asset($co->img)}} 2x" alt="Course" class="card-image" />
                <h2 class="card-title">
                   {{$co->title}}
                </h2>
                <small class="card-teacher">{{$co->user}}</small>
                <div class="card-rating-container">
                    <span>&#11088; {{$co->rating}}</span>
                    <span>({{$co->subers}})</span>x
                </div>
                <div class="card-price">
                    <span>₮{{$co->price}}</span><small>₮{{$co->sale}}</small>
                </div>
                <small class="card-best">{{$co->mark}}</small>
            </a>
        </div>
        @endforeach
    </div>
    
</main>
@endsection