@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')



  <div class="panel-body">

<div class="container">
{!! Form::open(['route' => 'estado_cita.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="nombre" id="nombre">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>REGISTROS DE estado_cita</h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#crear_estado_cita'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear estado_cita</a>

  @include('estado_cita.create')

  @include('estado_cita.edit')




<p>
<div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
      <td>id_estado_cita</td>
      <td>descripcion_estado_cita</td>
      <td>Color</td>
       <td>  Acción </td>



    </tr>
  </thead>
  <tbody>

  @foreach($estado_cita as $row)
    <tr>



          <td>{{$row->id}}</td>
          <td>{{$row->Estado}}</td>
          <td><input type="color" value="{{$row->color_agenda}}"></td>
         

          <td><a   data-toggle="modal" data-target="#editar_estado_cita" data-id="{{$row->id}}"
            data-Estado="{{$row->Estado}}"
            data-color_agenda="{{$row->color_agenda}}"
            class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>

            <td>@include('estado_cita.destroy')</td>
          
    </tr>
  </tbody>

  @endforeach


</table>
</div>

<center>{{ $estado_cita->links() }}</center>

</div>

</div>
</div>



@endsection
