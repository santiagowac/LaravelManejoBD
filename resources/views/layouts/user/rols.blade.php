@extends('main')
@section('title')
  <h1 class="text-center">Usuario - Detalle - Agregar Rol</h1>
@endsection
@section('content')

<form action="/user/new-rol" class="form" method="POST">
<label class="pt-3"><strong>Nombre</strong></label>
    {{ csrf_field() }}
	<div>
        <select name="rolId" class="browser-default custom-select">
        <option>Asigna un rol para el usuario {{$user->name}}</option>
        @foreach($rols as $rol)
        <option value="{{$rol->id}}" required="required" name="rolId" type="text">{{$rol->name}}</option>
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