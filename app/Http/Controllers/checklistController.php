<?php

namespace App\Http\Controllers;

use App\checklist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Alert;
use App\User;
use App\compromisos;
use App\compromisos_cliente;
use Illuminate\Support\Facades\Auth;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\perfil;
use App\clientes;


use App\periodo;

class checklistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $checklist = checklist::Search($request->nombre)->orderBy('descripcion', 'desc')->paginate(10);

        $usuarios = User::where('perfil_usuario',2)->pluck('name', 'id');
        $auditor = User::where('perfil_usuario',3)->pluck('name', 'id');
        $clientes = clientes::pluck('nombre_cliente', 'id');
        $compromisos = compromisos::pluck('descripcion_compromisos', 'id');
        $periodo = periodo::pluck('descripcion_periodo', 'id');
        $compromisos_clientes = compromisos_cliente::all();

        return view('checklist.index',compact('checklist','usuarios','compromisos','periodo','compromisos_clientes','clientes','auditor'));
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
        $checklist =  new checklist($request-> all());
        $checklist->save();
        \Alert::success('', 'El checklist ha sido registrado con exito !')->persistent('Close');
         return redirect()->route('checklist.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\checklist  $checklist
     * @return \Illuminate\Http\Response
     */
    public function show(checklist $checklist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\checklist  $checklist
     * @return \Illuminate\Http\Response
     */
    public function edit(checklist $checklist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\checklist  $checklist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, checklist $id)
    {
         $checklist = checklist::findOrFail($request->id);
         $checklist->update($request->all());

      Alert::success('', 'El checklist ha sido editado con exito !')->persistent('Close');
      return redirect()->route('checklist.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\checklist  $checklist
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $checklist = checklist::find($id);
        $checklist->delete();
        \Alert::success('', 'El checklist ha sido sido borrado de forma exita!')->persistent('Close');
        return redirect()->route('checklist.index');
    }
}
