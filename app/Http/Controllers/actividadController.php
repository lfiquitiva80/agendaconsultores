<?php

namespace App\Http\Controllers;

use App\actividad;
use App\tipo_actividad;
use Illuminate\Http\Request;
use App\cargo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\User;
use App\perfil;
use Alert;

class actividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $actividad = actividad::Search($request->nombre)->orderBy('descripcion_actividad', 'asc')->paginate(10);
         $usuarios = User::where('perfil_usuario',2)->pluck('name', 'id');
         $tipo_actividad= tipo_actividad::pluck('descripcion', 'id');
         //dd($perfil);

        //$cliente = DB::table('cliente')->paginate(15);
        //dd($cliente);
   return view('actividad.index',compact('actividad','usuarios', 'tipo_actividad'));
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

        $json = json_encode($request->input('tipo'), true);
        $actividad =  new actividad($request-> all());
        $actividad->tipo=$json;
        $actividad->save();
        \Alert::success('', 'El actividad ha sido registrado con exito !')->persistent('Close');
         return redirect()->route('actividad.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function show(actividad $actividad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function edit(actividad $actividad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
           //dd($request->all()); 
         $json = json_encode($request->input('tipo'), true);           
         $actividad = actividad::findOrFail($request->id);
         $actividad->descripcion_actividad= $request->input('descripcion_actividad');
         $actividad->modo_actividad= $request->input('modo_actividad');
         $actividad->tipo = $json; 
         $actividad->save();

      Alert::success('', 'El actividad ha sido editado con exito !')->persistent('Close');
      return redirect()->route('actividad.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actividad = actividad::find($id);
        $actividad->delete();
        \Alert::success('', 'El actividad ha sido sido borrado de forma exita!')->persistent('Close');
        return redirect()->route('actividad.index');
    }
}
