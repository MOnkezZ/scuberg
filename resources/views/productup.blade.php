@extends('layouts.admin')

@section('content')

<div class="container">
  <h2>Product @if ($chk=="update")
   Update ID: {{$prod->id}}
   @else
   Add
 @endif</h2><br  />
 <form method="post" action="{{url('productsave')}}">

  @if ($chk=="update")
  <input type="hidden" name="prodid" value="{{$prod->id}}">
  @else
  <input type="hidden" name="prodid" value="0">
  @endif

  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label>Product Name</label>
    <input type="text" class="form-control" name="prodname" placeholder="Enter Product Name" @if ($chk=="update")value="{{$prod->prodname}}" @endif >

  </div>
  <div class="form-group">
    <label>Select Category</label>
    <select class="form-control" name="cateid">
      @foreach ($cate as $arr)
      <option value="{{$arr->id}}" @if($chk=="update") @if($prod->cateid==$arr->id) selected @endif @endif>{{$arr->catename}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label>Product Price</label>
    <input type="number" class="form-control" name="price" step=".01" placeholder="Enter Price" @if ($chk=="update")value="{{$prod->price}}" @endif>

  </div>
  <div class="form-group">
    <label>Product Description</label>
    <textarea class="form-control" name="proddescription" rows="3" placeholder="Enter Product Description">
      @if ($chk=="update")
      {{$prod->description}}
      @endif
    </textarea>
  </div>
  <div class="form-group">
    <label>Upload Image</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection
