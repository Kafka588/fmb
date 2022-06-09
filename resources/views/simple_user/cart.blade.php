@extends('simple_user.layouts.master')
@section('content')
<main>
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
@yield('content')

@endsection