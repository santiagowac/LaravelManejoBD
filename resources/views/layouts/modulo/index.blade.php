@extends('main')
@section('title')
  <h1 class="text-center">Modulos</h1>
@endsection
@section('content')

<div class="container-fluid pl-0 pt-1 pb-2">
  <div class="row">
    <div class="col-md-12">
      <a type="button" href="/modulo/create" class="btn  btn-dark">
        Agregar Nuevo
      </a>
    </div>
  </div>
</div>


<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">path</th>
      <th scope="col">name</th>
      <th scope="col">id</th>
    </tr>
  </thead>
  <tbody>
  @foreach($modulos as $modulo)
    <tr>
      <td>
      <div class="row">
        <div class="span">
            <a href="{{asset('/modulo/'.$modulo->id.'/eliminar')}}" onclick="return confirm('Seguro que desea eliminar el registro?')"  class="btn btn-danger btn-fix">
              <span><strong>  Borrar </strong></span><i class="icon-trash icon-white"></i>       	
            </a>
        </div>
        <div class="span">
            <a href="{{asset('/modulo/'.$modulo->id.'/editar')}}" class="btn btn-info btn-fix">
                <span><strong>  Editar </strong></span><i class="icon-edit icon-white"></i>       
            </a> 	
        </div>
      </div>
      </td>
      <td>{{$modulo->ruta}}</td>
      <td>{{$modulo->name}}</td>
      <td>{{$modulo->id}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection