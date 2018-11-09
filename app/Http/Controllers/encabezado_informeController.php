<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\encabezado_informe;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Mail\auditoria2;
use App\Mail\consultor;
use App\Mail\cerrados;
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

class encabezado_informeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if (Auth::user()->perfil_usuario == 1) {
            $encabezado_informe = encabezado_informe::where([['enviar_auditoria', '=', '0'],
                ['cierre_auditoria', '=', '0'],])->Search($request->nombre)->orderBy('id', 'desc')->paginate(10);

            $auditoria = \DB::table('encabezado_informe')
            ->where([['enviar_auditoria', '=', '1'],['cierre_auditoria', '=', '0'],])
            ->paginate(15);

            $cerrados =  \DB::table('encabezado_informe')
            ->where([['enviar_auditoria', '=', '1'],
                ['cierre_auditoria', '=', '1'],])->paginate(15);

        }elseif (Auth::user()->perfil_usuario == 2) {

         $encabezado_informe = encabezado_informe::where([['enviar_auditoria', '=', '0'],
            ['cierre_auditoria', '=', '0'],['responsable', '=', Auth::user()->id],])->Search($request->nombre)->orderBy('id', 'desc')->paginate(10);

         $auditoria = \DB::table('encabezado_informe')
         ->where([['enviar_auditoria', '=', '1'],['cierre_auditoria', '=', '0'],['responsable', '=', Auth::user()->id],])
         ->paginate(15);

         $cerrados =  \DB::table('encabezado_informe')
         ->where([['enviar_auditoria', '=', '1'],
            ['cierre_auditoria', '=', '1'],['responsable', '=', Auth::user()->id],])->paginate(15);




     }else {

       $encabezado_informe = encabezado_informe::where([['enviar_auditoria', '=', '0'],
        ['cierre_auditoria', '=', '0'],['responsable', '=', Auth::user()->id],])->Search($request->nombre)->orderBy('id', 'desc')->paginate(10);

       $auditoria = \DB::table('encabezado_informe')
       ->where([['enviar_auditoria', '=', '1'],['cierre_auditoria', '=', '0'],])
       ->paginate(15);

       $cerrados =  \DB::table('encabezado_informe')
       ->where([['enviar_auditoria', '=', '1'],
        ['cierre_auditoria', '=', '1'],])->paginate(15);

   }

   $usuarios = User::where('perfil_usuario',2)->pluck('name', 'id');
   if (Auth::user()->perfil_usuario == 1 || Auth::user()->perfil_usuario == 3 || Auth::user()->habilitar_empresas == 1) {
    $clientes = clientes::pluck('nombre_cliente', 'id');
} else {
    $clientes = clientes::where('responsable_cliente',Auth::user()->id)->pluck('nombre_cliente', 'id');
}


$compromisos = compromisos::pluck('descripcion_compromisos', 'id');
$periodo = periodo::pluck('descripcion_periodo', 'id');
$compromisos_clientes = compromisos_cliente::all();
$auditor = User::where('perfil_usuario',3)->pluck('name', 'id');
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
         //dd($encabezado_informe);
Log::info(Auth::user()->name. " Ingreso a encabezado_informe");

        //$cliente = DB::table('cliente')->paginate(15);
        //dd($cliente);
