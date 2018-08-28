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
use Alert;
use App\lugar;


class lugarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $lugar = lugar::Search($request->nombre)->orderBy('descripcion_lugar', 'asc')->paginate(10);
         $usuarios = User::where('perfil_usuario',2)->pluck('name', 'id');
         //dd($perfil);

        //$cliente = DB::table('cliente')->paginate(15);
        //dd($cliente);
   return view('lugar.index',compact('lugar','usuarios'));
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
        $lugar =  new lugar($request-> all());
        $lugar->save();
        \Alert::success('', 'El lugar ha sido registrado con exito !')->persistent('Close');
         return redirect()->route('lugar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lugar  $lugar
     * @return \Illuminate\Http\Response
     */
    public function show(lugar $lugar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lugar  $lugar
     * @return \Illuminate\Http\Response
     */
    public function edit(lugar $lugar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lugar  $lugar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lugar $id)
    {
         $lugar = lugar::findOrFail($request->id);
         $lugar->update($request->all());

      Alert::success('', 'El lugar ha sido editado con exito !')->persistent('Close');
      return redirect()->route('lugar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lugar  $lugar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lugar = lugar::find($id);
        $lugar->delete();
        \Alert::success('', 'El lugar ha sido sido borrado de forma exita!')->persistent('Close');
        return redirect()->route('lugar.index');
    }
}
