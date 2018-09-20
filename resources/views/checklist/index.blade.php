@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')



  <div class="panel-body">

<div class="container">

<div class="panel panel-default">
<h4><b><center>CHECKLIST</h4></b></center>


@include('checklist.create')
@include('checklist.edit')

<a class="btn btn-info" data-toggle="modal" href='#crear_checklist'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear Checklist</a>

<p>
<div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
      
      
     <td>Descripción Checklist</td>
     <td>Filtro plantilla</td>
     <td>Tabla Encabezado</td>
     <td>Tabla Detalle</td>
     



    </tr>
  </thead>
  <tbody>

  @foreach($checklist as $row)
    <tr>



          
          <td>{{$row->descripcion}}</td>
          <td>{{$row->filtro_plantilla}}</td>
          <td>{{$row->tabla_encabezado}}</td>
          <td>{{$row->tabla_detalle}}</td>


           <td><a data-toggle="modal" data-target="#editarchecklist" data-id="{{$row->id}}"
            data-descripcion="{{$row->descripcion}}"
            data-filtro_plantilla="{{$row->filtro_plantilla}}"
            data-tabla_encabezado="{{$row->tabla_encabezado}}"
            data-tabla_detalle="{{$row->tabla_detalle}}"
          
            class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
          <td>@include('checklist.destroy')</td>
          
                   

        
          
    </tr>
  </tbody>

  @endforeach


</table>
</div>

<center>{{ $checklist->links() }}</center>

</div>

</div>
</div>



@endsection
