@extends('admin.layouts.master')
@section('content')
<div style="padding: 10%">
<section class="teachers-container half-fit">
    <div class="teachers-header">
      <h2 class="teachers-title">Орлого</h2>
      <a href="{{route('panel')}}"><button class="teachers-more-text">Буцах</button></a>
    </div>
    <div class="teachers-list-container shadow-25-3 mg-20">
        <table style="padding-left:20px">     
            <tbody>
      @foreach ($category as $cat)
        <div class="income-item">
            <tr>
        <td><p class="income-number">{{$cat->id}}<i class="fas fa-sort-up"></i></p></td>
        <td><p class="income-desc">{{$cat->name}}</p></td>
        <td><p class="income-date">{{$cat->updated_at}}</p></td>
        <td><a href="{{route('cat_edit',$cat->id)}}">Засах</a></td>
        <td><form action="{{ route('cat_delete', $cat->id) }}" method="POST">
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
    <div style="padding-top: 20px">Категори Нэмэх</div>
    <form action="{{route('cat_store')}}" method="POST">
        @csrf
        <div>
            <input class="create-input" type="text" name="cat_name">
            <button class="create-btn" type="submit" name="submit" value="insert">Update</button>
        </div>
    </form>
  </section>
</div>
@endsection