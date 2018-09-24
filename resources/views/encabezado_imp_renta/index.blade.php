@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')



  <div class="panel-body">

<div class="container">
{!! Form::open(['route' => 'encabezado_imp_renta.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="nombre" id="nombre">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>REGISTROS DE encabezado_imp_renta</h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#crear_encabezado_imp_renta'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear encabezado_imp_renta</a>

  @include('encabezado_imp_renta.create')

  @include('encabezado_imp_renta.edit')




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
<!-- <th>observaciones_auditoria</th>
<th>ubicacion_archivos</th>
<th>fecha_auditoria_encabezado_imp_renta</th>
<th>fecha_elaboracion</th> -->

       <th>  Acción </th>



    </tr>
  </thead>
  <tbody>

  @foreach($encabezado_imp_renta as $row)
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
        
          <!-- <td>{{$row->observaciones_auditoria}}</td>
          <td><a class="btn btn-danger" href="{{$row->ubicacion_archivos}}" role="button"><i class="fa fa-download" aria-hidden="true"></i> Descargar</a></td>
          <td>{{$row->fecha_auditoria_encabezado_imp_renta}}</td>
          <td>{{$row->fecha_elaboracion}}</td> -->

         <td>
              <a class="btn bg-navy btn-flat margin" href="{{ $url = route('detalle_imp_renta.edit', $row->id) }}" role="button"><i class="fa fa-list-alt" aria-hidden="true"></i> Detalle Impuesto Renta</a>  
          </td>

          <td><a data-toggle="modal" data-target="#editar_encabezado_imp_renta" 
          data-id="{{$row->id}}"
          data-responsable="{{$row->responsable}}"
          data-cliente="{{$row->cliente}}"
          data-auditor="{{$row->audito}}"
          data-bim="{{$row->bim_auditado}}"
          data-fechavencimiento="{{$row->fecha_vencimiento}}"
          data-fechaentrega="{{$row->fecha_entrega}}"
          data-Observaciones="{{$row->Observaciones}}"
          data-enviarauditoria="{{$row->enviar_auditoria}}"
          data-cierreauditoria="{{$row->cierre_auditoria}}"
          data-observacionesauditoria="{{$row->observaciones_auditoria}}"
          data-ubicacionarchivos="{{$row->ubicacion_archivos}}"
          data-fecha_auditoria="{{$row->fecha_auditoria}}"
          data-fechaelaboracion="{{$row->fecha_elaboracion}}" 
          class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>

            <td>@include('encabezado_imp_renta.destroy')</td>
          
    </tr>
  </tbody>

  @endforeach


</table>
</div>

<center>{{ $encabezado_imp_renta->links() }}</center>

</div>

</div>
</div>



@endsection
