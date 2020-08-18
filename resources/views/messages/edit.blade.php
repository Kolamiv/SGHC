@extends('layouts.app')


@section('content')

<h1>Edicion </h1>
<form method="POST" action="{{route("formulario.update",$mensaje->id)}}">
	{!!method_field('PUT')!!}
	@csrf
	<label for= nombre>
		Nombre
		<input type="text" name="nombre" value="{{$mensaje->nombre}}">
		{{ $errors -> first('nombre')}}
	</label>
	<br>
	<label for= email>
		Email
		<input type="email" name="email" value="{{$mensaje->email}}">
			{{ $errors -> first('email')}}
	</label>
		<br>
	<label for = mensaje value="">
		Mensaje
		<textarea name="mensaje">{{$mensaje->mensaje}}</textarea>
		{{ $errors -> first('mensaje')}}
	</label>
	<br>
	<input type="submit" name="Enviar">

</form>



@endsection