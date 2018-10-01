@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')



  <div class="panel-body">

<div class="container">
{!! Form::open(['route' => 'actividad_cargo.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="nombre" id="nombre">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>REGISTROS DE actividad_cargo</h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#crear_actividad_cargo'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear actividad_cargo</a>

  @include('actividad_cargo.create')

  @include('actividad_cargo.edit')




<p>
<div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
      <td>id</td>
      <td>Descripción cargo</td>
      <td>Descripción actividad</td>
       <td>  Acción </td>



    </tr>
  </thead>
  <tbody>

  @foreach($actividad_cargo as $row)
    <tr>



          <td>{{$row->id}}</td>
          <td>{{$row->cargos->descripcion_cargo}}</td>
          <td>{{$row->actividad->descripcion_actividad}}</td>
         

          <td><a   data-toggle="modal" data-target="#editar_actividad_cargo" data-id="{{$row->id}}"
            data-cargo="{{$row->id_cargo}}"
            data-actividad="{{$row->id_actividad}}"
            class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>

            <td>@include('actividad_cargo.destroy')</td>
          
    </tr>
  </tbody>

  @endforeach


</table>
</div>

<center>{{ $actividad_cargo->links() }}</center>

</div>

</div>
</div>



@endsection
