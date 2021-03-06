@extends('main')
@section('title')
  <h1 class="text-center">Modulo - Editar</h1>
@endsection
@section('content')

<form action="{{url('/modulo/post/edit/'.$modulo->id)}}" class="form" method="POST">

	{{ csrf_field() }}
    <div class="form">
		<label class="pt-3"><strong>Nombre</strong></label>
		<div>

			@if (!empty($modulo->name))
				<input class="form-control" value="{{$modulo->name}}" required="required" name="name" type="text">
				@else
			    <input class="form-control"  required="required" name="name" type="text">
			@endif

		</div>
		<label class="pt-3"><strong>Ruta</strong></label>
		<div>

			@if (!empty($modulo->ruta))
				<input class="form-control" value="{{$modulo->ruta}}" required="required" name="path" type="text">
				@else
			    <input class="form-control"  required="required" name="path" type="text">
			@endif

		</div>
	</div>
    <div class="pt-3">
        <button type="submit" class="btn btn-dark">Editar</button>
        <button class="btn btn-light" type="reset"><a href="/modulo" class="a-f">Cancelar </a></button>
    </div>


</form>

@endsection