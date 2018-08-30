<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
use App\jornada;
use Alert;

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
         $clientes = clientes::pluck('nombre_cliente', 'id');
         $usuarios = User::where('perfil_usuario',2)->pluck('name', 'id');
         $actividad_citas = actividad::pluck('descripcion_actividad', 'id');
         $estado_citas = estado_cita::pluck('Estado', 'id');
         $jornada = jornada::pluck('descripcion_jornada', 'id');
         //dd($perfil);

        //$cliente = DB::table('cliente')->paginate(15);
        //dd($cliente);
   return view('citas.index',compact('citas','lugar','clientes','usuarios','actividad_citas','estado_citas','jornada'));
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
        $citas =  new citas($request-> all());
        $citas->save();
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
         $citas = citas::findOrFail($request->id);
         $citas->update($request->all());

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
        return redirect()->route('citas.index');
    }

     public function  get_events(){
    //     $data = \DB::table('ordenesdeservicio')
    //                 ->join('cliente','cliente.id','=','ordenesdeservicio.cliente')
    //                 ->join('vehiculo','vehiculo.id','=','ordenesdeservicio.placa')
    //                 //->select("ordenesdeservicio.Escolta_asignado as id","ordenesdeservicio.Escolta_asignado as resourceId")
    // ->select("ordenesdeservicio.Escolta_asignado as id",DB::raw("CONCAT(vehiculo.placa,'  .Detalle Del Servicio:',ordenesdeservicio.detalle_del_servicio,'  .Nombre Cliente:',cliente.nombre) as title"),"ordenesdeservicio.Escolta_asignado as resourceId","fecha_inicio_servicio as start","color_agenda as color")
    //                 ->get();
        $data=\DB::table('citas')
            ->join('cliente','cliente.id','=','citas.empresa_citas')
            ->select("citas.id as id","cliente.nombre_cliente as title","fecha_citas as start")
            ->get();


      //$data = citas::select("id","observacion_citas as title","fecha_citas as start" )->get();
      return response()->json($data);
    }


    public function  citasall(){
  
      $data = citas::all();
      
      return response()->json($data);
    }



}
