<?php

namespace App\Http\Controllers;

use App\pago_cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\User;
use App\clientes;
use App\perfil;
use Alert;


class pago_clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pago_cliente = pago_cliente::Search($request->nombre)->paginate(50);
         $usuarios = User::where('perfil_usuario',2)->pluck('name', 'id');
          $id=null;
         //dd($perfil);

        //$cliente = DB::table('cliente')->paginate(15);
        //dd($cliente);
         $clientes = clientes::pluck('nombre_cliente', 'id');
   return view('pago_cliente.index',compact('pago_cliente','usuarios','clientes','id'));
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
        $pago_cliente =  new pago_cliente($request-> all());
        $pago_cliente->save();
        \Alert::success('', 'El pago_cliente ha sido registrado con exito !')->persistent('Close');
         return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pago_cliente  $pago_cliente
     * @return \Illuminate\Http\Response
     */
    public function show(pago_cliente $pago_cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pago_cliente  $pago_cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pago_cliente= pago_cliente::where('cliente_pago',$id)->get();

        
         $clientes = clientes::pluck('nombre_cliente', 'id');

       
      
         
         Log::info('El usuario '. \Auth::user()->name .' ingreso a editar el pago cliente');
        //dd($eventosg);
        return view('pago_cliente.pagos', compact('pago_cliente','usuarios','clientes','compromisos','periodo','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pago_cliente  $pago_cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pago_cliente $id)
    {
         $pago_cliente = pago_cliente::findOrFail($request->id);
         $pago_cliente->update($request->all());

      Alert::success('', 'El pago_cliente ha sido editado con exito !')->persistent('Close');
      return redirect()->route('pago_cliente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pago_cliente  $pago_cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pago_cliente = pago_cliente::find($id);
        $pago_cliente->delete();
        \Alert::success('', 'El pago_cliente ha sido sido borrado de forma exita!')->persistent('Close');
        return redirect()->route('pago_cliente.index');
    }
}
