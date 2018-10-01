@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')


<div role="tabpanel">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active">
      <a href="#Proceso" aria-controls="Proceso" role="tab" data-toggle="tab">
     
      Proceso

      </a>
    </li>
    <li role="presentation">
      <a href="#Auditoria" aria-controls="Auditoria" role="tab" data-toggle="tab">Auditoria</a>
    </li>

    <li role="presentation">
      <a href="#Cerrados" aria-controls="Cerrados" role="tab" data-toggle="tab">Cerrados</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="Proceso">
      

       <div class="panel-body">

<div class="container">
{!! Form::open(['route' => 'encabezado_dev_iva.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="nombre" id="nombre">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>REGISTROS DE encabezado_dev_iva</h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#crear_encabezado_dev_iva'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear encabezado_dev_iva</a>

  @include('encabezado_dev_iva.create')

  @include('encabezado_dev_iva.edit')




<p>


<div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
<th>id</th>
<th>responsable</th>
<th>cliente</th>
<th>auditor</th>
<!-- <th>bim</th>
<th>fecha_vencimiento</th>
<th>fecha_entrega</th>
<th>Observaciones</th> -->
<th>enviar_auditoria</th>
<th>cierre_auditoria</th>
<th>ubicacion_archivos</th>
<!-- <th>observaciones_auditoria</th>
<th>ubicacion_archivos</th>
<th>fecha_auditoria_encabezado_dev_iva</th>
<th>fecha_elaboracion</th> -->

       <th>  Acción </th>



    </tr>
  </thead>
  <tbody>

  @foreach($encabezado_dev_iva as $row)
    <tr>



          <td>{{$row->id}}</td>
                    <td>{{$row->usuarios->name}}</td>
          <td>{{$row->clientes->nombre_cliente}}</td>
          <td>{{$row->auditores->name}}</td>
          <!-- <td>{{$row->bim}}</td>
          <td>{{$row->fecha_vencimiento}}</td>
          <td>{{$row->fecha_entrega}}</td>
          <td>{{$row->Observaciones}}</td> -->
          <td>@if($row->enviar_auditoria==1)
              <span class="badge bg-light-blue">Si</span> 
              @else
              <span class="badge bg-red">No</span>
              @endif
          </td>

           <td>@if($row->cierre_auditoria==1)
             <span class="badge bg-light-blue">Si</span> 
              @else
              <span class="badge bg-red">No</span>
              @endif
          </td>
        
          <!-- <td>{{$row->observaciones_auditoria}}</td>-->
          <td>
            @if(!empty($row->ubicacion_archivos))
            <a class="btn btn-danger" href="{{asset('storage/'.$row->ubicacion_archivos)}}" role="button"><i class="fa fa-download" aria-hidden="true"></i> Descargar</a>
            @else
            Falta subir el archivo
            @endif
          </td>
          <!--<td>{{$row->fecha_auditoria_encabezado_dev_iva}}</td>
          <td>{{$row->fecha_elaboracion}}</td> -->

         <td>
              <a class="btn bg-navy btn-flat margin" href="{{ $url = route('detalle_dev_iva.edit', $row->id) }}" role="button"><i class="fa fa-list-alt" aria-hidden="true"></i> Detalle Dev Iva</a>  
          </td>

          <td><a data-toggle="modal" data-target="#editar_encabezado_dev_iva" 
          data-id="{{$row->id}}"
          data-responsable="{{$row->responsable}}"
          data-cliente="{{$row->cliente}}"
          data-auditor="{{$row->auditor}}"
          data-bim="{{$row->bim}}"
          data-fechavencimiento="{{$row->fecha_vencimiento}}"
          data-fechaentrega="{{$row->fecha_entrega}}"
          data-Observaciones="{{$row->Observaciones}}"
          data-enviarauditoria="{{$row->enviar_auditoria}}"
          data-cierreauditoria="{{$row->cierre_auditoria}}"
          data-observacionesauditoria="{{$row->observaciones_auditoria}}"
          data-ubicacionarchivos="{{$row->ubicacion_archivos}}"
          data-fechaauditoriaencabezadodeviva="{{$row->fecha_auditoria_encabezado_dev_iva}}"
          data-fechaelaboracion="{{$row->fecha_elaboracion}}" 
          class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>

            <td>@include('encabezado_dev_iva.destroy')</td>
          
    </tr>
  </tbody>

  @endforeach


</table>
</div>

<center>{{ $encabezado_dev_iva->links() }}</center>

</div>

</div>
</div>




    </div>
    <div role="tabpanel" class="tab-pane" id="Auditoria">
      
        En Construcción del Software
         <div class="panel-body">

<div class="container">
{!! Form::open(['route' => 'encabezado_dev_iva.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="nombre" id="nombre">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>REGISTROS EN AUDITORIA</h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#crear_encabezado_dev_iva'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear encabezado_dev_iva</a>

  @include('encabezado_dev_iva.create')

  @include('encabezado_dev_iva.edit')




<p>


<div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
<th>id</th>
<th>responsable</th>
<th>cliente</th>
<th>auditor</th>
<!-- <th>bim</th>
<th>fecha_vencimiento</th>
<th>fecha_entrega</th>
<th>Observaciones</th> -->
<th>enviar_auditoria</th>
<th>cierre_auditoria</th>
<th>ubicacion_archivos</th>
<!-- <th>observaciones_auditoria</th>
<th>ubicacion_archivos</th>
<th>fecha_auditoria_encabezado_dev_iva</th>
<th>fecha_elaboracion</th> -->

       <th>  Acción </th>



    </tr>
  </thead>
  <tbody>

   

  @foreach($auditoria as $row)
    <tr>



          <td>{{$row->id}}</td>
                    <td>{{$row->responsable}}</td>
          <td>{{$row->cliente}}</td>
          <td>{{$row->auditor}}</td>
            <td>@if($row->enviar_auditoria==1)
              <span class="badge bg-light-blue">Si</span> 
              @else
              <span class="badge bg-red">No</span>
              @endif
          </td>

           <td>@if($row->cierre_auditoria==1)
             <span class="badge bg-light-blue">Si</span> 
              @else
              <span class="badge bg-red">No</span>
              @endif
          </td>
        
          <!-- <td>{{$row->observaciones_auditoria}}</td>-->
          <td>
            @if(!empty($row->ubicacion_archivos))
            <a class="btn btn-danger" href="{{asset('storage/'.$row->ubicacion_archivos)}}" role="button"><i class="fa fa-download" aria-hidden="true"></i> Descargar</a>
            @else
            Falta subir el archivo
            @endif
          </td>
          <!--<td>{{$row->fecha_auditoria_encabezado_dev_iva}}</td>
          <td>{{$row->fecha_elaboracion}}</td> -->

         <td>
              <a class="btn bg-navy btn-flat margin" href="{{ $url = route('detalle_dev_iva.edit', $row->id) }}" role="button"><i class="fa fa-list-alt" aria-hidden="true"></i> Detalle Dev Iva</a>  
          </td>

          <td><a data-toggle="modal" data-target="#editar_encabezado_dev_iva" 
          data-id="{{$row->id}}"
          data-responsable="{{$row->responsable}}"
          data-cliente="{{$row->cliente}}"
          data-auditor="{{$row->auditor}}"
          data-bim="{{$row->bim}}"
          data-fechavencimiento="{{$row->fecha_vencimiento}}"
          data-fechaentrega="{{$row->fecha_entrega}}"
          data-Observaciones="{{$row->Observaciones}}"
          data-enviarauditoria="{{$row->enviar_auditoria}}"
          data-cierreauditoria="{{$row->cierre_auditoria}}"
          data-observacionesauditoria="{{$row->observaciones_auditoria}}"
          data-ubicacionarchivos="{{$row->ubicacion_archivos}}"
          data-fechaauditoriaencabezadodeviva="{{$row->fecha_auditoria_encabezado_dev_iva}}"
          data-fechaelaboracion="{{$row->fecha_elaboracion}}" 
          class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>

            <td>@include('encabezado_dev_iva.destroy')</td>
          
    </tr>
  </tbody>

  @endforeach


</table>
</div>

<center>{{ $encabezado_dev_iva->links() }}</center>

</div>

</div>
</div>    



    </div><!--Cierre Auditoria-->
    <div role="tabpanel" class="tab-pane" id="Cerrados">Cerrados

    En Construcción del Software
    </div>
  </div>
</div>  






@endsection
