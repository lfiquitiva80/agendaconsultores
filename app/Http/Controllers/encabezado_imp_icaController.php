<?php

namespace App\Http\Controllers;

use App\encabezado_imp_ica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\User;
use App\perfil;
use App\Mail\auditoria2;
use App\Mail\consultor;
use App\Mail\cerrados;
use App\clientes;
use App\compromisos;
use App\compromisos_cliente;
use App\periodo;
use App\checklist;
use App\plantilla_checklist;
use Alert;
use Carbon\Carbon;

class encabezado_imp_icaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if (Auth::user()->perfil_usuario == 1) {
            $encabezado_imp_ica = encabezado_imp_ica::where([['enviar_auditoria', '=', '0'],
                ['cierre_auditoria', '=', '0'],])->Search($request->nombre)->orderBy('id', 'desc')->paginate(10);

            $auditoria = \DB::table('encabezado_imp_ica')
            ->where([['enviar_auditoria', '=', '1'],['cierre_auditoria', '=', '0'],])
            ->paginate(15);

            $cerrados =  \DB::table('encabezado_imp_ica')
            ->where([['enviar_auditoria', '=', '1'],
                ['cierre_auditoria', '=', '1'],])->paginate(15);

        }elseif (Auth::user()->perfil_usuario == 2) {

           $encabezado_imp_ica = encabezado_imp_ica::where([['enviar_auditoria', '=', '0'],
            ['cierre_auditoria', '=', '0'],['responsable', '=', Auth::user()->id],])->Search($request->nombre)->orderBy('id', 'desc')->paginate(10);

           $auditoria = \DB::table('encabezado_imp_ica')
           ->where([['enviar_auditoria', '=', '1'],['cierre_auditoria', '=', '0'],['responsable', '=', Auth::user()->id],])
           ->paginate(15);

           $cerrados =  \DB::table('encabezado_imp_ica')
           ->where([['enviar_auditoria', '=', '1'],
            ['cierre_auditoria', '=', '1'],['responsable', '=', Auth::user()->id],])->paginate(15);




       }else {

         $encabezado_imp_ica = encabezado_imp_ica::where([['enviar_auditoria', '=', '0'],
            ['cierre_auditoria', '=', '0'],['responsable', '=', Auth::user()->id],])->Search($request->nombre)->orderBy('id', 'desc')->paginate(10);

         $auditoria = \DB::table('encabezado_imp_ica')
         ->where([['enviar_auditoria', '=', '1'],['cierre_auditoria', '=', '0'],])
         ->paginate(15);

         $cerrados =  \DB::table('encabezado_imp_ica')
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
         //dd($encabezado_imp_ica);
    Log::info(Auth::user()->name. " Ingreso a encabezado_imp_ica");

        //$cliente = DB::table('cliente')->paginate(15);
        //dd($cliente);
    return view('encabezado_imp_ica.index',compact('encabezado_imp_ica','usuarios','compromisos','periodo','compromisos_clientes','clientes','auditor','auditoria','cerrados','meses'));
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


        $encabezado_imp_ica =  new encabezado_imp_ica($request-> all());

        $input = $request->all();




        if ($request->hasFile('ubicacion_archivos')) {


            $ruta = "/archivos/".$request->file('ubicacion_archivos')->store('archivos');


        }
        else
        {
            $ruta=$encabezado_imp_ica->ubicacion_archivos;
            $dt = Carbon::now();
            $nit = clientes::find($input['cliente']);
            $ruta2= "//clientes_ftp/".$nit->nit."/".$dt->year."/impuestos/devolucion_iva";
        }
    //dd($ruta);
        $encabezado_imp_ica->ubicacion_archivos  = $ruta;
        $encabezado_imp_ica->responsable=$input['responsable'];
        $encabezado_imp_ica->cliente=$input['cliente'];
        $encabezado_imp_ica->audito=$input['audito'];
        $encabezado_imp_ica->bim_auditado=0;
        $encabezado_imp_ica->fecha_vencimiento=$input['fecha_elaboracion'];
        $encabezado_imp_ica->fecha_entrega=$input['fecha_elaboracion'];
        $encabezado_imp_ica->Observaciones="null";
        $encabezado_imp_ica->enviar_auditoria=0;
        $encabezado_imp_ica->cierre_auditoria=0;
        $encabezado_imp_ica->observaciones_auditoria="null";
        $encabezado_imp_ica->fecha_auditoria=$input['fecha_elaboracion'];
        $encabezado_imp_ica->fecha_elaboracion=$input['fecha_elaboracion'];
        $encabezado_imp_ica->mes_archivo=0;

        $encabezado_imp_ica->save();

        $checklist=checklist::find(2);
        $plantilla_checklist = plantilla_checklist::WHERE('filtro_checklist',$checklist->filtro_plantilla)->get();

        foreach ($plantilla_checklist as $key => $value) {


           DB::table('detalle_imp_ica')->insert([
            'cns_detalle' => $encabezado_imp_ica->id,
            'codigo' => $value->codigo_plantilla_checklist,
            'descripcion' => $value->descripcion_plantilla_checklist,

        ]);
       }

       Log::info(Auth::user()->name. " Creo una encabezado_imp_ica y su detalle ". $encabezado_imp_ica );
       \Alert::success('', 'El encabezado_imp_ica ha sido registrado con exito !')->persistent('Close');
       return redirect()->route('encabezado_imp_ica.index');




   }

    /**
     * Display the specified resource.
     *
     * @param  \App\encabezado_imp_ica  $encabezado_imp_ica
     * @return \Illuminate\Http\Response
     */
    public function show(encabezado_imp_ica $encabezado_imp_ica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\encabezado_imp_ica  $encabezado_imp_ica
     * @return \Illuminate\Http\Response
     */
    public function edit(encabezado_imp_ica $id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\encabezado_imp_ica  $encabezado_imp_ica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, encabezado_imp_ica $id)
    {

                $encabezado_imp_ica= encabezado_imp_ica::find($request->id);

        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");


        $input = $request->all(); //dd($input);



        $mailconsultor = User::find($input['responsable']);
        $mailauditor = User::find($input['audito']);


        if ($request->hasFile('ubicacion_archivos')) {

        $files = $request->file('ubicacion_archivos');
        $dt = Carbon::now();
        $nit = clientes::find($input['cliente']);
        $rutaalmacenamiento= $nit->nit."/".$dt->year."/impuestos/ica/".$meses[$input['mes']];

            foreach($files as $file) {
            $filename = $file->getClientOriginalName();
            $ruta2 = Storage::disk('public')->putFileAs($rutaalmacenamiento, $file, $filename);
            $ruta =$rutaalmacenamiento;

            }
            //$nombre=$request->ubicacion_archivos->getClientOriginalName();




        }
        else
        {

            $ruta=$encabezado_imp_ica->ubicacion_archivos;
        }
    //dd($ruta);
        $encabezado_imp_ica->ubicacion_archivos  = $ruta;
        $encabezado_imp_ica->responsable=$input['responsable'];
        $encabezado_imp_ica->cliente=$input['cliente'];
        $encabezado_imp_ica->audito=$input['audito'];
        $encabezado_imp_ica->bim_auditado=$input['bim_auditado'];
        $encabezado_imp_ica->fecha_vencimiento=$input['fecha_vencimiento'];
        $encabezado_imp_ica->fecha_entrega=$input['fecha_entrega'];
        $encabezado_imp_ica->Observaciones=$input['Observaciones'];
        $encabezado_imp_ica->enviar_auditoria=$input['enviar_auditoria'];
        $encabezado_imp_ica->cierre_auditoria=$input['cierre_auditoria'];
        $encabezado_imp_ica->observaciones_auditoria=$input['observaciones_auditoria'];
        $encabezado_imp_ica->fecha_auditoria=$input['fecha_auditoria'];
        $encabezado_imp_ica->fecha_elaboracion=$input['fecha_elaboracion'];
        $encabezado_imp_ica->mes_archivo=$input['mes'];

        $encabezado_imp_ica->save();


          $store=$encabezado_imp_ica;


        if ($input['enviar_auditoria'] == 1 && Auth::user()->perfil_usuario == 2 && $mailauditor->notificacion == 1) {

             \Mail::to($mailauditor->email)->send(new auditoria2($store));
        } elseif ($input['enviar_auditoria'] == 1 && Auth::user()->perfil_usuario == 3 && $mailconsultor->notificacion == 1) {
            \Mail::to($mailconsultor->email)->send(new cerrados($store));

        } elseif ($input['enviar_auditoria'] == 0 && Auth::user()->perfil_usuario == 3 && $mailconsultor->notificacion == 1) {
            \Mail::to($mailconsultor->email)->send(new consultor($store));
        }


        Log::info(Auth::user()->name. " Actualizó el registro ". $encabezado_imp_ica );
        Alert::success('', 'El encabezado_imp_ica ha sido editado con exito !')->persistent('Close');
        return redirect()->route('encabezado_imp_ica.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\encabezado_imp_ica  $encabezado_imp_ica
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $encabezado_imp_ica = encabezado_imp_ica::find($id);
        Storage::disk('public')->delete($encabezado_imp_ica->ubicacion_archivos);
        $encabezado_imp_ica->delete();

        \Alert::success('', 'El encabezado_imp_ica ha sido sido borrado de forma exita!')->persistent('Close');
        Log::info(Auth::user()->name. " Eliminó el registro ". $encabezado_imp_ica );
        return redirect()->route('encabezado_imp_ica.index');
    }
}
