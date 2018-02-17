@extends('layouts.admin')

@section('content')
{{--  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>  --}}
{{--  @foreach ($all as $user)
    {{$user->name}}<br>
@endforeach  --}}
<div class="container">
    <h2>Users</h2><br  />
    <form method="post">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="name">Name:</label>
          <input type="text" class="form-control" name="name">
        </div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="price">Price:</label>
            <input type="text" class="form-control" name="price">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <button type="submit" class="btn btn-success" style="margin-left:38px">Add Product</button>
        </div>
      </div>
    </form>
  </div>
@endsection
