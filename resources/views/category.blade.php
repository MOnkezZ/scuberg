@extends('layouts.admin')

@section('content')

<div class="container-fluid">
    <h2>Category</h2><br  />
    <form method="post" action="{{ url('catesave') }}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="row">
        <div class="col-sm-12">

            <div class="form-group">
                @if($chk=="update")
                <label for="exampleInputEmail1">Cate ID: {{$editcate->id}}</label><br>
                <label for="exampleInputEmail1">Cate Name:</label>
                <input type="text" name="catename" class="form-control" placeholder="Enter Category Name" value="{{$editcate->catename}}"><br>
                <input type="hidden" name="cateid" value="{{$editcate->id}}">
                @else
                <label for="exampleInputEmail1">Cate Name:</label>
                <input type="text" name="catename" class="form-control" placeholder="Enter Category Name"><br>
                <input type="hidden" name="cateid" value="0">
                @endif
                <input type="submit" class="btn btn-info" name="Save">

            </div>
        </div>
    </div>
</form>
<!-- @foreach ($all as $cate)
<form method="post">
  <div class="row">
    <div class="col-sm-12">
        <input type="hidden" value="0" id="to-status">
        <h3 class="title">{{$cate->catename}}</h3>
        <div>
            <b>Category ID:</b> 
            <u>{{$cate->id}}</u>
        </div>
        <div class="pull-right">
            <a href="{{ url('category').'/'.$cate->id }}" class="btn btn-info">Edit</a>
            <a href="{{ url('catedel').'/'.$cate->id }}" class="btn btn-danger confirm-delete" onclick="return confirm('Are you sure you want to delete this item?');" >Delete</a>
        </div>
    </div>
</div>
</form>
<hr>
@endforeach -->

<table class="table table-bordered">
    <thead>
      <tr>
        <th width="40">ID</th>
        <th>Name</th>
        <th width="160">Mange</th>
    </tr>
</thead>
<tbody>
    @foreach ($all as $cate)
    <tr>
        <td>{{$cate->id}}</td>
        <td>{{$cate->catename}}</td>
        <td>
            <a href="{{ url('category').'/'.$cate->id }}" class="btn btn-info">Edit</a>
            <a href="{{ url('catedel').'/'.$cate->id }}" class="btn btn-danger confirm-delete" onclick="return confirm('Are you sure you want to delete this item?');" >Delete</a>
        </td>
    </tr>
    @endforeach
</tbody>
</table>

</div>

@endsection
