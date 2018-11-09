<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\User;
use App\perfil;
use App\citas;
use App\lugar;
use App\clientes;
use App\actividad;
use App\estado_cita;
use App\compromisos;
use App\jornada;
use Alert;
use Carbon\Carbon;

class citasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $citas = citas::Search($request->nombre)->orderBy('id', 'asc')->paginate(10);
         $lugar = lugar::pluck('descripcion_lugar', 'id');
         $usuarios = User::where('perfil_usuario',2)->pluck('name', 'id');


    if (Auth::user()->perfil_usuario == 1 || Auth::user()->habilitar_empresas == 1) {
        $clientes = clientes::pluck('nombre_cliente', 'id');
    } 
    else {
        $clientes = clientes::where('responsable_cliente',Auth::user()->id)->pluck('nombre_cliente', 'id');
    }



    if (Auth::user()->perfil_usuario == 1) {

        $citas = citas::Search($request->nombre)->orderBy('id', 'asc')->paginate(10);
    } else {

     $citas = citas::where('usuario_citas',Auth::user()->id)->Search($request->nombre)->orderBy('id', 'asc')->paginate(10);
    }







         $usuarios = User::where('perfil_usuario',2)->pluck('name', 'id');
         $actividad_citas = actividad::pluck('descripcion_actividad', 'id');
         $estado_citas = estado_cita::pluck('Estado', 'id');
         $jornada = jornada::pluck('descripcion_jornada', 'id');
         $compromisos = compromisos::pluck('descripcion_compromisos', 'id');
         //dd($perfil);
         Log::info(Auth::user()->name. " Ingreso a citas");
        //$cliente = DB::table('cliente')->paginate(15);
        //dd($cliente);
   return view('citas.index',compact('citas','lugar','clientes','usuarios','actividad_citas','estado_citas','jornada','compromisos'));
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

        //dd($request-> all());
        $json = json_encode($request->input('actividad_citas'), true);
        $json2 = json_encode($request->input('compromiso_citas'), true);
        //dd($json);
        // $citas =  new citas($request-> all());
        // $citas->actividad_citas=$json;
        // $citas->save();

        $citas = new citas;
        $citas->fecha_citas=$request->input('fecha_citas');
        $citas->lugar_citas=$request->input('lugar_citas');
        $citas->observacion_citas=$request->input('observacion_citas');
        $citas->empresa_citas=$request->input('empresa_citas');
        $citas->jornada_citas=$request->input('jornada_citas');
        $citas->hora_citas=$request->input('hora_citas');
        $citas->usuario_citas=$request->input('usuario_citas');
        $citas->hora_final_citas=$request->input('hora_final_citas');
        $citas->hora_citas=$request->input('hora_citas');
        $citas->actividad_citas=$json;
        $citas->estado_citas=$request->input('estado_citas');
        $citas->compromiso_citas=$json2;
        // ...

        $citas->save();



        Log::info(Auth::user()->name. " Creo una cita ". $citas );
        \Alert::success('', 'El citas ha sido registrado con exito !')->persistent('Close');
         //return redirect()->route('citas.index');
         return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function show(citas $citas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function edit(citas $citas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, citas $id)
    {
         // $citas = citas::findOrFail($request->id);
         // $citas->update($request->all());
        //dd($request->all());
         $json = json_encode($request->input('actividad_citas'), true);
         $json2 = json_encode($request->input('compromiso_citas'), true);
        $citas = citas::findOrFail($request->id);
        $citas->fecha_citas=$request->input('fecha_citas');
        $citas->lugar_citas=$request->input('lugar_citas');
        $citas->observacion_citas=$request->input('observacion_citas');
        $citas->empresa_citas=$request->input('empresa_citas');
        $citas->jornada_citas=$request->input('jornada_citas');
        $citas->hora_citas=$request->input('hora_citas');
        $citas->usuario_citas=$request->input('usuario_citas');
        $citas->hora_final_citas=$request->input('hora_final_citas');
        $citas->hora_citas=$request->input('hora_citas');
        $citas->actividad_citas=$json;
        $citas->estado_citas=$request->input('estado_citas');
        $citas->compromiso_citas=$json2;
        $citas->save();


        Log::info(Auth::user()->name. " Actualizó el registro ". $citas );

      Alert::success('', 'El citas ha sido editado con exito !')->persistent('Close');
      //return redirect()->route('citas.index');
       return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $citas = citas::find($id);
        $citas->delete();
        \Alert::success('', 'El citas ha sido sido borrado de forma exita!')->persistent('Close');

        Log::info(Auth::user()->name. " Eliminó el registro ". $citas );
        return redirect()->route('citas.index');
    }

    public function sesion(Request $request)
    {

        //dd($request-> all());
        $json = json_encode($request->input('actividad_citas'), true);
        $json2 = json_encode($request->input('compromiso_citas'), true);
        //dd($json);
        $date= Carbon::now();
        $ip= "Inicio de Sesión del Usuario ". Auth::user()->name. " La Dirección Ip =>  ". $_SERVER['REMOTE_ADDR'];

        $citas = new citas;
                $citas->fecha_citas=$date;
                $citas->lugar_citas=$request->input('lugar_citas');
                $citas->observacion_citas=$ip;
                $citas->empresa_citas=$request->input('empresa_citas');;
                $citas->jornada_citas=1;
                $citas->hora_citas=Carbon::now()->format('H:i');
                $citas->usuario_citas=Auth::user()->id;
                $citas->hora_final_citas=Carbon::now()->format('H:i');
                $citas->hora_citas=Carbon::now()->format('H:i');
                $citas->actividad_citas='["17"]';
                $citas->estado_citas=1;
                $citas->compromiso_citas='["3","5","6","17","20","21","22"]';
        // ...

        $citas->save();



        Log::info(Auth::user()->name. " Creo una cita ". $citas );
        \Alert::success('', 'El registro de Inicio de Sesión fue registrado con exito !')->persistent('Close');
         //return redirect()->route('citas.index');
         return redirect()->route('home');
    }


     public function  get_events(Request $request){
    //     $data = \DB::table('ordenesdeservicio')
    //                 ->join('cliente','cliente.id','=','ordenesdeservicio.cliente')
    //                 ->join('vehiculo','vehiculo.id','=','ordenesdeservicio.placa')
    //                 //->select("ordenesdeservicio.Escolta_asignado as id","ordenesdeservicio.Escolta_asignado as resourceId")
    // ->select("ordenesdeservicio.Escolta_asignado as id",DB::raw("CONCAT(vehiculo.placa,'  .Detalle Del Servicio:',ordenesdeservicio.detalle_del_servicio,'  .Nombre Cliente:',cliente.nombre) as title"),"ordenesdeservicio.Escolta_asignado as resourceId","fecha_inicio_servicio as start","color_agenda as color")
    //                 ->get();
        //dd($request->all());
        if (Auth::user()->perfil_usuario == 1) {
            $data=\DB::table('citas')
            ->join('cliente','cliente.id','=','citas.empresa_citas')
            ->join('estado_cita','estado_cita.id','=','citas.estado_citas')
            ->select("citas.id as id","cliente.nombre_cliente as title","fecha_citas as start","estado_cita.color_agenda as color")
            ->where('usuario_citas','LIKE','%' .$request->nombre . '%')
            ->get();



        } else {

            $data=\DB::table('citas')
            ->join('cliente','cliente.id','=','citas.empresa_citas')
            ->join('estado_cita','estado_cita.id','=','citas.estado_citas')
            ->select("citas.id as id","cliente.nombre_cliente as title","fecha_citas as start","estado_cita.color_agenda as color")
            ->where('usuario_citas',Auth::user()->id)
            ->get();

        }



      //$data = citas::select("id","observacion_citas as title","fecha_citas as start" )->get();
      return response()->json($data);
    }


    public function  citasall(){

      $data = citas::all();

      return response()->json($data);
    }

    public function actavisitas($id)
    {

        $citas = \DB::table('citas')->where('id',$id)->first();

        //dd($citas);
        return view('actas.actas',compact('citas'));
    }



}
