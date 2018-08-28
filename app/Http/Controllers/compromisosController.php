<?php

namespace App\Http\Controllers;

use App\compromisos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\User;
use App\perfil;
use Alert;

class compromisosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $compromisos = compromisos::Search($request->nombre)->orderBy('descripcion_compromisos', 'asc')->paginate(10);
         $usuarios = User::where('perfil_usuario',2)->pluck('name', 'id');
         //dd($perfil);

        //$cliente = DB::table('cliente')->paginate(15);
        //dd($cliente);
   return view('compromisos.index',compact('compromisos','usuarios'));
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
        $compromisos =  new compromisos($request-> all());
        $compromisos->save();
        \Alert::success('', 'El compromisos ha sido registrado con exito !')->persistent('Close');
         return redirect()->route('compromisos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\compromisos  $compromisos
     * @return \Illuminate\Http\Response
     */
    public function show(compromisos $compromisos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\compromisos  $compromisos
     * @return \Illuminate\Http\Response
     */
    public function edit(compromisos $compromisos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\compromisos  $compromisos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, compromisos $id)
    {
         $compromisos = compromisos::findOrFail($request->id);
         $compromisos->update($request->all());

      Alert::success('', 'El compromisos ha sido editado con exito !')->persistent('Close');
      return redirect()->route('compromisos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\compromisos  $compromisos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $compromisos = compromisos::find($id);
        $compromisos->delete();
        \Alert::success('', 'El compromisos ha sido sido borrado de forma exita!')->persistent('Close');
        return redirect()->route('compromisos.index');
    }
}
