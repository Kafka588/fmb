@extends('admin.layouts.master')
@section('content')
<div style="padding: 10%">
<section class="teachers-container half-fit">
    <div class="teachers-header">
      <h2 class="teachers-title">Сурагчид</h2>
      <a href="{{route('panel')}}"><button class="teachers-more-text">Буцах</button></a>
    </div>
    <div class="teachers-list-container shadow-25-3 mg-20">
        <table style="padding-left:20px">     
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>E-mail</td>
                </tr>
            </thead>
            <tbody>
      @foreach ($allUser as $u)
        <div class="income-item">
            <tr>
        <td><p class="income-number">{{$u->id}}<i class="fas fa-sort-up"></i></p></td>
        <td><p class="income-desc">{{$u->name}}</p></td>
        <td><p class="income-date">{{$u->email}}</p></td>
        </tr>
      </div>
      @endforeach
    </tbody>
    </table>
    </div>
  </section>
</div>
@endsection