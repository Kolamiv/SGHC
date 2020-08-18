@extends('layouts.app')


@section('content')

<h1>Notas-Mensajes</h1>

<table class="table table-light">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Name</th>
			<th scope="col">Email</th>
			<th scope="col">Mesaje</th>
			<th scope="col">Edit</th>
		</tr>
	</thead>
	<tbody>
		 @foreach($mensajes as $mensaje)
		<tr>
			<td scope="row">{{$mensaje->id}}</td>
			<td>
				<a href="{{route("formulario.show",$mensaje->id)}}">
					{{$mensaje->nombre}}
				</a>
			</td>
			<td>{{$mensaje->email}}</td>
			<td>{{$mensaje->mensaje}}</td>
			<td><a href="{{route("formulario.edit",$mensaje->id)}}">Edit</a></td>
			<td>
				<form  method="POST" action ="{{route("formulario.destroy",$mensaje->id)}}">
						{!!method_field('DELETE')!!}
						@csrf
					<button type="submit"> Eliminar </button>

				</form>
			</td>
		</tr>
		@endforeach
	</tbody>


</table>



@endsection