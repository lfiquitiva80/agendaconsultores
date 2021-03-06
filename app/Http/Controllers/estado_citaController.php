<?php

namespace App\Http\Controllers;

use App\estado_cita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\User;
use App\perfil;
use Alert;

class estado_citaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $estado_cita = estado_cita::Search($request->nombre)->orderBy('Estado', 'asc')->paginate(10);
         $usuarios = User::where('perfil_usuario',2)->pluck('name', 'id');
         //dd($perfil);

        //$cliente = DB::table('cliente')->paginate(15);
        //dd($cliente);
   return view('estado_cita.index',compact('estado_cita','usuarios'));
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
        $estado_cita =  new estado_cita($request-> all());
        $estado_cita->save();
        \Alert::success('', 'El estado_cita ha sido registrado con exito !')->persistent('Close');
         return redirect()->route('estado_cita.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\estado_cita  $estado_cita
     * @return \Illuminate\Http\Response
     */
    public function show(estado_cita $estado_cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\estado_cita  $estado_cita
     * @return \Illuminate\Http\Response
     */
    public function edit(estado_cita $estado_cita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\estado_cita  $estado_cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, estado_cita $id)
    {
         $estado_cita = estado_cita::findOrFail($request->id);
         $estado_cita->update($request->all());

      Alert::success('', 'El estado_cita ha sido editado con exito !')->persistent('Close');
      return redirect()->route('estado_cita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\estado_cita  $estado_cita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estado_cita = estado_cita::find($id);
        $estado_cita->delete();
        \Alert::success('', 'El estado_cita ha sido sido borrado de forma exita!')->persistent('Close');
        return redirect()->route('estado_cita.index');
    }
}
