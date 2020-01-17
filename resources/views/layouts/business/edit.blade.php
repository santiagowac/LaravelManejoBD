@extends('main')
@section('title')
  <h1 class="text-center">Business - Editar</h1>
@endsection
@section('content')

<form action="{{url('/business/post/edit/'.$business->id)}}" class="form" method="POST">

{{ csrf_field() }}
    <div class="form">
		<label class="pt-3" ><strong>Nit</strong></label>
		<div>

			@if (!empty($business->nit))
				<input class="form-control" value="{{$business->nit}}" required="required" name="nit" type="text">
				@else
			    <input class="form-control"  required="required" name="nit" type="text">
			@endif

		</div>
		<label class="pt-3" ><strong>Nombre</strong></label>
		<div>

			@if (!empty($business->name))
				<input class="form-control" value="{{$business->name}}" required="required" name="name" type="text">
				@else
			    <input class="form-control"  required="required" name="name" type="text">
			@endif

		</div>
		<label class="pt-3" ><strong>Ciudad</strong></label>
		<div>

			@if (!empty($business->city))
				<input class="form-control" value="{{$business->city}}" required="required" name="city" type="text">
				@else
			    <input class="form-control"  required="required" name="city" type="text">
			@endif

		</div>
		
	</div>
    <div class="pt-3">
        <button type="submit" class="btn btn-dark">Editar</button>
        <button href="#" class="btn btn-light" type="reset"><a href="/business" class="a-f">Cancelar</a></button>
    </div>


</form>

@endsection