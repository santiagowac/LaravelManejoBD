@extends('main')
@section('title')
  <h1 class="text-center">Rols</h1>
@endsection
@section('content')

<div class="container-fluid pl-0 pt-1 pb-2">
  <div class="row">
    <div class="col-md-12">
      <a type="button" href="/rol/create" class="btn  btn-dark">
        Agregar Nuevo
      </a>
    </div>
  </div>
</div>


<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">name</th>
      <th scope="col">id</th>
    </tr>
  </thead>
  <tbody>
    @foreach($rols as $rol)
    <tr>
      <td>
      <div class="row">
      <div class="span">
            <a href="{{asset('/rol/'.$rol->id.'/detalle')}}" class="btn btn-warning btn-fix">
              <span><strong> Detalle </strong></span><i class="icon-print icon-white"></i>       	
            </a>
       </div>
        <div class="span">
            <a href="{{asset('/rol/'.$rol->id.'/eliminar')}}" onclick="return confirm('Seguro que desea eliminar el registro?')"  class="btn btn-danger btn-fix">
              <span><strong>  Borrar </strong></span><i class="icon-trash icon-white"></i>       	
            </a>
        </div>
        <div class="span">
            <a href="{{asset('/rol/'.$rol->id.'/editar')}}" class="btn btn-info btn-fix">
                <span><strong>  Editar </strong></span><i class="icon-edit icon-white"></i>       
            </a> 	
        </div>
      </div>
      </td>
      <td>{{$rol->name}}</td>
      <td>{{$rol->id}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection