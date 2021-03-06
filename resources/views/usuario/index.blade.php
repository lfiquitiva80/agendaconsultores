@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')

        <style>

        .ui-front{z-index:0 !important; }
        .ui-selectmenu-open {z-index:9999 !important;}

        </style>

  <div class="panel-body">

<div class="container">
{!! Form::open(['route' => 'usuario.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="name" id="nombre">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>REGISTROS DE USUARIOS</h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#crear_usuario'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear Usuario</a>

  @include('usuario.create')

  <center><a href="{{ route('usuarioexcel') }}" title="Bajar excel en versión superior al 2016 "> <i class="fa fa-file-excel-o" aria-hidden="true"></i> Download Excel xlsx</a></center>

   @include('usuario.edit')




<p>
<div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
      <td>  id  </td>
      <td>  Nombre</td>
      <td>  email</td>
      <td>  Avatar </td>
      <td>  Perfil Usuario</td>
      <td>  Valor</td>
      <td>  Hora</td>
      <td>  Activo</td>
      <td>  Acción </td>



    </tr>
  </thead>
  <tbody>

  @foreach($usuario as $row)
    <tr>

          <td>{{$row->id}}</td>
                     <td>{{$row->name}}</td>
          <td>{{$row->email}}</td>
          <td>@if ($row->avatar == 'default.jpg')
            <img src="{{ asset('img/default.jpg')}}" style="width:50px; height:50px;  border-radius:50%">
            @else
            <img src="{{asset($row->avatar)}}"  style="width:50px; height:50px;  border-radius:50%">

            @endif</td>
          <td>{{$row->perfil->descripcion_perfil}}</td>
          <td>{{$row->valor}}</td>
          <td>{{$row->horas}}</td>
          <td>@if ($row->activo==1)

              <span class="badge bg-light-blue">Si</span>
              @else
              <span class="badge bg-red">No</span>
              @endif</td>


          <td><a    data-toggle="modal" data-target="#editar_usuario"   data-name="{{$row->name}}"   data-perfil_usuario ="{{$row->perfil_usuario}}" data-email="{{$row->email}}"  data-id="{{$row->id}}" data-type="{{$row->type}}"data-password="{{$row->password}}" data-cargo="{{$row->cargo}}" data-activo="{{$row->activo}}" data-valor="{{$row->valor}}" data-horas="{{$row->horas}}"
          data-avatar="{{$row->avatar}}"
          data-habilitar_empresas="{{$row->habilitar_empresas}}"
           class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"> Edición</i></a></td> <td>@include('usuario.destroy')</td>

    </tr>
  </tbody>

  @endforeach


</table>
</div>

<center>{{ $usuario->links() }}</center>

</div>

</div>
</div>



@endsection
