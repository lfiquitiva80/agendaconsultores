<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detalle_imp_ica;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\User;
use App\perfil;
use Alert;

class detalle_imp_icaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $detalle_imp_ica = detalle_imp_ica::Search($request->nombre)->orderBy('cns_detalle', 'asc')->paginate(50);
         $usuarios = User::where('perfil_usuario',2)->pluck('name', 'id');
         //dd($detalle_imp_ica);

        //$cliente = DB::table('cliente')->paginate(15);
        //dd($cliente);
   return view('detalle_imp_ica.index',compact('detalle_imp_ica','usuarios'));
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
        $detalle_imp_ica =  new detalle_imp_ica($request-> all());
        $detalle_imp_ica->save();
        \Alert::success('', 'El detalle_imp_ica ha sido registrado con exito !')->persistent('Close');
         //return redirect()->route('detalle_imp_ica.index');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\detalle_imp_ica  $detalle_imp_ica
     * @return \Illuminate\Http\Response
     */
    public function show(detalle_imp_ica $detalle_imp_ica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\detalle_imp_ica  $detalle_imp_ica
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {

        //dd($id);
        $detalle_imp_ica = detalle_imp_ica::where('cns_detalle',$id)->get();
         $usuarios = User::where('perfil_usuario',2)->pluck('name', 'id');

         return view('detalle_imp_ica.detalle',compact('detalle_imp_ica','usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\detalle_imp_ica  $detalle_imp_ica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detalle_imp_ica $id)
    {
           //dd($request->all());  

         $detalle_imp_ica = detalle_imp_ica::findOrFail($request->id);
         $detalle_imp_ica->update($request->all());

      Alert::success('', 'El detalle_imp_ica ha sido editado con exito !')->persistent('Close');
      //return redirect()->route('detalle_imp_ica.index');
      return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\detalle_imp_ica  $detalle_imp_ica
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalle_imp_ica = detalle_imp_ica::find($id);
        $detalle_imp_ica->delete();
        \Alert::success('', 'El detalle_imp_ica ha sido sido borrado de forma exita!')->persistent('Close');
        return redirect()->route('detalle_imp_ica.index');
    }
}
