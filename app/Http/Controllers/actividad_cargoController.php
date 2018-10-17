<?php

namespace App\Http\Controllers;

use App\actividad_cargo;
use App\actividad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use App\User;
use App\cargo;
use App\perfil;
use Alert;

class actividad_cargoController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $actividad_cargo = actividad_cargo::Search($request->nombre)->orderBy('id_cargo', 'asc')->paginate(10);
         $usuarios = User::where('perfil_usuario',2)->pluck('name', 'id');
         $cargo = cargo::pluck('descripcion_cargo', 'id');
         $actividad = actividad::where('tipo',2)->orWhere('tipo','["1","2"]')->pluck('descripcion_actividad', 'id');
         $id = null;
         dd($actividad);

        //$cliente = DB::table('cliente')->paginate(15);
        //dd($cliente);
   return view('actividad_cargo.index',compact('actividad_cargo','usuarios', 'cargo','actividad','id'));
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
        $actividad_cargo =  new actividad_cargo($request-> all());
        $actividad_cargo->save();
        \Alert::success('', 'El actividad_cargo ha sido registrado con exito !')->persistent('Close');
         return redirect()->route('actividad_cargo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\actividad_cargo  $actividad_cargo
     * @return \Illuminate\Http\Response
     */
    public function show(actividad_cargo $actividad_cargo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\actividad_cargo  $actividad_cargo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $actividad_cargo= actividad_cargo::where('id_cargo',$id)->get();
           $usuarios = User::where('perfil_usuario',2)->pluck('name', 'id');
          $cargo = cargo::pluck('descripcion_cargo', 'id');
          $actividad = actividad::where('tipo','["2"]')->orWhere('tipo','["1","2"]')->pluck('descripcion_actividad', 'id');

        
         
         Log::info('El usuario '. \Auth::user()->name .' ingreso a actividad_cargo');
        //dd($eventosg);
        return view('actividad_cargo.detalle', compact('actividad_cargo','usuarios','cargo','actividad','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\actividad_cargo  $actividad_cargo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, actividad_cargo $id)
    {
         $actividad_cargo = actividad_cargo::findOrFail($request->id);
         $actividad_cargo->update($request->all());

      Alert::success('', 'El actividad_cargo ha sido editado con exito !')->persistent('Close');
      return redirect()->route('actividad_cargo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\actividad_cargo  $actividad_cargo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actividad_cargo = actividad_cargo::find($id);
        $actividad_cargo->delete();
        \Alert::success('', 'El actividad_cargo ha sido sido borrado de forma exita!')->persistent('Close');
        return redirect()->route('actividad_cargo.index');
    }
}
