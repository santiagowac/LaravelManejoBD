@extends('main')
@section('title')
  <h1 class="text-center">Usuario - Detalle</h1>
@endsection
@section('content')

<div class="container-fluid pl-0 pt-4 pb-2 mt-2">
  <div class="row">
    <div class="col-md-12">
    <a type="button" href="./new-business" class="btn  btn-dark">
        Asignar Nueva Compañia
    </a>
    <a type="button" href="./new-rol" class="btn  btn-dark">
        Asignar Nuevo Rol
    </a>
    </div>
  </div>
</div>

<table class="table table-dark">
    @if (count($user->rols)==0)
    <thead>
    <tr>
      <th scope="col">Este usuario no tiene rols asignados</th>
    </tr>
    </thead>
    @else
      <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">Rol </th>
        <th scope="col">Usuario</th>
      </tr>
      </thead>
      <tbody> 
      @foreach($user->rols as $rols)
          <tr>
          <td>
          <div class="row">
            <div class="span">
                <a href="{{asset('/user/'.$user->id.'/eliminar/rol/'.$rols->id)}}" onclick="return confirm('Seguro que desea eliminar el registro?')"  class="btn btn-danger btn-fix">
                  <span><strong>  Borrar </strong></span><i class="icon-trash icon-white"></i>       	
                </a>
            </div>
          </div>
          </td> 
          <td>{{$rols->name}}</td>
          <td>{{$user->name}}</td>
          </tr>
          @endforeach
      </tbody>   
    @endif
</table>
<table class="table table-dark">
    @if (count($user->businesses)==0)
      <thead>
      <tr>
        <th scope="col">Este usuario no tiene compañias asignadas</th>
      </tr>
      </thead>
    @else
      <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">Ciudad</th>
        <th scope="col">Compañia</th>
        <th scope="col">Usuario</th>
      </tr>
      </thead>
      <tbody> 
      @foreach($user->businesses as $business)
          <tr>
          <td>
          <div class="row">
            <div class="span">
                <a href="{{asset('/user/'.$user->id.'/eliminar/business/'.$business->id)}}" onclick="return confirm('Seguro que desea eliminar el registro?')"  class="btn btn-danger btn-fix">
                  <span><strong>  Borrar </strong></span><i class="icon-trash icon-white"></i>       	
                </a>
            </div>
          </div>
          </td>  
          <td>{{$business->city}}</td>
          <td>{{$business->name}}</td>
          <td>{{$user->name}}</td>
          </tr>
        @endforeach
    </tbody>   
    @endif
</table>
@endsection