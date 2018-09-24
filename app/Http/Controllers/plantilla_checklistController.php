<?php

namespace App\Http\Controllers;

use App\plantilla_checklist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\User;
use App\perfil;
use Alert;

class plantilla_checklistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $plantilla_checklist = plantilla_checklist::Search($request->nombre)->orderBy('codigo_plantilla_checklist', 'asc')->paginate(10);
         $usuarios = User::where('perfil_usuario',2)->pluck('name', 'id');
         //dd($perfil);

        //$cliente = DB::table('cliente')->paginate(15);
        //dd($cliente);
   return view('plantilla_checklist.index',compact('plantilla_checklist','usuarios'));
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
        $plantilla_checklist =  new plantilla_checklist($request-> all());
        $plantilla_checklist->save();
        \Alert::success('', 'El plantilla_checklist ha sido registrado con exito !')->persistent('Close');
         return redirect()->route('plantilla_checklist.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\plantilla_checklist  $plantilla_checklist
     * @return \Illuminate\Http\Response
     */
    public function show(plantilla_checklist $plantilla_checklist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\plantilla_checklist  $plantilla_checklist
     * @return \Illuminate\Http\Response
     */
    public function edit(plantilla_checklist $plantilla_checklist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\plantilla_checklist  $plantilla_checklist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, plantilla_checklist $id)
    {
         $plantilla_checklist = plantilla_checklist::findOrFail($request->id);
         $plantilla_checklist->update($request->all());

      Alert::success('', 'El plantilla_checklist ha sido editado con exito !')->persistent('Close');
      return redirect()->route('plantilla_checklist.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\plantilla_checklist  $plantilla_checklist
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plantilla_checklist = plantilla_checklist::find($id);
        $plantilla_checklist->delete();
        \Alert::success('', 'El plantilla_checklist ha sido sido borrado de forma exita!')->persistent('Close');
        return redirect()->route('plantilla_checklist.index');
    }
}
