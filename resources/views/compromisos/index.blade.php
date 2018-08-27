@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
        @include('sweet::alert')



  <div class="panel-body">

<div class="container">
{!! Form::open(['route' => 'clientes.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="nombre" id="nombre">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>REGISTROS DE CLIENTES</h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#crear_cliente'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear Cliente</a>

  @include('cliente.create')

  @include('cliente.edit')




<p>
<div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
      <td>id_cliente</td>
      <td>nit</td>
      <td>nombre_cliente</td>
<!--       <td>direccion_cliente</td>
      <td>telefono_cliente</td>
      <td>celular_cliente</td>
      <td>notas_cliente</td>
      <td>gran_contribuyente_cliente</td>
      <td>correo_cliente</td>
      <td>ciudad_cliente</td>
      <td>pais_cliente</td>
      <td>contacto_cliente</td>
      <td>clave_ingreso_DIAN_cliente</td>
      <td>clave_firma_DIAN_cliente</td>
      <td>clave_CC_cliente</td>
      <td>responsable_cliente</td>
      <td>ultimo_digito_cliente</td>
      <td>ultimos_digitos_cliente</td>
      <td>activo_cliente</td>
      <td>tipo_cliente</td>
      <td>representante_legal_cliente</td>
      <td>nombre_representante_legal_cliente</td> -->

      <td>  Acción </td>



    </tr>
  </thead>
  <tbody>

  @foreach($cliente as $row)
    <tr>



          <td>{{$row->id}}</td>
          <td>{{$row->nit}}</td>
          <td>{{$row->nombre_cliente}}</td>
         <!--  <td>{{$row->direccion_cliente}}</td>
          <td>{{$row->telefono_cliente}}</td>
          <td>{{$row->celular_cliente}}</td>
          <td>{{$row->notas_cliente}}</td>
          <td>{{$row->gran_contribuyente_cliente}}</td>
          <td>{{$row->correo_cliente}}</td>
          <td>{{$row->ciudad_cliente}}</td>
          <td>{{$row->pais_cliente}}</td>
          <td>{{$row->contacto_cliente}}</td>
          <td>{{$row->clave_ingreso_DIAN_cliente}}</td>
          <td>{{$row->clave_firma_DIAN_cliente}}</td>
          <td>{{$row->clave_CC_cliente}}</td>
          <td>{{$row->responsable_cliente}}</td>
          <td>{{$row->ultimo_digito_cliente}}</td>
          <td>{{$row->ultimos_digitos_cliente}}</td>
          <td>{{$row->activo_cliente}}</td>
          <td>{{$row->tipo_cliente}}</td>
          <td>{{$row->representante_legal_cliente}}</td>
          <td>{{$row->nombre_representante_legal_cliente}}</td> -->



          <td><a   data-toggle="modal" data-target="#editar_clientes" data-id="{{$row->id}}"
            data-nit="{{$row->nit}}"
            data-nombre_cliente="{{$row->nombre_cliente}}"
            data-direccion_cliente="{{$row->direccion_cliente}}"
            data-telefono_cliente="{{$row->telefono_cliente}}"
            data-celular_cliente="{{$row->celular_cliente}}"
            data-notas_cliente="{{$row->notas_cliente}}"
            data-gran_contribuyente_cliente="{{$row->gran_contribuyente_cliente}}"
            data-correo_cliente="{{$row->correo_cliente}}"
            data-ciudad_cliente="{{$row->ciudad_cliente}}"
            data-pais_cliente="{{$row->pais_cliente}}"
            data-contacto_cliente="{{$row->contacto_cliente}}"
            data-clave_ingreso_DIAN_cliente="{{$row->clave_ingreso_DIAN_cliente}}"
            data-clave_firma_DIAN_cliente="{{$row->clave_firma_DIAN_cliente}}"
            data-clave_CC_cliente="{{$row->clave_CC_cliente}}"
            data-responsable_cliente="{{$row->responsable_cliente}}"
            data-ultimo_digito_cliente="{{$row->ultimo_digito_cliente}}"
            data-ultimos_digitos_cliente="{{$row->ultimos_digitos_cliente}}"
            data-activo_cliente="{{$row->activo_cliente}}"
            data-tipo_cliente="{{$row->tipo_cliente}}"
            data-representante_legal_cliente="{{$row->representante_legal_cliente}}" 
            data-nombre_representante_legal_cliente="{{$row->nombre_representante_legal_cliente}}"     class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>

            <td>@include('cliente.destroy')</td>
          
    </tr>
  </tbody>

  @endforeach


</table>
</div>

<center>{{ $cliente->links() }}</center>

</div>

</div>
</div>



@endsection
