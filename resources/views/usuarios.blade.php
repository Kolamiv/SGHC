@extends('layouts.app')


@section('content')

	<table class="table table-light">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($user as $value)
    <tr>
      <th scope="row">{{$value->id}}</th>
      <td>{{$value->name}}</td>
      <td>{{$value->email}}</td>
      <td>{{$value->role}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection

