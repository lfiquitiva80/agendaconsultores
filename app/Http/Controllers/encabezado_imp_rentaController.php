<?php

namespace App\Http\Controllers;

use App\encabezado_imp_renta;
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

class encabezado_imp_rentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if (Auth::user()->perfil_usuario == 1) {
            $encabezado_imp_renta = encabezado_imp_renta::Search($request->nombre)->orderBy('id', 'desc')->paginate(10);
        }elseif (Auth::user()->perfil_usuario == 2) {


           $encabezado_imp_renta = encabezado_imp_renta::where('responsable', Auth::user()->id)
           ->Search($request->nombre)
           ->orderBy('id', 'desc')
           ->paginate(10);




       }else {

        $encabezado_imp_renta = encabezado_imp_renta::Search($request->nombre)->orderBy('id', 'desc')
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
         //dd($encabezado_imp_renta);

        //$cliente = DB::table('cliente')->paginate(15);
        //dd($cliente);
    return view('encabezado_imp_renta.index',compact('encabezado_imp_renta','usuarios','compromisos','periodo','compromisos_clientes','clientes','auditor'));
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


        $encabezado_imp_renta =  new encabezado_imp_renta($request-> all());

        $input = $request->all();

        if ($request->hasFile('ubicacion_archivos')) {


            $ruta = "/archivos/".$request->file('ubicacion_archivos')->store('archivos');

        }
        else
        {
            $ruta=$encabezado_imp_renta->ubicacion_archivos;
            $dt = Carbon::now();
            $nit = clientes::find($input['cliente']);
            $ruta2= "//clientes_ftp/".$nit->nit."/".$dt->year."/impuestos/rentas";
        }
    //dd($ruta);
        $encabezado_imp_renta->ubicacion_archivos  = $ruta;
        $encabezado_imp_renta->responsable=$input['responsable'];
        $encabezado_imp_renta->cliente=$input['cliente'];
        $encabezado_imp_renta->audito=$input['audito'];
        $encabezado_imp_renta->bim_auditado=0;
        $encabezado_imp_renta->fecha_vencimiento=$input['fecha_elaboracion'];
        $encabezado_imp_renta->fecha_entrega=$input['fecha_elaboracion'];
        $encabezado_imp_renta->Observaciones="null";
        $encabezado_imp_renta->enviar_auditoria=0;
        $encabezado_imp_renta->cierre_auditoria=0;
        $encabezado_imp_renta->observaciones_auditoria="null";
        $encabezado_imp_renta->fecha_auditoria=$input['fecha_elaboracion'];
        $encabezado_imp_renta->fecha_elaboracion=$input['fecha_elaboracion'];

        $encabezado_imp_renta->save();

        $checklist=checklist::find(4); 
        $plantilla_checklist = plantilla_checklist::WHERE('filtro_checklist',$checklist->filtro_plantilla)->get();

        foreach ($plantilla_checklist as $key => $value) {


           DB::table('detalle_imp_renta')->insert([
            'cns_detalle' => $encabezado_imp_renta->id,
            'codigo' => $value->codigo_plantilla_checklist,
            'descripcion' => $value->descripcion_plantilla_checklist,

        ]);
       }


       \Alert::success('', 'El encabezado_imp_renta ha sido registrado con exito !')->persistent('Close');
       return redirect()->route('encabezado_imp_renta.index');




   }

    /**
     * Display the specified resource.
     *
     * @param  \App\encabezado_imp_renta  $encabezado_imp_renta
     * @return \Illuminate\Http\Response
     */
    public function show(encabezado_imp_renta $encabezado_imp_renta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\encabezado_imp_renta  $encabezado_imp_renta
     * @return \Illuminate\Http\Response
     */
    public function edit(encabezado_imp_renta $id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\encabezado_imp_renta  $encabezado_imp_renta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, encabezado_imp_renta $id)
    {


       $encabezado_imp_renta = encabezado_imp_renta::findOrFail($request->id);


       $input = $request->all();

       if ($request->hasFile('ubicacion_archivos')) {


        $rutaold = "/archivos/".$request->file('ubicacion_archivos')->store('archivos');
        
        $nombre=$request->ubicacion_archivos->getClientOriginalName();
        $dt = Carbon::now();
        $nit = clientes::find($input['cliente']);
        $rutaalmacenamiento= $nit->nit."/".$dt->year."/impuestos/rentas";
        $ruta = Storage::disk('public')->putFileAs($rutaalmacenamiento, $request->file('ubicacion_archivos'), $nombre);

    }
    else
    {
        
        $ruta=$input['ubicacion_archivos'];
    }
    //dd($ruta);
    $encabezado_imp_renta->ubicacion_archivos  = $ruta;
    $encabezado_imp_renta->responsable=$input['responsable'];
    $encabezado_imp_renta->cliente=$input['cliente'];
    $encabezado_imp_renta->audito=$input['audito'];
    $encabezado_imp_renta->bim_auditado=$input['bim_auditado'];
    $encabezado_imp_renta->fecha_vencimiento=$input['fecha_vencimiento'];
    $encabezado_imp_renta->fecha_entrega=$input['fecha_entrega'];
    $encabezado_imp_renta->Observaciones=$input['Observaciones'];
    $encabezado_imp_renta->enviar_auditoria=$input['enviar_auditoria'];
    $encabezado_imp_renta->cierre_auditoria=$input['cierre_auditoria'];
    $encabezado_imp_renta->observaciones_auditoria=$input['observaciones_auditoria'];
    $encabezado_imp_renta->fecha_auditoria=$input['fecha_auditoria'];
    $encabezado_imp_renta->fecha_elaboracion=$input['fecha_elaboracion'];

    $encabezado_imp_renta->save();
    


    Alert::success('', 'El encabezado_imp_renta ha sido editado con exito !')->persistent('Close');
    return redirect()->route('encabezado_imp_renta.index');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\encabezado_imp_renta  $encabezado_imp_renta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $encabezado_imp_renta = encabezado_imp_renta::find($id);
        $encabezado_imp_renta->delete();
        \Alert::success('', 'El encabezado_imp_renta ha sido sido borrado de forma exita!')->persistent('Close');
        return redirect()->route('encabezado_imp_renta.index');
    }
}
