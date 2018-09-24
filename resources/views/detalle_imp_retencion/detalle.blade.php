@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')



  <div class="panel-body">

<div class="container">
{!! Form::open(['route' => 'detalle_imp_retencion.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="nombre" id="nombre">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>DETALLE DEVOLUCION IVA</h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#crear_detalle_imp_retencion'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear detalle_imp_retencion</a>

  @include('detalle_imp_retencion.create')

  @include('detalle_imp_retencion.edit')




<p>
<div class="table-responsive">
<table class="table table-hover" >
  <thead>

     <tr>
      <th>id</th>
      <th>cns_detalle</th>
      <th>codigo</th>
      <th>descripcion</th>
      <th>Checklist</th>
     
            

       <td>  Acción </td>



    </tr>
  </thead>
  <tbody>

  @foreach($detalle_imp_retencion as $row)
    <tr>


      

      <td class="id">{{$row->id}}</td>
      <td>{{$row->cns_detalle}}</td>
      <td>{{$row->codigo}}</td>
      <td>{{$row->descripcion}}</td>

      <td  NOWRAP>

           
      {!! Form::open(['route' => ['detalle_imp_retencion.update', $row->id],'method'=>'PATCH']) !!}
      <input type="hidden" id="id"  name="id" value="{{$row->id}}">

       @if (Auth::user()->perfil_usuario == 1)
      {!! Form::checkbox('ressi',  1, $row->ressi, []) !!} Responsable Si
      {!! Form::checkbox('resno',  1, $row->resno, []) !!} Responsable No 
      {!! Form::checkbox('resna',  1, $row->resna, []) !!} Responsable No Aplica <br>

      {!! Form::checkbox('audsi',  1, $row->audsi, []) !!} Auditor Si 
      {!! Form::checkbox('audno',  1, $row->audno, []) !!} Auditor No 
      {!! Form::checkbox('audna',  1, $row->audna, []) !!} Auditor No Aplica

       @elseif (Auth::user()->perfil_usuario == 2)

       {!! Form::checkbox('ressi',  1, $row->ressi, []) !!} Responsable Si
      {!! Form::checkbox('resno',  1, $row->resno, []) !!} Responsable No 
      {!! Form::checkbox('resna',  1, $row->resna, []) !!} Responsable No Aplica <br>

      {!! Form::checkbox('audsi',  1, $row->audsi, ['disabled']) !!} Auditor Si 
      {!! Form::checkbox('audno',  1, $row->audno, ['disabled']) !!} Auditor No 
      {!! Form::checkbox('audna',  1, $row->audna, ['disabled']) !!} Auditor No Aplica

      @else

      {!! Form::checkbox('ressi',  1, $row->ressi, ['disabled']) !!} Responsable Si
      {!! Form::checkbox('resno',  1, $row->resno, ['disabled']) !!} Responsable No 
      {!! Form::checkbox('resna',  1, $row->resna, ['disabled']) !!} Responsable No Aplica <br>

      {!! Form::checkbox('audsi',  1, $row->audsi, []) !!} Auditor Si 
      {!! Form::checkbox('audno',  1, $row->audno, []) !!} Auditor No 
      {!! Form::checkbox('audna',  1, $row->audna, []) !!} Auditor No Aplica

      @endif 

      
          <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Actualizar</button>
        
       {!! Form::close() !!}

      </td>

  

  

        

          <td><a   data-toggle="modal" data-target="#editar_detalle_imp_retencion" data-id="{{$row->id}}"
            data-cns_detalle="{{$row->cns_detalle}}"
            data-codigo="{{$row->codigo}}"
            data-descripcion="{{$row->descripcion}}"
            data-ressi="{{$row->ressi}}"
            data-resno="{{$row->resno}}"
            data-resna="{{$row->resna}}"
            data-audsi="{{$row->audsi}}"
            data-audno="{{$row->audno}}"
            data-audna="{{$row->audna}}"
            class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>

            <td>@include('detalle_imp_retencion.destroy')</td>
          
    </tr>
  </tbody>

  @endforeach


</table>
</div>

</div>

</div>
</div>

<script type="text/javascript">

$(document).ready(function() {
   
   $('#actualizardetalle').click(function(event) {
     
     alert('buena hora');

   });

 }); 

</script>

@endsection
