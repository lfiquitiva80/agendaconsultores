<?php

namespace App\Http\Controllers;

use App\encabezado_imp_retencion;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\User;
use App\perfil;
use App\clientes;
use App\compromisos;
use App\compromisos_cliente;
use App\periodo;
use App\checklist;
use App\plantilla_checklist;
use Alert;
use Carbon\Carbon;


class encabezado_imp_retencionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if (Auth::user()->perfil_usuario == 1) {
            $encabezado_imp_retencion = encabezado_imp_retencion::Search($request->nombre)->orderBy('id', 'desc')->paginate(10);
        }elseif (Auth::user()->perfil_usuario == 2) {


           $encabezado_imp_retencion = encabezado_imp_retencion::where('responsable', Auth::user()->id)
           ->Search($request->nombre)
           ->orderBy('id', 'desc')
           ->paginate(10);




       }else {

        $encabezado_imp_retencion = encabezado_imp_retencion::Search($request->nombre)->orderBy('id', 'desc')
        ->where('enviar_auditoria', 1)
        ->paginate(10);

    }

    $usuarios = User::where('perfil_usuario',2)->pluck('name', 'id');
    if (Auth::user()->perfil_usuario == 1) {
        $clientes = clientes::pluck('nombre_cliente', 'id');
    } else {
        $clientes = clientes::where('responsable_cliente',Auth::user()->id)->pluck('nombre_cliente', 'id');
    }
    
    
    $compromisos = compromisos::pluck('descripcion_compromisos', 'id');
    $periodo = periodo::pluck('descripcion_periodo', 'id');
    $compromisos_clientes = compromisos_cliente::all();
    $auditor = User::where('perfil_usuario',3)->pluck('name', 'id');
         //dd($encabezado_imp_retencion);

        //$cliente = DB::table('cliente')->paginate(15);
        //dd($cliente);
    return view('encabezado_imp_retencion.index',compact('encabezado_imp_retencion','usuarios','compromisos','periodo','compromisos_clientes','clientes','auditor'));
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


        $encabezado_imp_retencion =  new encabezado_imp_retencion($request-> all());

        $input = $request->all();

        if ($request->hasFile('ubicacion_archivos')) {


            $ruta = "/archivos/".$request->file('ubicacion_archivos')->store('archivos');

        }
        else
        {
            //$ruta=$encabezado_imp_retencion->ubicacion_archivos;
            $dt = Carbon::now();
            $nit = clientes::find($input['cliente']);
            $ruta= "//clientes_ftp/".$nit->nit."/".$dt->year."/impuestos/retencion";
        }
    //dd($ruta);
        $encabezado_imp_retencion->ubicacion_archivos  = $ruta;
        $encabezado_imp_retencion->responsable=$input['responsable'];
        $encabezado_imp_retencion->cliente=$input['cliente'];
        $encabezado_imp_retencion->audito=$input['audito'];
        $encabezado_imp_retencion->bim_auditado=0;
        $encabezado_imp_retencion->fecha_vencimiento=$input['fecha_elaboracion'];
        $encabezado_imp_retencion->fecha_entrega=$input['fecha_elaboracion'];
        $encabezado_imp_retencion->Observaciones="null";
        $encabezado_imp_retencion->enviar_auditoria=0;
        $encabezado_imp_retencion->cierre_auditoria=0;
        $encabezado_imp_retencion->observaciones_auditoria="null";
        $encabezado_imp_retencion->fecha_auditoria=$input['fecha_elaboracion'];
        $encabezado_imp_retencion->fecha_elaboracion=$input['fecha_elaboracion'];

        $encabezado_imp_retencion->save();

        $checklist=checklist::find(6); 
        $plantilla_checklist = plantilla_checklist::WHERE('filtro_checklist',$checklist->filtro_plantilla)->get();

        foreach ($plantilla_checklist as $key => $value) {


           DB::table('detalle_imp_retencion')->insert([
            'cns_detalle' => $encabezado_imp_retencion->id,
            'codigo' => $value->codigo_plantilla_checklist,
            'descripcion' => $value->descripcion_plantilla_checklist,

        ]);
       }


       \Alert::success('', 'El encabezado_imp_retencion ha sido registrado con exito !')->persistent('Close');
       return redirect()->route('encabezado_imp_retencion.index');




   }

    /**
     * Display the specified resource.
     *
     * @param  \App\encabezado_imp_retencion  $encabezado_imp_retencion
     * @return \Illuminate\Http\Response
     */
    public function show(encabezado_imp_retencion $encabezado_imp_retencion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\encabezado_imp_retencion  $encabezado_imp_retencion
     * @return \Illuminate\Http\Response
     */
    public function edit(encabezado_imp_retencion $id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\encabezado_imp_retencion  $encabezado_imp_retencion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, encabezado_imp_retencion $id)
    {


       $encabezado_imp_retencion = encabezado_imp_retencion::findOrFail($request->id);


       $input = $request->all();

       if ($request->hasFile('ubicacion_archivos')) {


        $ruta = "/archivos/".$request->file('ubicacion_archivos')->store('archivos');

    }
    else
    {
        
        $ruta=$input['ubicacion_archivos'];
    }
    //dd($ruta);
    $encabezado_imp_retencion->ubicacion_archivos  = $ruta;
    $encabezado_imp_retencion->responsable=$input['responsable'];
    $encabezado_imp_retencion->cliente=$input['cliente'];
    $encabezado_imp_retencion->audito=$input['audito'];
    $encabezado_imp_retencion->bim_auditado=$input['bim_auditado'];
    $encabezado_imp_retencion->fecha_vencimiento=$input['fecha_vencimiento'];
    $encabezado_imp_retencion->fecha_entrega=$input['fecha_entrega'];
    $encabezado_imp_retencion->Observaciones=$input['Observaciones'];
    $encabezado_imp_retencion->enviar_auditoria=$input['enviar_auditoria'];
    $encabezado_imp_retencion->cierre_auditoria=$input['cierre_auditoria'];
    $encabezado_imp_retencion->observaciones_auditoria=$input['observaciones_auditoria'];
    $encabezado_imp_retencion->fecha_auditoria=$input['fecha_auditoria'];
    $encabezado_imp_retencion->fecha_elaboracion=$input['fecha_elaboracion'];

    $encabezado_imp_retencion->save();
    


    Alert::success('', 'El encabezado_imp_retencion ha sido editado con exito !')->persistent('Close');
    return redirect()->route('encabezado_imp_retencion.index');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\encabezado_imp_retencion  $encabezado_imp_retencion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $encabezado_imp_retencion = encabezado_imp_retencion::find($id);
        $encabezado_imp_retencion->delete();
        \Alert::success('', 'El encabezado_imp_retencion ha sido sido borrado de forma exita!')->persistent('Close');
        return redirect()->route('encabezado_imp_retencion.index');
    }
}
