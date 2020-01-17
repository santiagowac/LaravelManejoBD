@extends('main')
@section('title')
  <h1 class="text-center">Rol - Detalle</h1>
@endsection
@section('content')

<div class="container-fluid pl-0 pt-4 pb-2 mt-2">
  <div class="row">
    <div class="col-md-12">
    <a type="button" href="./new-modulo" class="btn  btn-dark">
        Asignar Nuevo Modulo
    </a>
    </div>
  </div>
</div>

<table class="table table-dark">
    @if (count($rol->modulos)==0)
    <thead>
    <tr>
      <th scope="col">Este rol no tiene modulos asignados</th>
    </tr>
    </thead>
    @else
      <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">Modulo </th>
        <th scope="col">Rol</th>
      </tr>
      </thead>
      <tbody> 
      @foreach($rol->modulos as $modulo)
          <tr>
          <td>
          <div class="row">
            <div class="span">
                <a href="{{asset('/rol/'.$rol->id.'/eliminar/modulo/'.$modulo->id)}}" onclick="return confirm('Seguro que desea eliminar el registro?')"  class="btn btn-danger btn-fix">
                  <span><strong>  Borrar </strong></span><i class="icon-trash icon-white"></i>       	
                </a>
            </div>
          </div>
          </td> 
          <td>{{$modulo->name}}</td>
          <td>{{$rol->name}}</td>
          </tr>
          @endforeach
      </tbody>   
    @endif
</table>
@endsection