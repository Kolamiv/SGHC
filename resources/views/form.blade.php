@extends('layouts.app')


@section('content')

<h1>Formulario </h1>
<form method="POST" action="{{route ('formulario.ansers')}}">
	@csrf
	<label for= nombre>
		Nombre
		<input type="text" name="nombre" value="{{old('nombre')}}">
		{{ $errors -> first('nombre')}}
	</label>
	<br>
	<label for= email>
		Email
		<input type="email" name="email" value="{{old('email')}}">
			{{ $errors -> first('email')}}
	</label>
		<br>
	<label for = mensaje value="{{old('mensaje')}}">
		Mensaje
		<textarea name="mensaje"></textarea>
		{{ $errors -> first('mensaje')}}
	</label>
	<br>
	<input type="submit" name="Enviar">

</form>



@endsection