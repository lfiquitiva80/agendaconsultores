@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')



  <div class="panel-body">

<div class="container">
{!! Form::open(['route' => 'detalle_dev_iva.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="nombre" id="nombre">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>DETALLE DEVOLUCION IVA</h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#crear_detalle_dev_iva'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear detalle_dev_iva</a>

  @include('detalle_dev_iva.create')

  @include('detalle_dev_iva.edit')




<p>
<div class="table-responsive">
<table class="table table-hover" >
  <thead>

    <tr>

      <th colspan="4"></th>
      <th  colspan="3"> Responsable</th>
      <th  colspan="3"> Auditor</th>
      

    </tr>
    <tr>
      <th>id</th>
      <th>cns_detalle</th>
      <th>codigo</th>
      <th>descripcion</th>
      <th>ressi</th>
      <th>resno</th>
      <th>resna</th>
      <th>audsi</th>
      <th>audno</th>
      <th>audna</th>

       <td>  Acción </td>



    </tr>
  </thead>
  <tbody>

  @foreach($detalle_dev_iva as $row)
    <tr>



      <td>{{$row->id}}</td>
      <td>{{$row->cns_detalle}}</td>
      <td>{{$row->codigo}}</td>
      <td>{{$row->descripcion}}</td>
      <td>{!! Form::checkbox('all', $row->ressi, $row->ressi, []) !!}</td>
      <td>{!! Form::checkbox('all', $row->resno, $row->resno, []) !!}</td>
      <td>{!! Form::checkbox('all', $row->resna, $row->resna, []) !!}</td>
      <td>{!! Form::checkbox('all', $row->audsi, $row->audsi, []) !!}</td>
      <td>{!! Form::checkbox('all', $row->audno, $row->audno, []) !!}</td>
      <td>{!! Form::checkbox('all', $row->audna, $row->audna, []) !!}</td>

  

         

          <td><a   data-toggle="modal" data-target="#editar_detalle_dev_iva" data-id="{{$row->id}}"
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

            <td>@include('detalle_dev_iva.destroy')</td>
          
    </tr>
  </tbody>

  @endforeach


</table>
</div>

<center>{{ $detalle_dev_iva->links() }}</center>

</div>

</div>
</div>



@endsection
