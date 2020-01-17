@extends('main')
@section('title')
  <h1 class="text-center">Rol - Detalle - Asignar Modulo</h1>
@endsection
@section('content')

<form action="/rol/new-modulo" class="form" method="POST">
<label class="pt-3"><strong>Nombre</strong></label>
    {{ csrf_field() }}
	<div>
        <select name="moduloId" class="browser-default custom-select">
        <option>Asigna un modulo para el rol {{$rol->name}}</option>
        @foreach($modulos as $modulo)
        <option value="{{$modulo->id}}" required="required" name="moduloId" type="text">{{$modulo->name}}</option>
        @endforeach
        </select>
        <input class="ocult" value="{{$rol->id}}" name="rolId" type="text">
    </div>
    <div class="pt-3">
        <button type="submit" class="btn btn-dark">Asignar</button>
        <button class="btn btn-light" type="reset"><a href="./detalle" class="a-f">Cancelar </a></button>
    </div>
</form>
@endsection