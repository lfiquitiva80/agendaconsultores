@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')



  <div class="panel-body">

<div class="container">
{!! Form::open(['route' => 'pago_cliente.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="nombre" id="nombre">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>REGISTROS DEL PAGO DEL CLIENTE</h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#crear_pago_cliente'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear pago_cliente</a>

  @include('pago_cliente.create')

  @include('pago_cliente.edit')




<p>
<div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
      <td>id</td>
      <td>cliente </td>
      <td>Fecha de Pago Cliente </td>
      <td>Valor Pago Cliente </td>
       <td>  Acción </td>



    </tr>
  </thead>
  <tbody>

  @foreach($pago_cliente as $row)
    <tr>



          <td>{{$row->id}}</td>
          <td>{{$row->clientes->nombre_cliente}}</td>
          <td>{{$row->fecha_pago_cliente}}</td>
          <td>{{$row->valor_pago_cliente}}</td>
         

         

          <td><a   data-toggle="modal" data-target="#editar_pago_cliente" data-id="{{$row->id}}"
            data-clientepago="{{$row->cliente_pago}}"
            data-fechapagocliente="{{$row->fecha_pago_cliente}}"
            data-valorpagocliente="{{$row->valor_pago_cliente}}"
            class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>

            <td>@include('pago_cliente.destroy')</td>
          
    </tr>
  </tbody>

  @endforeach


</table>
</div>

<center>{{ $pago_cliente->links() }}</center>

</div>

</div>
</div>



@endsection
