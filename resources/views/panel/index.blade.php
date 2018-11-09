@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')

<!-- <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Configuración Checklist</h3>
  </div>
  <div class="panel-body">
    <p class="navbar-text">
      <a href="{{ route('checklist.index') }}" class="navbar-link"><i class="fa fa-gears" aria-hidden="true"></i> Configuración checklist</a>
    </p>
  </div>
</div> -->

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Reportes Generales</h3>
  </div>
  <div class="panel-body">
    <p class="navbar-text">

      <a href="{{ route('citasExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i> Reportes Citas en Excel</a><br>
      <a href="{{ route('actividadExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte actividad</a><br>
<a href="{{ route('actividad_cargoExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte actividad_cargo</a><br>
<a href="{{ route('calendario_tributarioExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte calendario_tributario</a><br>
<a href="{{ route('cargoExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte cargo</a><br>
<a href="{{ route('checklistExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte checklist</a><br>
<a href="{{ route('clienteExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte cliente</a><br>
<a href="{{ route('compromisosExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte compromisos</a><br>
<a href="{{ route('compromisos_clienteExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte compromisos_cliente</a><br>
<a href="{{ route('detalle_dev_ivaExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte detalle_dev_iva</a><br>
<a href="{{ route('detalle_imp_icaExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte detalle_imp_ica</a><br>
<a href="{{ route('detalle_imp_ivaExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte detalle_imp_iva</a><br>
<a href="{{ route('detalle_imp_rentaExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte detalle_imp_renta</a><br>
<a href="{{ route('detalle_imp_reteicaExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte detalle_imp_reteica</a><br>
<a href="{{ route('detalle_imp_retencionExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte detalle_imp_retencion</a><br>
<a href="{{ route('detalle_informeExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte detalle_informe</a><br>
<a href="{{ route('empresaExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte empresa</a><br>
<a href="{{ route('encabezado_dev_ivaExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte encabezado_dev_iva</a><br>
<a href="{{ route('encabezado_imp_icaExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte encabezado_imp_ica</a><br>
<a href="{{ route('encabezado_imp_ivaExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte encabezado_imp_iva</a><br>
<a href="{{ route('encabezado_imp_rentaExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte encabezado_imp_renta</a><br>
<a href="{{ route('encabezado_imp_reteicaExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte encabezado_imp_reteica</a><br>
<a href="{{ route('encabezado_imp_retencionExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte encabezado_imp_retencion</a><br>
<a href="{{ route('encabezado_informeExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte encabezado_informe</a><br>
<a href="{{ route('estado_citaExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte estado_cita</a><br>
<a href="{{ route('jornadaExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte jornada</a><br>
<a href="{{ route('lugarExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte lugar</a><br>
<a href="{{ route('pago_clienteExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte pago_cliente</a><br>
<a href="{{ route('perfilExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte perfil</a><br>
<a href="{{ route('periodoExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte periodo</a><br>
<a href="{{ route('plantilla_checklistExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte plantilla_checklist</a><br>
<a href="{{ route('tipo_actividadExports') }}" class="navbar-link"><i class="fa fa-check" aria-hidden="true"></i>Reporte tipo_actividad</a><br>


    </p>
  </div>
</div>

@endsection