return view('encabezado_informe.index',compact('encabezado_informe','usuarios','compromisos','periodo','compromisos_clientes','clientes','auditor','auditoria','cerrados','meses'));
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


        $encabezado_informe =  new encabezado_informe($request-> all());

        $input = $request->all(); //dd($input);




        if ($request->hasFile('ubicacion_archivos')) {


            $ruta = "/archivos/".$request->file('ubicacion_archivos')->store('archivos');


        }
        else
        {
            $ruta=$encabezado_informe->ubicacion_archivos;
            $dt = Carbon::now();
            $nit = clientes::find($input['cliente']);
            $ruta2= "//clientes_ftp/".$nit->nit."/".$dt->year."/informes";
        }
    //dd($ruta);
        $encabezado_informe->ubicacion_archivos  = $ruta;
        $encabezado_informe->responsable=$input['responsable'];
        $encabezado_informe->cliente=$input['cliente'];
        $encabezado_informe->audito=$input['audito'];
        $encabezado_informe->bim_auditado=0;
        $encabezado_informe->fecha_vencimiento=$input['fecha_elaboracion'];
        $encabezado_informe->fecha_entrega=$input['fecha_elaboracion'];
        $encabezado_informe->Observaciones="null";
        $encabezado_informe->enviar_auditoria=0;
        $encabezado_informe->cierre_auditoria=0;
        $encabezado_informe->observaciones_auditoria="null";
        $encabezado_informe->fecha_auditoria=$input['fecha_elaboracion'];
        $encabezado_informe->fecha_elaboracion=$input['fecha_elaboracion'];
        $encabezado_informe->mes_archivo=0;

        $encabezado_informe->save();

        $checklist=checklist::find(7);
        $plantilla_checklist = plantilla_checklist::WHERE('filtro_checklist',$checklist->filtro_plantilla)->get();

        //dd($plantilla_checklist);

        foreach ($plantilla_checklist as $key => $value) {


         DB::table('detalle_informe')->insert([
            'cns_detalle' => $encabezado_informe->id,
            'codigo' => $value->codigo_plantilla_checklist,
            'descripcion' => $value->descripcion_plantilla_checklist,

        ]);
     }

     Log::info(Auth::user()->name. " Creo una encabezado_informe y su detalle ". $encabezado_informe );
     \Alert::success('', 'El encabezado_informe ha sido registrado con exito !')->persistent('Close');
     return redirect()->route('encabezado_informe.index');




 }

    /**
     * Display the specified resource.
     *
     * @param  \App\encabezado_informe  $encabezado_informe
     * @return \Illuminate\Http\Response
     */
    public function show(encabezado_informe $encabezado_informe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\encabezado_informe  $encabezado_informe
     * @return \Illuminate\Http\Response
     */
    public function edit(encabezado_informe $id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\encabezado_informe  $encabezado_informe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, encabezado_informe $id)
    {

        $encabezado_informe= encabezado_informe::find($request->id);

        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");


        $input = $request->all(); //dd($input);



        $mailconsultor = User::find($input['responsable']);
        $mailauditor = User::find($input['audito']);



    if ($request->hasFile('ubicacion_archivos')) {

        $files = $request->file('ubicacion_archivos');
        $dt = Carbon::now();
        $nit = clientes::find($input['cliente']);
        $rutaalmacenamiento= $nit->nit."/".$dt->year."/informes/".$meses[$input['mes']];

        foreach($files as $file) {
            $filename = $file->getClientOriginalName();
            $ruta2 = Storage::disk('public')->putFileAs($rutaalmacenamiento, $file, $filename);
            $ruta =$rutaalmacenamiento;

        }
            //$nombre=$request->ubicacion_archivos->getClientOriginalName();




    }
    else
    {

        $ruta=$encabezado_informe->ubicacion_archivos;
    }
    //dd($ruta);
    $encabezado_informe->ubicacion_archivos  = $ruta;
    $encabezado_informe->responsable=$input['responsable'];
    $encabezado_informe->cliente=$input['cliente'];
    $encabezado_informe->audito=$input['audito'];
    $encabezado_informe->bim_auditado=$input['bim_auditado'];
    $encabezado_informe->fecha_vencimiento=$input['fecha_vencimiento'];
    $encabezado_informe->fecha_entrega=$input['fecha_entrega'];
    $encabezado_informe->Observaciones=$input['Observaciones'];
    $encabezado_informe->enviar_auditoria=$input['enviar_auditoria'];
    $encabezado_informe->cierre_auditoria=$input['cierre_auditoria'];
    $encabezado_informe->observaciones_auditoria=$input['observaciones_auditoria'];
    $encabezado_informe->fecha_auditoria=$input['fecha_auditoria'];
    $encabezado_informe->fecha_elaboracion=$input['fecha_elaboracion'];
    $encabezado_informe->mes_archivo=$input['mes'];

    $encabezado_informe->save();

    $store=$encabezado_informe;

    if ($input['enviar_auditoria'] == 1 && Auth::user()->perfil_usuario == 2 && $mailauditor->notificacion == 1) {

         \Mail::to($mailauditor->email)->send(new auditoria2($store));
    } elseif ($input['enviar_auditoria'] == 1 && Auth::user()->perfil_usuario == 3 && $mailconsultor->notificacion == 1) {
        \Mail::to($mailconsultor->email)->send(new cerrados($store));

    } elseif ($input['enviar_auditoria'] == 0 && Auth::user()->perfil_usuario == 3 && $mailconsultor->notificacion == 1) {
        \Mail::to($mailconsultor->email)->send(new consultor($store));
    }


    Log::info(Auth::user()->name. " Actualizó el registro ". $encabezado_informe );
    Alert::success('', 'El encabezado_informe ha sido editado con exito !')->persistent('Close');
    return redirect()->route('encabezado_informe.index');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\encabezado_informe  $encabezado_informe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $encabezado_informe = encabezado_informe::find($id);
        Storage::disk('public')->delete($encabezado_informe->ubicacion_archivos);
        $encabezado_informe->delete();

        \Alert::success('', 'El encabezado_informe ha sido sido borrado de forma exita!')->persistent('Close');
        Log::info(Auth::user()->name. " Eliminó el registro ". $encabezado_informe );
        return redirect()->route('encabezado_informe.index');
    }
}
