@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')



  <div class="panel-body">

<div class="container">
{!! Form::open(['route' => 'actividad.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="nombre" id="nombre">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>REGISTROS DE ACTIVIDAD</h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#crear_actividad'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear actividad</a>

<li><a href="{{ route('tipo_actividad.index') }}" class="btn btn-primary pull-right"><i class="fa fa-low-vision" aria-hidden="true"></i><span> Ir a Tipo de Actividad</span></a></li>

  @include('actividad.create')

  @include('actividad.edit')




<p>
<div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
      <td>id_actividad</td>
      <td>descripcion_actividad</td>
      <td>  Acción </td>



    </tr>
  </thead>
  <tbody>

  @foreach($actividad as $row)
    <tr>



          <td>{{$row->id}}</td>
          <td>{{$row->descripcion_actividad}}</td>

         

          <td><a   data-toggle="modal" data-target="#editar_actividad" data-id="{{$row->id}}"
            data-descripcion_actividad="{{$row->descripcion_actividad}}" 
            data-modo_actividad="{{$row->modo_actividad}}"
            data-tipo="{{$row->tipo}}"
            class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>

            <td>@include('actividad.destroy')</td>
          
    </tr>
  </tbody>

  @endforeach


</table>
</div>

<center>{{ $actividad->links() }}</center>

</div>

</div>
</div>



@endsection
