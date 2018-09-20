@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Configuración Checklist</h3>
  </div>
  <div class="panel-body">
    <p class="navbar-text">
      <a href="{{ route('checklist.index') }}" class="navbar-link"><i class="fa fa-gears" aria-hidden="true"></i> Configuración checklist</a>
    </p>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Listas de Chequeo</h3>
  </div>
  <div class="panel-body">
    <p class="navbar-text">

      <a href="#" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i> Checklist Retención</a><br>
      <a href="#" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i> Checklist Reteica</a><br>
      <a href="#" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i> Checklist Iva</a><br>
      <a href="#" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i> Checklist Informe</a><br>
      <a href="#" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i> Checklist Ica</a><br>
      <a href="{{ route('encabezado_dev_iva.index') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i> Checklist Devalución Iva</a><br>

    </p>
  </div>
</div>

@endsection
