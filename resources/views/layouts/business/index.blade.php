@extends('main')
@section('title')
  <h1 class="text-center">Businesses</h1>
@endsection
@section('content')

<div class="container-fluid pl-0 pt-1 pb-2">
  <div class="row">
    <div class="col-md-12">
      <a type="button" href="/business/create" class="btn  btn-dark">
        Agregar Nuevo
      </a>
    </div>
  </div>
</div>


<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">city</th>
      <th scope="col">name</th>
      <th scope="col">nit</th>
      <th scope="col">id</th>
    </tr>
  </thead>
  <tbody>
    @foreach($businesses as $business)
    <tr>
      <td>
      <div class="row">
        <div class="span">
            <a href="{{asset('/business/'.$business->id.'/eliminar')}}" onclick="return confirm('Seguro que desea eliminar el registro?')"  class="btn btn-danger btn-fix">
              <span><strong>  Borrar </strong></span><i class="icon-trash icon-white"></i>       	
            </a>
        </div>
        <div class="span">
            <a href="{{asset('/business/'.$business->id.'/editar')}}" class="btn btn-info btn-fix">
                <span><strong>  Editar </strong></span><i class="icon-edit icon-white"></i>       
            </a> 	
        </div>
      </div>
      </td>
      <td>{{$business->city}}</td>
      <td>{{$business->name}}</td>
      <td>{{$business->nit}}</td>
      <td>{{$business->id}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection