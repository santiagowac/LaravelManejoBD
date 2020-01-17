@extends('main')
@section('title')
  <h1 class="text-center">Usuarios</h1>
@endsection
@section('content')

<div class="container-fluid pl-0 pt-1 pb-2">
  <div class="row">
    <div class="col-md-12">
      <a type="button" href="/user/create" class="btn  btn-dark">
        Agregar Nuevo
      </a>
    </div>
  </div>
</div>


<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">phone</th>
      <th scope="col">adress</th>
      <th scope="col">nto_date</th>
      <th scope="col">card</th>
      <th scope="col">name</th>
      <th scope="col">id</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
    <tr>
      <td>
      <div class="row">
      <div class="span">
            <a href="{{asset('/user/'.$user->id.'/eliminar')}}" onclick="return confirm('Seguro que desea eliminar el registro?')"  class="btn btn-success btn-fix nx">
              <span><strong>   </strong></span><i class="icon-unlock icon-white"></i>       	
            </a>
      </div>
        <div class="span">
            <a href="{{asset('/user/'.$user->id.'/detalle')}}" class="btn btn-warning btn-fix nx">
              <span><strong>  </strong></span><i class="icon-print icon-white"></i>       	
            </a>
        </div>
        <div class="span">
            <a href="{{asset('/user/'.$user->id.'/eliminar')}}" onclick="return confirm('Seguro que desea eliminar el registro?')"  class="btn btn-danger btn-fix nx">
              <span><strong>   </strong></span><i class="icon-trash icon-white"></i>       	
            </a>
        </div>
        <div class="span">
            <a href="{{asset('/user/'.$user->id.'/editar')}}" class="btn btn-info btn-fix nx">
                <span><strong>   </strong></span><i class="icon-edit icon-white"></i>       
            </a> 	
        </div>
      </div>
      </td>
      <td>{{$user->phone}}</td>
      <td>{{$user->adress}}</td>
      <td>{{$user->nto_date}}</td>
      <td>{{$user->card}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->id}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection