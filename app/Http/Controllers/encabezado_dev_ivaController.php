<?php

namespace App\Http\Controllers;

use App\encabezado_dev_iva;
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

class encabezado_dev_ivaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if (Auth::user()->perfil_usuario == 1) {
            $encabezado_dev_iva = encabezado_dev_iva::Search($request->nombre)->orderBy('id', 'desc')->paginate(10);
        }elseif (Auth::user()->perfil_usuario == 2) {


           $encabezado_dev_iva = encabezado_dev_iva::where('responsable', Auth::user()->id)
           ->Search($request->nombre)
           ->orderBy('id', 'desc')
           ->paginate(10);




       }else {

        $encabezado_dev_iva = encabezado_dev_iva::Search($request->nombre)->orderBy('id', 'desc')
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
         //dd($encabezado_dev_iva);

        //$cliente = DB::table('cliente')->paginate(15);
        //dd($cliente);
    return view('encabezado_dev_iva.index',compact('encabezado_dev_iva','usuarios','compromisos','periodo','compromisos_clientes','clientes','auditor'));
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


        $encabezado_dev_iva =  new encabezado_dev_iva($request-> all());

        $input = $request->all();

        if ($request->hasFile('ubicacion_archivos')) {


            $ruta = "/archivos/".$request->file('ubicacion_archivos')->store('archivos');

        }
        else
        {
            //$ruta=$encabezado_dev_iva->ubicacion_archivos;
            $dt = Carbon::now();
            $nit = clientes::find($input['cliente']);
            $ruta= "//clientes_ftp/".$nit->nit."/".$dt->year."/impuestos/devolucion_iva";
        }
    //dd($ruta);
        $encabezado_dev_iva->ubicacion_archivos  = $ruta;
        $encabezado_dev_iva->responsable=$input['responsable'];
        $encabezado_dev_iva->cliente=$input['cliente'];
        $encabezado_dev_iva->auditor=$input['auditor'];
        $encabezado_dev_iva->bim=0;
        $encabezado_dev_iva->fecha_vencimiento=$input['fecha_elaboracion'];
        $encabezado_dev_iva->fecha_entrega=$input['fecha_elaboracion'];
        $encabezado_dev_iva->Observaciones="null";
        $encabezado_dev_iva->enviar_auditoria=0;
        $encabezado_dev_iva->cierre_auditoria=0;
        $encabezado_dev_iva->observaciones_auditoria="null";
        $encabezado_dev_iva->fecha_auditoria_encabezado_dev_iva=$input['fecha_elaboracion'];
        $encabezado_dev_iva->fecha_elaboracion=$input['fecha_elaboracion'];

        $encabezado_dev_iva->save();

        $checklist=checklist::find(1); 
        $plantilla_checklist = plantilla_checklist::WHERE('filtro_checklist',$checklist->filtro_plantilla)->get();

        foreach ($plantilla_checklist as $key => $value) {


           DB::table('detalle_dev_iva')->insert([
            'cns_detalle' => $encabezado_dev_iva->id,
            'codigo' => $value->codigo_plantilla_checklist,
            'descripcion' => $value->descripcion_plantilla_checklist,

        ]);
       }


       \Alert::success('', 'El encabezado_dev_iva ha sido registrado con exito !')->persistent('Close');
       return redirect()->route('encabezado_dev_iva.index');




   }

    /**
     * Display the specified resource.
     *
     * @param  \App\encabezado_dev_iva  $encabezado_dev_iva
     * @return \Illuminate\Http\Response
     */
    public function show(encabezado_dev_iva $encabezado_dev_iva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\encabezado_dev_iva  $encabezado_dev_iva
     * @return \Illuminate\Http\Response
     */
    public function edit(encabezado_dev_iva $id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\encabezado_dev_iva  $encabezado_dev_iva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, encabezado_dev_iva $id)
    {


       $encabezado_dev_iva = encabezado_dev_iva::findOrFail($request->id);


       $input = $request->all();

       if ($request->hasFile('ubicacion_archivos')) {


        $ruta = "/archivos/".$request->file('ubicacion_archivos')->store('archivos');

    }
    else
    {
        
        $ruta=$input['ubicacion_archivos'];
    }
    //dd($ruta);
    $encabezado_dev_iva->ubicacion_archivos  = $ruta;
    $encabezado_dev_iva->responsable=$input['responsable'];
    $encabezado_dev_iva->cliente=$input['cliente'];
    $encabezado_dev_iva->auditor=$input['auditor'];
    $encabezado_dev_iva->bim=$input['bim'];
    $encabezado_dev_iva->fecha_vencimiento=$input['fecha_vencimiento'];
    $encabezado_dev_iva->fecha_entrega=$input['fecha_entrega'];
    $encabezado_dev_iva->Observaciones=$input['Observaciones'];
    $encabezado_dev_iva->enviar_auditoria=$input['enviar_auditoria'];
    $encabezado_dev_iva->cierre_auditoria=$input['cierre_auditoria'];
    $encabezado_dev_iva->observaciones_auditoria=$input['observaciones_auditoria'];
    $encabezado_dev_iva->fecha_auditoria_encabezado_dev_iva=$input['fecha_auditoria_encabezado_dev_iva'];
    $encabezado_dev_iva->fecha_elaboracion=$input['fecha_elaboracion'];

    $encabezado_dev_iva->save();
    


    Alert::success('', 'El encabezado_dev_iva ha sido editado con exito !')->persistent('Close');
    return redirect()->route('encabezado_dev_iva.index');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\encabezado_dev_iva  $encabezado_dev_iva
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $encabezado_dev_iva = encabezado_dev_iva::find($id);
        $encabezado_dev_iva->delete();
        \Alert::success('', 'El encabezado_dev_iva ha sido sido borrado de forma exita!')->persistent('Close');
        return redirect()->route('encabezado_dev_iva.index');
    }
}
