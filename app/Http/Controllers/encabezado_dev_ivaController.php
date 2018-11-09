<?php

namespace App\Http\Controllers;

use App\encabezado_dev_iva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Mail\auditoria;
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
            $encabezado_dev_iva = encabezado_dev_iva::where([['enviar_auditoria', '=', '0'],
                ['cierre_auditoria', '=', '0'],])->Search($request->nombre)->orderBy('id', 'desc')->paginate(10);

            $auditoria = \DB::table('encabezado_dev_iva')
            ->where([['enviar_auditoria', '=', '1'],['cierre_auditoria', '=', '0'],])
            ->paginate(15);

            $cerrados =  \DB::table('encabezado_dev_iva')
            ->where([['enviar_auditoria', '=', '1'],
                ['cierre_auditoria', '=', '1'],])->paginate(15);

        }elseif (Auth::user()->perfil_usuario == 2) {

           $encabezado_dev_iva = encabezado_dev_iva::where([['enviar_auditoria', '=', '0'],
            ['cierre_auditoria', '=', '0'],['responsable', '=', Auth::user()->id],])->Search($request->nombre)->orderBy('id', 'desc')->paginate(10);

           $auditoria = \DB::table('encabezado_dev_iva')
           ->where([['enviar_auditoria', '=', '1'],['cierre_auditoria', '=', '0'],['responsable', '=', Auth::user()->id],])
           ->paginate(15);

           $cerrados =  \DB::table('encabezado_dev_iva')
           ->where([['enviar_auditoria', '=', '1'],
            ['cierre_auditoria', '=', '1'],['responsable', '=', Auth::user()->id],])->paginate(15);




       }else {

         $encabezado_dev_iva = encabezado_dev_iva::where([['enviar_auditoria', '=', '0'],
            ['cierre_auditoria', '=', '0'],['responsable', '=', Auth::user()->id],])->Search($request->nombre)->orderBy('id', 'desc')->paginate(10);

         $auditoria = \DB::table('encabezado_dev_iva')
         ->where([['enviar_auditoria', '=', '1'],['cierre_auditoria', '=', '0'],])
         ->paginate(15);

         $cerrados =  \DB::table('encabezado_dev_iva')
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
         //dd($encabezado_dev_iva);
    Log::info(Auth::user()->name. " Ingreso a encabezado_dev_iva");

        //$cliente = DB::table('cliente')->paginate(15);
        //dd($cliente);
    return view('encabezado_dev_iva.index',compact('encabezado_dev_iva','usuarios','compromisos','periodo','compromisos_clientes','clientes','auditor','auditoria','cerrados','meses'));
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
            $ruta=$encabezado_dev_iva->ubicacion_archivos;
            $dt = Carbon::now();
            $nit = clientes::find($input['cliente']);
            $ruta2= "//clientes_ftp/".$nit->nit."/".$dt->year."/impuestos/devolucion_iva";
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
        $encabezado_dev_iva->mes_archivo=0;


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

       Log::info(Auth::user()->name. " Creo una encabezado_dev_iva y su detalle ". $encabezado_dev_iva );
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

        $encabezado_dev_iva= encabezado_dev_iva::find($request->id);

        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");


        $input = $request->all();


        $mailconsultor = User::find($input['responsable']);
        $mailauditor = User::find($input['auditor']);






        if ($request->hasFile('ubicacion_archivos')) {

        $files = $request->file('ubicacion_archivos');
        $dt = Carbon::now();
        $nit = clientes::find($input['cliente']);
        $rutaalmacenamiento= $nit->nit."/".$dt->year."/impuestos/devolucion_iva/".$meses[$input['mes']];

            foreach($files as $file) {
            $filename = $file->getClientOriginalName();
            $ruta2 = Storage::disk('public')->putFileAs($rutaalmacenamiento, $file, $filename);
            $ruta =$rutaalmacenamiento;

            }
            //$nombre=$request->ubicacion_archivos->getClientOriginalName();




        }
        else
        {

            $ruta=$encabezado_dev_iva->ubicacion_archivos;
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
        $encabezado_dev_iva->mes_archivo=$input['mes'];
        $encabezado_dev_iva->save();

        $store=$encabezado_dev_iva;
        
        if ($input['enviar_auditoria'] == 1 && Auth::user()->perfil_usuario == 2 && $mailauditor->notificacion == 1) {

               \Mail::to($mailauditor->email)->send(new auditoria($store));
          } elseif ($input['enviar_auditoria'] == 1 && Auth::user()->perfil_usuario == 3 && $mailconsultor->notificacion == 1) {
              \Mail::to($mailconsultor->email)->send(new cerrados($store));
          } elseif ($input['enviar_auditoria'] == 0 && Auth::user()->perfil_usuario == 3 && $mailconsultor->notificacion == 1) {
              \Mail::to($mailconsultor->email)->send(new consultor($store));
          }




        Log::info(Auth::user()->name. " Actualizó el registro ". $encabezado_dev_iva );
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
        Storage::disk('public')->delete($encabezado_dev_iva->ubicacion_archivos);
        $encabezado_dev_iva->delete();

        \Alert::success('', 'El encabezado_dev_iva ha sido sido borrado de forma exita!')->persistent('Close');
        Log::info(Auth::user()->name. " Eliminó el registro ". $encabezado_dev_iva );
        return redirect()->route('encabezado_dev_iva.index');
    }
}
