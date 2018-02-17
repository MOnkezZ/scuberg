@extends('layouts.admin')

@section('content')

<div class="container">
    <h2>Product</h2><br  />
    @foreach ($all as $prod)
    <form method="post">
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
                    <b>Product ID:</b> 
                    <u>{{$prod->id}}</u>
                </div>
                <div class="pull-right">
                    <a href="{{url('productup').'/'.$prod->id}}" class="btn btn-info">Edit</a>
                    <a href="{{url('productdel').'/'.$prod->id}}" class="btn btn-danger confirm-delete" onclick="return confirm('Are you sure you want to delete this item?');" >Delete</a>
                </div>
            </div>
      </div>
    </form>
    <hr>
    @endforeach
  </div>
  
@endsection
