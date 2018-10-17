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
{!! Form::open(['route' => 'encabezado_informe.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="nombre" id="nombre">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>PROCESO</h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#crear_encabezado_informe'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear encabezado_informe</a>

  @include('encabezado_informe.create')

  @include('encabezado_informe.edit')

  




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
<th>fecha_auditoria_encabezado_informe</th>
<th>fecha_elaboracion</th> -->

       <th>  Acción </th>



    </tr>
  </thead>
  <tbody>

  @foreach($encabezado_informe as $row)
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
<?php $files3 = Storage::disk('public')->allFiles($row->ubicacion_archivos);

           ?>
          <!-- <td>{{$row->observaciones_auditoria}}</td>-->
          <td>

            <a class="btn btn-primary" data-toggle="modal" href='#modal-{{$row->id}}'><i class="fa fa-folder-open" aria-hidden="true"></i> Archivos</a>
          <div class="modal modal-default fade" id="modal-{{$row->id}}">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Listado de Archivos</h4>
                </div>
                <div class="modal-body">

                   @if(!empty($row->ubicacion_archivos))
          <!--   <a class="btn btn-danger" href="{{asset('storage/'.$row->ubicacion_archivos)}}" role="button"><i class="fa fa-download" aria-hidden="true"></i> Descargar</a> -->
         
          @foreach($files3 as $file)
            <a href="{{'storage/'.$file}}">{{$file}}</a><br>
          @endforeach
            @else
            Falta subir el archivo
            @endif
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
       
                </div>
              </div>
            </div>
          </div>
           
          </td>
          <!--<td>{{$row->fecha_auditoria_encabezado_informe}}</td>
          <td>{{$row->fecha_elaboracion}}</td> -->

         <td>
              <a class="btn btn-default" href="{{ $url = route('detalle_informe.edit', $row->id) }}" role="button"><i class="fa fa-list-alt" aria-hidden="true"></i> detalle_informe</a>  
          </td>

          <td><a data-toggle="modal" data-target="#editar_encabezado_informe1" 
          data-id="{{$row->id}}"
          data-responsable="{{$row->responsable}}"
          data-cliente="{{$row->cliente}}"
          data-audito="{{$row->audito}}"
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

            <td>@include('encabezado_informe.destroy')</td>
          
    </tr>
  </tbody>

  @endforeach


</table>
</div>

<center>{{ $encabezado_informe->links() }}</center>

</div>

</div>
</div>




    </div>


    <div role="tabpanel" class="tab-pane" id="Auditoria">

      {!! Form::open(['route' => 'encabezado_informe.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="nombre" id="nombre">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
  
    @include('encabezado_informe.auditoriaedit')


           <div class="panel-body">



<div class="container">

<div class="panel panel-default">

<h4><b><center>AUDITORIA</h4></b></center>



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
<th>fecha_auditoria_encabezado_informe</th>
<th>fecha_elaboracion</th> -->

       <th>  Acción </th>



    </tr>
  </thead>
  <tbody>

  @foreach($auditoria as $row)
    <tr>



          <td>{{$row->id}}</td>
          <td>@php $usuario = App\User::find($row->responsable); echo $usuario->name; @endphp</td>
          <td>@php $cliente = App\clientes::find($row->cliente); echo $cliente->nombre_cliente; @endphp</td>
          <td>@php $usuario = App\User::find($row->audito); echo $usuario->name; @endphp</td>
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
<?php $files3 = Storage::disk('public')->allFiles($row->ubicacion_archivos);

           ?>
          <!-- <td>{{$row->observaciones_auditoria}}</td>-->
          <td>

            <a class="btn btn-primary" data-toggle="modal" href='#modal-{{$row->id}}'><i class="fa fa-folder-open" aria-hidden="true"></i> Archivos</a>
          <div class="modal modal-default fade" id="modal-{{$row->id}}">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Listado de Archivos</h4>
                </div>
                <div class="modal-body">

                   @if(!empty($row->ubicacion_archivos))
          <!--   <a class="btn btn-danger" href="{{asset('storage/'.$row->ubicacion_archivos)}}" role="button"><i class="fa fa-download" aria-hidden="true"></i> Descargar</a> -->
         
          @foreach($files3 as $file)
            <a href="{{'storage/'.$file}}">{{$file}}</a><br>
          @endforeach
            @else
            Falta subir el archivo
            @endif
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
       
                </div>
              </div>
            </div>
          </div>
           
          </td>
         
         <td>
              <a class="btn btn-default" href="{{ $url = route('detalle_informe.edit', $row->id) }}" role="button"><i class="fa fa-list-alt" aria-hidden="true"></i> detalle_informe</a>  
          </td>
          @if(Auth::user()->perfil_usuario == 2)

          @else
          <td><a data-toggle="modal" data-target="#editar_encabezado_informe22" 
          data-id="{{$row->id}}"
          data-responsable="{{$row->responsable}}"
          data-cliente="{{$row->cliente}}"
          data-audito="{{$row->audito}}"
          data-bimauditado="{{$row->bim_auditado}}"
          data-fechavencimiento="{{$row->fecha_vencimiento}}"
          data-fechaentrega="{{$row->fecha_entrega}}"
          data-Observaciones="{{$row->Observaciones}}"
          data-enviarauditoria="{{$row->enviar_auditoria}}"
          data-cierreauditoria="{{$row->cierre_auditoria}}"
          data-observacionesauditoria="{{$row->observaciones_auditoria}}"
          data-ubicacionarchivos="{{$row->ubicacion_archivos}}"
          data-fechaauditoria="{{$row->fecha_auditoria}}"
          data-fechaelaboracion="{{$row->fecha_elaboracion}}" 
          class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>

            <td>@include('encabezado_informe.destroy')</td>
          @endif  
          
    </tr>
  </tbody>

  @endforeach


</table>
</div>

<center>{{ $auditoria->links() }}</center>

</div>

</div>
</div>

    
    </div><!--Cierre Auditoria-->




    <div role="tabpanel" class="tab-pane" id="Cerrados">
          {!! Form::open(['route' => 'encabezado_informe.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="nombre" id="nombre">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}

 @include('encabezado_informe.cerradosedit')
  
    @include('encabezado_informe.auditoriaedit')


           <div class="panel-body">



<div class="container">

<div class="panel panel-default">

<h4><b><center>CERRADOS</h4></b></center>



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
<th>fecha_auditoria_encabezado_informe</th>
<th>fecha_elaboracion</th> -->

       <th>  Acción </th>



    </tr>
  </thead>
  <tbody>

  @foreach($cerrados as $row)
    <tr>



          <td>{{$row->id}}</td>
<td>@php $usuario = App\User::find($row->responsable); echo $usuario->name; @endphp</td>
          <td>@php $cliente = App\clientes::find($row->cliente); echo $cliente->nombre_cliente; @endphp</td>
          <td>@php $usuario = App\User::find($row->audito); echo $usuario->name; @endphp</td>
          
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
        
<?php $files3 = Storage::disk('public')->allFiles($row->ubicacion_archivos);

           ?>
          <!-- <td>{{$row->observaciones_auditoria}}</td>-->
          <td>

            <a class="btn btn-primary" data-toggle="modal" href='#modal-{{$row->id}}'><i class="fa fa-folder-open" aria-hidden="true"></i> Archivos</a>
          <div class="modal modal-default fade" id="modal-{{$row->id}}">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Listado de Archivos</h4>
                </div>
                <div class="modal-body">

                   @if(!empty($row->ubicacion_archivos))
          <!--   <a class="btn btn-danger" href="{{asset('storage/'.$row->ubicacion_archivos)}}" role="button"><i class="fa fa-download" aria-hidden="true"></i> Descargar</a> -->
         
          @foreach($files3 as $file)
            <a href="{{'storage/'.$file}}">{{$file}}</a><br>
          @endforeach
            @else
            Falta subir el archivo
            @endif
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
       
                </div>
              </div>
            </div>
          </div>
           
          </td>
         

         <td>
              <a class="btn btn-default" href="{{ $url = route('detalle_informe.edit', $row->id) }}" role="button"><i class="fa fa-list-alt" aria-hidden="true"></i> detalle_informe</a>  
          </td>

          @if(Auth::user()->perfil_usuario != 1)

          @else
            <td><a data-toggle="modal" data-target="#editar_encabezado_informe3" 
          data-id="{{$row->id}}"
          data-responsable="{{$row->responsable}}"
          data-cliente="{{$row->cliente}}"
          data-audito="{{$row->audito}}"
          data-bimauditado="{{$row->bim_auditado}}"
          data-fechavencimiento="{{$row->fecha_vencimiento}}"
          data-fechaentrega="{{$row->fecha_entrega}}"
          data-Observaciones="{{$row->Observaciones}}"
          data-enviarauditoria="{{$row->enviar_auditoria}}"
          data-cierreauditoria="{{$row->cierre_auditoria}}"
          data-observacionesauditoria="{{$row->observaciones_auditoria}}"
          data-ubicacionarchivos="{{$row->ubicacion_archivos}}"
          data-fechaauditoria="{{$row->fecha_auditoria}}"
          data-fechaelaboracion="{{$row->fecha_elaboracion}}" 
          class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>

            <td>@include('encabezado_informe.destroy')</td>
          @endif
    </tr>
  </tbody>

  @endforeach


</table>
</div>

<center>{{ $cerrados->links() }}</center>

</div>

</div>
</div>


    </div><!--Cierre id cerrados-->
  </div>
</div>  






@endsection
