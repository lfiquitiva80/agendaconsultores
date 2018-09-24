@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')



  <div class="panel-body">

<div class="container">
{!! Form::open(['route' => 'plantilla_checklist.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="nombre" id="nombre">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>REGISTROS PLANTILLA PARA EL CHECKLIST</h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#crear_plantilla_checklist'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear plantilla_checklist</a>

  @include('plantilla_checklist.create')

  @include('plantilla_checklist.edit')




<p>
<div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
      <td>id</td>
      <td>codigo_plantilla_checklist</td>
      <td>descripcion_plantilla_checklist</td>
      <td>filtro_checklist</td>
      

       <td>  Acción </td>



    </tr>
  </thead>
  <tbody>

  @foreach($plantilla_checklist as $row)
    <tr>



          <td>{{$row->id}}</td>
          <td>{{$row->codigo_plantilla_checklist}}</td>
          <td>{{$row->descripcion_plantilla_checklist}}</td>
          <td>{{$row->filtro_checklist}}</td>
         

          <td><a   data-toggle="modal" data-target="#editar_plantilla_checklist" data-id="{{$row->id}}"
            data-codigoplantillachecklist="{{$row->codigo_plantilla_checklist}}"
            data-descripcionplantillachecklist="{{$row->descripcion_plantilla_checklist}}"
            data-filtrochecklist="{{$row->filtro_checklist}}"
            class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>

            <td>@include('plantilla_checklist.destroy')</td>
          
    </tr>
  </tbody>

  @endforeach


</table>
</div>

<center>{{ $plantilla_checklist->links() }}</center>

</div>

</div>
</div>



@endsection
