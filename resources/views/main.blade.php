@extends('layouts.app')

@section('content')

<div class="container">
  <h2>Sport Store</h2><br  />

  <form method="post" action="{{url('home')}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label>Search</label>
    <select name="cateid">
      @foreach($cate as $category)
      <option value="{{$category->id}}">{{$category->catename}}</option>
      @endforeach
    </select>
    <input type="submit" name="Search" value="Search">
  </form>

  @foreach ($all as $prod)
  <div class="row">
    <div class="col-md-4"><img src="{{$prod->picture}}"></div>
    <div class="col-sm-8">
      <input type="hidden" value="0" id="to-status">
      <h3 class="title">{{$prod->prodname}}</h3>
      <div class="description-article">{{$prod->description}}</div>
      <div>
        <b>Price:</b> 
        {{$prod->price}}                            </div>
        <div>
          <b>Category:</b> 
          {{$prod->catename}}
        </div>
        <div class="pull-right">
          <a href="{{url('productdetail').'/'.$prod->id}}" class="btn btn-info">View More</a>
        </div>
      </div>
    </div>
    <hr>
    @endforeach
  </div>

  @endsection