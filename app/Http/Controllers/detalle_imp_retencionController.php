<?php

namespace App\Http\Controllers;

use App\detalle_imp_retencion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\User;
use App\perfil;
use Alert;


class detalle_imp_retencionController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $detalle_imp_retencion = detalle_imp_retencion::Search($request->nombre)->orderBy('cns_detalle', 'asc')->paginate(50);
         $usuarios = User::where('perfil_usuario',2)->pluck('name', 'id');
         //dd($detalle_imp_retencion);

        //$cliente = DB::table('cliente')->paginate(15);
        //dd($cliente);
   return view('detalle_imp_retencion.index',compact('detalle_imp_retencion','usuarios'));
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
        $detalle_imp_retencion =  new detalle_imp_retencion($request-> all());
        $detalle_imp_retencion->save();
        \Alert::success('', 'El detalle_imp_retencion ha sido registrado con exito !')->persistent('Close');
        // return redirect()->route('detalle_imp_retencion.index');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\detalle_imp_retencion  $detalle_imp_retencion
     * @return \Illuminate\Http\Response
     */
    public function show(detalle_imp_retencion $detalle_imp_retencion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\detalle_imp_retencion  $detalle_imp_retencion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {

        //dd($id);
        $detalle_imp_retencion = detalle_imp_retencion::where('cns_detalle',$id)->get();
         $usuarios = User::where('perfil_usuario',2)->pluck('name', 'id');

         return view('detalle_imp_retencion.detalle',compact('detalle_imp_retencion','usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\detalle_imp_retencion  $detalle_imp_retencion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detalle_imp_retencion $id)
    {
           //dd($request->all());

         $detalle_imp_retencion = detalle_imp_retencion::findOrFail($request->id);
         $detalle_imp_retencion->update($request->all());

    //  Alert::success('', 'El detalle_imp_retencion ha sido editado con exito !')->persistent('Close');
      //return redirect()->route('detalle_imp_retencion.index');
      return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\detalle_imp_retencion  $detalle_imp_retencion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalle_imp_retencion = detalle_imp_retencion::find($id);
        $detalle_imp_retencion->delete();
        \Alert::success('', 'El detalle_imp_retencion ha sido sido borrado de forma exita!')->persistent('Close');
        return redirect()->route('detalle_imp_retencion.index');
    }
}
