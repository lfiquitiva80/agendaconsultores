<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\citasExport;
use App\Exports\actividadExport;
use App\Exports\actividad_cargoExport;
use App\Exports\calendario_tributarioExport;
use App\Exports\cargoExport;
use App\Exports\checklistExport;
use App\Exports\clienteExport;
use App\Exports\compromisosExport;
use App\Exports\compromisos_clienteExport;
use App\Exports\detalle_dev_ivaExport;
use App\Exports\detalle_imp_icaExport;
use App\Exports\detalle_imp_ivaExport;
use App\Exports\detalle_imp_rentaExport;
use App\Exports\detalle_imp_reteicaExport;
use App\Exports\detalle_imp_retencionExport;
use App\Exports\detalle_informeExport;
use App\Exports\empresaExport;
use App\Exports\encabezado_dev_ivaExport;
use App\Exports\encabezado_imp_icaExport;
use App\Exports\encabezado_imp_ivaExport;
use App\Exports\encabezado_imp_rentaExport;
use App\Exports\encabezado_imp_reteicaExport;
use App\Exports\encabezado_imp_retencionExport;
use App\Exports\encabezado_informeExport;
use App\Exports\estado_citaExport;
use App\Exports\jornadaExport;
use App\Exports\lugarExport;
use App\Exports\pago_clienteExport;
use App\Exports\perfilExport;
use App\Exports\periodoExport;
use App\Exports\plantilla_checklistExport;
use App\Exports\tipo_actividadExport;
use Maatwebsite\Excel\Facades\Excel;



class excelController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    //
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    //
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    //
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    //
  }

  public function citasExports()
  {
    return Excel::download(new citasExport, 'citas.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
  }

  public function actividad()
  {
    return Excel::download(new actividadExport, 'actividad.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
  }
  public function actividad_cargo()
  {
    return Excel::download(new actividad_cargoExport, 'actividad_cargo.xlsx');
  }
  public function calendario_tributario()
  {
    return Excel::download(new calendario_tributarioExport, 'calendario_tributario.xlsx');
  }
  public function cargo()
  {
    return Excel::download(new cargoExport, 'cargo.xlsx');
  }
  public function checklist()
  {
    return Excel::download(new checklistExport, 'checklist.xlsx');
  }
  public function cliente()
  {
    return Excel::download(new clienteExport, 'cliente.xlsx');
  }
  public function compromisos()
  {
    return Excel::download(new compromisosExport, 'compromisos.xlsx');
  }
  public function compromisos_cliente()
  {
    return Excel::download(new compromisos_clienteExport, 'compromisos_cliente.xlsx');
  }
  public function detalle_dev_iva()
  {
    return Excel::download(new detalle_dev_ivaExport, 'detalle_dev_iva.xlsx');
  }
  public function detalle_imp_ica()
  {
    return Excel::download(new detalle_imp_icaExport, 'detalle_imp_ica.xlsx');
  }
  public function detalle_imp_iva()
  {
    return Excel::download(new detalle_imp_ivaExport, 'detalle_imp_iva.xlsx');
  }
  public function detalle_imp_renta()
  {
    return Excel::download(new detalle_imp_rentaExport, 'detalle_imp_renta.xlsx');
  }
  public function detalle_imp_reteica()
  {
    return Excel::download(new detalle_imp_reteicaExport, 'detalle_imp_reteica.xlsx');
  }
  public function detalle_imp_retencion()
  {
    return Excel::download(new detalle_imp_retencionExport, 'detalle_imp_retencion.xlsx');
  }
  public function detalle_informe()
  {
    return Excel::download(new detalle_informeExport, 'detalle_informe.xlsx');
  }
  public function empresa()
  {
    return Excel::download(new empresaExport, 'empresa.xlsx');
  }
  public function encabezado_dev_iva()
  {
    return Excel::download(new encabezado_dev_ivaExport, 'encabezado_dev_iva.xlsx');
  }
  public function encabezado_imp_ica()
  {
    return Excel::download(new encabezado_imp_icaExport, 'encabezado_imp_ica.xlsx');
  }
  public function encabezado_imp_iva()
  {
    return Excel::download(new encabezado_imp_ivaExport, 'encabezado_imp_iva.xlsx');
  }
  public function encabezado_imp_renta()
  {
    return Excel::download(new encabezado_imp_rentaExport, 'encabezado_imp_renta.xlsx');
  }
  public function encabezado_imp_reteica()
  {
    return Excel::download(new encabezado_imp_reteicaExport, 'encabezado_imp_reteica.xlsx');
  }
  public function encabezado_imp_retencion()
  {
    return Excel::download(new encabezado_imp_retencionExport, 'encabezado_imp_retencion.xlsx');
  }
  public function encabezado_informe()
  {
    return Excel::download(new encabezado_informeExport, 'encabezado_informe.xlsx');
  }
  public function estado_cita()
  {
    return Excel::download(new estado_citaExport, 'estado_cita.xlsx');
  }
  public function jornada()
  {
    return Excel::download(new jornadaExport, 'jornada.xlsx');
  }
  public function lugar()
  {
    return Excel::download(new lugarExport, 'lugar.xlsx');
  }
  public function pago_cliente()
  {
    return Excel::download(new pago_clienteExport, 'pago_cliente.xlsx');
  }
  public function perfil()
  {
    return Excel::download(new perfilExport, 'perfil.xlsx');
  }
  public function periodo()
  {
    return Excel::download(new periodoExport, 'periodo.xlsx');
  }
  public function plantilla_checklist()
  {
    return Excel::download(new plantilla_checklistExport, 'plantilla_checklist.xlsx');
  }
  public function tipo_actividad()
  {
    return Excel::download(new tipo_actividadExport, 'tipo_actividad.xlsx');
  }



}
