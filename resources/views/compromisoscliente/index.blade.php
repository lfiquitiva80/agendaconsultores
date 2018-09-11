@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')



  <div class="panel-body">

<div class="container">
{!! Form::open(['route' => 'compromisoscliente.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="nombre" id="nombre">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>REGISTROS DE COMPROMISO CLIENTE</h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#crear_compromisos_cliente'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear compromisos_cliente</a>

  @include('compromisoscliente.create')

  @include('compromisoscliente.edit')




<p>
<div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
      <td>id_compromisos_cliente</td>
      <td>Cliente</td>
      <td>Compromisos</td>
      <td>Periodos</td>

       <td>  Acción </td>



    </tr>
  </thead>
  <tbody>

  @foreach($compromisos_clientes as $row)
    <tr>

          

          <td>{{$row->id}}</td>
          <td>{{$row->clientes->nombre_cliente}}</td>
          <td>{{$row->compromiso->descripcion_compromisos}}</td>
          <td>{{$row->periodos->descripcion_periodo}}</td>
       

         <td><a   data-toggle="modal" data-target="#editar_compromisos_cliente" data-id="{{$row->id}}"
            data-id_empresa="{{$row->id_empresa}}"
            data-id_compromiso="{{$row->id_compromiso}}"
            data-id_periodo="{{$row->id_periodo}}"
            class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>

            <td>@include('compromisoscliente.destroy')</td>
          
    </tr>
  </tbody>

  @endforeach


</table>
</div>

<center>{{ $compromisos_clientes->links() }}</center>

</div>

</div>
</div>



@endsection
