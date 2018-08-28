<?php

namespace App\Http\Controllers;

use App\actividad;
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
         //dd($perfil);

        //$cliente = DB::table('cliente')->paginate(15);
        //dd($cliente);
   return view('actividad.index',compact('actividad','usuarios'));
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
        $actividad =  new actividad($request-> all());
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
         $actividad = actividad::findOrFail($request->id);
         $actividad->update($request->all());

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
