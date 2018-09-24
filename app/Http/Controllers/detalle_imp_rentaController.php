<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detalle_imp_renta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\User;
use App\perfil;
use Alert;


class detalle_imp_rentaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $detalle_imp_renta = detalle_imp_renta::Search($request->nombre)->orderBy('cns_detalle', 'asc')->paginate(50);
         $usuarios = User::where('perfil_usuario',2)->pluck('name', 'id');
         //dd($detalle_imp_renta);

        //$cliente = DB::table('cliente')->paginate(15);
        //dd($cliente);
   return view('detalle_imp_renta.index',compact('detalle_imp_renta','usuarios'));
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
        $detalle_imp_renta =  new detalle_imp_renta($request-> all());
        $detalle_imp_renta->save();
        \Alert::success('', 'El detalle_imp_renta ha sido registrado con exito !')->persistent('Close');
         //return redirect()->route('detalle_imp_renta.index');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\detalle_imp_renta  $detalle_imp_renta
     * @return \Illuminate\Http\Response
     */
    public function show(detalle_imp_renta $detalle_imp_renta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\detalle_imp_renta  $detalle_imp_renta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {

        //dd($id);
        $detalle_imp_renta = detalle_imp_renta::where('cns_detalle',$id)->get();
         $usuarios = User::where('perfil_usuario',2)->pluck('name', 'id');

         return view('detalle_imp_renta.detalle',compact('detalle_imp_renta','usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\detalle_imp_renta  $detalle_imp_renta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detalle_imp_renta $id)
    {
           //dd($request->all());  

         $detalle_imp_renta = detalle_imp_renta::findOrFail($request->id);
         $detalle_imp_renta->update($request->all());

      Alert::success('', 'El detalle_imp_renta ha sido editado con exito !')->persistent('Close');
      //return redirect()->route('detalle_imp_renta.index');
      return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\detalle_imp_renta  $detalle_imp_renta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalle_imp_renta = detalle_imp_renta::find($id);
        $detalle_imp_renta->delete();
        \Alert::success('', 'El detalle_imp_renta ha sido sido borrado de forma exita!')->persistent('Close');
        return redirect()->route('detalle_imp_renta.index');
    }
}
