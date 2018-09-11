<?php

namespace App\Http\Controllers;

use App\compromisos_cliente;
use Illuminate\Http\Request;
use App\compromisos;
use App\clientes;
use App\periodo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\User;
use App\perfil;
use Alert;

class compromisosclientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $compromisos_clientes = compromisos_cliente::Search($request->nombre)->orderBy('id_empresa', 'asc')->paginate(10);
         $usuarios = User::where('perfil_usuario',2)->pluck('name', 'id');
         $clientes = clientes::pluck('nombre_cliente', 'id');
        $compromisos = compromisos::pluck('descripcion_compromisos', 'id');
        $periodo = periodo::pluck('descripcion_periodo', 'id');
         //dd($perfil);

        //$cliente = DB::table('cliente')->paginate(15);
        //dd($cliente);
   return view('compromisoscliente.index',compact('compromisos_clientes','usuarios','clientes','compromisos','periodo'));
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
        //dd($request->all());
        //$json = json_encode($request->input('id_empresa'), true);
        //dd($json);
        $compromisos = new compromisos_cliente;
        $compromisos->id_empresa=$request->input('id_empresa');
        $compromisos->id_compromiso=$request->input('id_compromiso');
        $compromisos->id_periodo=$request->input('id_periodo');
        $compromisos->save();

        // $compromisos_cliente =  new compromisos_cliente($request-> all());
        // $compromisos_cliente->save();
        \Alert::success('', 'El compromisos_cliente ha sido registrado con exito !')->persistent('Close');
         return redirect()->route('compromisoscliente.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\compromisos_cliente  $compromisos_cliente
     * @return \Illuminate\Http\Response
     */
    public function show(compromisos_cliente $compromisos_cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\compromisos_cliente  $compromisos_cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(compromisos_cliente $compromisos_cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\compromisos_cliente  $compromisos_cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, compromisos_cliente $id)
    {
         
            $json = json_encode($request->input('id_empresa'), true);
        //dd($json);
        $compromisos = compromisos_cliente::findOrFail($request->id);
        $compromisos->id_empresa=$json;
        $compromisos->id_compromiso=$request->input('id_compromiso');
        $compromisos->id_periodo=$request->input('id_periodo');
        $compromisos->save();

         // $compromisos_cliente = compromisos_cliente::findOrFail($request->id);
         // $compromisos_cliente->update($request->all());

      Alert::success('', 'El compromisos_cliente ha sido editado con exito !')->persistent('Close');
      return redirect()->route('compromisoscliente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\compromisos_cliente  $compromisos_cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $compromisos_cliente = compromisos_cliente::find($id);
        $compromisos_cliente->delete();
        \Alert::success('', 'El compromisos_cliente ha sido sido borrado de forma exita!')->persistent('Close');
        return redirect()->route('compromisoscliente.index');
    }
}
