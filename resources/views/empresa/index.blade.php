@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')



  <div class="panel-body">

<div class="container">
{!! Form::open(['route' => 'empresa.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="nombre" id="nombre">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>REGISTROS DE EMPRESA</h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#crear_empresa'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear empresa</a>

  @include('empresa.create')

  @include('empresa.edit')




<p>
<div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
     <th>id</th>
      <th>razon_social</th>
      <th>nit</th>
      <th>logo</th>
      <th>direccion</th>
      <th>telefono</th>
      <th>pais</th>
      <th>ciudad</th>
      <th>celular</th>
      <th>contacto</th>




    </tr>
  </thead>
  <tbody>

  @foreach($empresa as $row)
    <tr>



<td>{{$row->id}}</td>
<td>{{$row->razon_social}}</td>
<td>{{$row->nit}}</td>
<td>@if (empty($row->logo))
            <img src="{{ asset('/img/empresa.jpg')}}" style="width:50px; height:50px;  border-radius:50%">
            @else
            <img src="{{asset($row->logo)}}"  style="width:50px; height:50px;  border-radius:50%">

            @endif</td>
<td>{{$row->direccion}}</td>
<td>{{$row->telefono}}</td>
<td>{{$row->pais}}</td>
<td>{{$row->ciudad}}</td>
<td>{{$row->celular}}</td>
<td>{{$row->contacto}}</td>




        

          <td><a   data-toggle="modal" data-target="#editar_empresa" 
              data-id="{{$row->id}}"
              data-razon_social="{{$row->razon_social}}"
              data-nit="{{$row->nit}}"
              data-logo="{{$row->logo}}"
              data-direccion="{{$row->direccion}}"
              data-telefono="{{$row->telefono}}"
              data-pais="{{$row->pais}}"
              data-ciudad="{{$row->ciudad}}"
              data-celular="{{$row->celular}}"
              data-contacto="{{$row->contacto}}"

            class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>

            <td>@include('empresa.destroy')</td>
          
    </tr>
  </tbody>

  @endforeach


</table>
</div>

<center>{{ $empresa->links() }}</center>

</div>

</div>
</div>



@endsection
