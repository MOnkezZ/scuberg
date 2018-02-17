@extends('layouts.admin')

@section('content')

<h2>User</h2><br  />

<table class="table table-bordered">
  <thead>
    <tr>
      <th width="40">ID</th>
      <th>Name</th>
      <th width="140">E-mail</th>
      <th width="140">Permission</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($all as $users)
    <tr>
      <td>{{$users->id}}</td>
      <td>{{$users->name}}</td>
      <td>{{$users->email}}</td>
      <td>
        @if($users->is_admin=='1')
        <i class="fas fa-user-secret"></i> Admin
        @else
        <i class="fas fa-user"></i> User
        @endif
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection