<?php

namespace App\Http\Controllers;

use App\detalle_informe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\User;
use App\perfil;
use Alert;

class detalle_informeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $detalle_informe = detalle_informe::Search($request->nombre)->orderBy('cns_detalle', 'asc')->paginate(50);
         $usuarios = User::where('perfil_usuario',2)->pluck('name', 'id');
         //dd($detalle_informe);

        //$cliente = DB::table('cliente')->paginate(15);
        //dd($cliente);
   return view('detalle_informe.index',compact('detalle_informe','usuarios'));
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
        $detalle_informe =  new detalle_informe($request-> all());
        $detalle_informe->save();
        \Alert::success('', 'El detalle_informe ha sido registrado con exito !')->persistent('Close');
         //return redirect()->route('detalle_informe.index');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\detalle_informe  $detalle_informe
     * @return \Illuminate\Http\Response
     */
    public function show(detalle_informe $detalle_informe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\detalle_informe  $detalle_informe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {

        //dd($id);
        $detalle_informe = detalle_informe::where('cns_detalle',$id)->get();
         $usuarios = User::where('perfil_usuario',2)->pluck('name', 'id');

         return view('detalle_informe.detalle',compact('detalle_informe','usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\detalle_informe  $detalle_informe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detalle_informe $id)
    {
           //dd($request->all());  

         $detalle_informe = detalle_informe::findOrFail($request->id);
         $detalle_informe->update($request->all());

      Alert::success('', 'El detalle_informe ha sido editado con exito !')->persistent('Close');
      //return redirect()->route('detalle_informe.index');
      return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\detalle_informe  $detalle_informe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalle_informe = detalle_informe::find($id);
        $detalle_informe->delete();
        \Alert::success('', 'El detalle_informe ha sido sido borrado de forma exita!')->persistent('Close');
        return redirect()->route('detalle_informe.index');
    }
}
