@extends('main')
@section('title')
  <h1 class="text-center">Usuario - Detalle - Agregar Compañia</h1>
@endsection
@section('content')

<form action="/user/new-business" class="form" method="POST">
<label class="pt-3"><strong>Nombre</strong></label>
    {{ csrf_field() }}
	<div>
        <select name="businessId" class="browser-default custom-select">
        <option>Asigna una compañia para el usuario {{$user->name}}</option>
        @foreach($businesses as $business)
        <option value="{{$business->id}}" required="required" name="businessId" type="text">{{$business->name}}</option>
        @endforeach
        </select>
        <input class="ocult" value="{{$user->id}}" name="userId" type="text">
    </div>
    <div class="pt-3">
        <button type="submit" class="btn btn-dark">Asignar</button>
        <button class="btn btn-light" type="reset"><a href="./detalle" class="a-f">Cancelar </a></button>
    </div>
</form>
@endsection