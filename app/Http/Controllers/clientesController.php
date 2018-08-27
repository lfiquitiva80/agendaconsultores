<?php

namespace App\Http\Controllers;

use App\clientes;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Alert;
use App\User;
class clientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $cliente = clientes::Search($request->nombre)->orderBy('nombre_cliente', 'asc')->paginate(10);
         $usuarios = User::where('perfil_usuario',2)->pluck('name', 'id');
         //dd($usuarios);

        //$cliente = DB::table('cliente')->paginate(15);
        //dd($cliente);
   return view('cliente.index',compact('cliente','usuarios'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $Clientes =  new clientes($request-> all());
        $Clientes->save();
        Alert::success('', 'el cliente ha sido registrado con exito !')->persistent('Close');
         return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit(clientes $clientes)
    {
        $Cliente = clientes::find($id);
        return view('cliente.edit',compact('$Cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $Cliente = clientes::findOrFail($request->id);
         $Cliente->update($request->all());

      Alert::success('', 'el cliente ha sido editado con exito !')->persistent('Close');
      return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $Cliente = clientes::find($id);
          $Cliente->delete();
            Alert::success('', 'el cliente ha sido sido borrado de forma exita!')->persistent('Close');
            return redirect()->route('clientes.index');
    }
}
