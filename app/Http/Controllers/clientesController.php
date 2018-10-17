<?php

namespace App\Http\Controllers;

use App\clientes;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Alert;
use App\User;
use App\compromisos;
use App\compromisos_cliente;
use Illuminate\Support\Facades\Auth;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

//use App\clientes;
use App\periodo;

class clientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
$cliente = clientes::Search($request->nombre)->orderBy('activo_cliente', 'desc')->orderBy('nombre_cliente', 'asc')->paginate(10);
         $usuarios = User::where('perfil_usuario',2)->pluck('name', 'id');
         $clientes = clientes::pluck('nombre_cliente', 'id');
        $compromisos = compromisos::pluck('descripcion_compromisos', 'id');
        $periodo = periodo::pluck('descripcion_periodo', 'id');
        $compromisos_clientes = compromisos_cliente::all();
        $id=null;
         //dd($compromisos_clientes );

        //$cliente = DB::table('cliente')->paginate(15);
        //dd($cliente);
   return view('cliente.index',compact('cliente','usuarios','clientes','compromisos','periodo','compromisos_clientes','id'));

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
        abort(500, 'Unauthorized action.');
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
