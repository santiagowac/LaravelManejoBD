@extends('main')
@section('title')
  <h1 class="text-center">Rols - Editar</h1>
@endsection
@section('content')

<form action="{{url('/user/post/edit/'.$user->id)}}" class="form" method="POST">

	{{ csrf_field() }}
    <div class="form">
		<label class="pt-3"><strong>Nombre</strong></label>
		<div>

			@if (!empty($user->name))
				<input class="form-control" value="{{$user->name}}" required="required" name="name" type="text">
				@else
			    <input class="form-control"  required="required" name="name" type="text">
			@endif

		</div>
		<label class="pt-3"><strong>Tarjeta</strong></label>
		<div>

			@if (!empty($user->card))
				<input class="form-control" value="{{$user->card}}" required="required" name="card" type="text">
				@else
			    <input class="form-control"  required="required" name="card" type="text">
			@endif

		</div>
		<label class="pt-3"><strong>Fecha de Nacimiento</strong></label>
		<div>

			@if (!empty($user->nto_date))
				<input class="form-control" value="{{$user->nto_date}}" required="required" name="nto_date" type="text">
				@else
			    <input class="form-control"  required="required" name="nto_date" type="text">
			@endif

		</div>
		<label class="pt-3"><strong>Dirección</strong></label>
		<div>

			@if (!empty($user->adress))
				<input class="form-control" value="{{$user->adress}}" required="required" name="adress" type="text">
				@else
			    <input class="form-control"  required="required" name="adress" type="text">
			@endif

		</div>
		<label class="pt-3"><strong>Telefono</strong></label>
		<div>

			@if (!empty($user->phone))
				<input class="form-control" value="{{$user->phone}}" required="required" name="phone" type="text">
				@else
			    <input class="form-control"  required="required" name="phone" type="text">
			@endif

		</div>
	</div>
    <div class="pt-3">
        <button type="submit" class="btn btn-dark">Editar</button>
        <button class="btn btn-light" type="reset"><a href="/user" class="a-f">Cancelar </a></button>
    </div>


</form>

@endsection