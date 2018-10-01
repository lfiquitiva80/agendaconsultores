<?php

namespace App\Http\Controllers;

use App\tipo_actividad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\User;
use App\perfil;
use Alert;


class tipo_actividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tipo_actividad = tipo_actividad::Search($request->nombre)->orderBy('descripcion', 'asc')->paginate(10);
         $usuarios = User::where('perfil_usuario',2)->pluck('name', 'id');
         //dd($perfil);

        //$cliente = DB::table('cliente')->paginate(15);
        //dd($cliente);
   return view('tipo_actividad.index',compact('tipo_actividad','usuarios'));
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
        $tipo_actividad =  new tipo_actividad($request-> all());
        $tipo_actividad->save();
        \Alert::success('', 'El tipo_actividad ha sido registrado con exito !')->persistent('Close');
         return redirect()->route('tipo_actividad.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tipo_actividad  $tipo_actividad
     * @return \Illuminate\Http\Response
     */
    public function show(tipo_actividad $tipo_actividad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tipo_actividad  $tipo_actividad
     * @return \Illuminate\Http\Response
     */
    public function edit(tipo_actividad $tipo_actividad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tipo_actividad  $tipo_actividad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tipo_actividad $id)
    {
         $tipo_actividad = tipo_actividad::findOrFail($request->id);
         $tipo_actividad->update($request->all());

      Alert::success('', 'El tipo_actividad ha sido editado con exito !')->persistent('Close');
      return redirect()->route('tipo_actividad.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tipo_actividad  $tipo_actividad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo_actividad = tipo_actividad::find($id);
        $tipo_actividad->delete();
        \Alert::success('', 'El tipo_actividad ha sido sido borrado de forma exita!')->persistent('Close');
        return redirect()->route('tipo_actividad.index');
    }
}
