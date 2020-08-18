@extends('layouts.app')


@section('content')

<h1>Mensaje</h1>
<br>
<h2>{{$mensaje->nombre}} - {{$mensaje->email}}</h2>
<br>
<p>{{$mensaje->mensaje}}</p>

@endsection