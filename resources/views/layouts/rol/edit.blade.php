@extends('main')
@section('title')
  <h1 class="text-center">Rols - Editar</h1>
@endsection
@section('content')

<form action="{{url('/rol/post/edit/'.$rol->id)}}" class="form" method="POST">

    {{ csrf_field() }}
    <div class="form">
		<label ><strong>Nombre</strong></label>
		<div>

			@if (!empty($rol->name))
				<input class="form-control" value="{{ $rol->name}}" required="required" name="name" type="text">
				@else
			    <input class="form-control"  required="required" name="name" type="text">
			@endif

		</div>
	</div>
    <div class="pt-3">
        <button type="submit" class="btn btn-dark">Editar</button>
        <button href="#" class="btn btn-light" type="reset"><a href="/rol" class="a-f">Cancelar</a> </button>
    </div>


</form>

@endsection