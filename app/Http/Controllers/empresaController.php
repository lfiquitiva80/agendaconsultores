<?php

namespace App\Http\Controllers;

use App\empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\User;
use App\perfil;
use Alert;
use carbon\Carbon;

class empresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $empresa = empresa::Search($request->nombre)->orderBy('razon_social', 'asc')->paginate(10);
        //dd($empresa);
         $usuarios = User::where('perfil_usuario',2)->pluck('name', 'id');
         //dd($perfil);

        //$cliente = DB::table('cliente')->paginate(15);
        //dd($cliente);
   return view('empresa.index',compact('empresa','usuarios'));
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

    if ($request->hasFile('logo')) {


        $nombre=$request->logo->getClientOriginalName();
        $dt = Carbon::now();
       $ruta = "/archivos/".Storage::disk('local')->putFileAs('avatar', $request->file('logo'), $nombre);

    }
    else
    {
        
        $ruta='img/empresa.jpg';
    }

          $input = [
            'razon_social'     => $request['razon_social'],
                'nit'    => $request['nit'],
            'direccion' => $request['direccion'],
             'telefono'    => $request['telefono'],
             'pais'    => $request['pais'],
             'ciudad' => $request['ciudad'],
             'celular' => $request['celular'],
             'contacto' => $request['contacto'],
             'logo' => $ruta,
            ];
            
        
        $empresa=empresa::create($input);

        \Alert::success('', 'El empresa ha sido registrado con exito !')->persistent('Close');
         return redirect()->route('empresa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(empresa $empresa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, empresa $id)
    {
        
        $empresa = empresa::findOrFail($request->id);


        if ($request->hasFile('logo')) {


        $nombre=$request->logo->getClientOriginalName();
        $dt = Carbon::now();
       $ruta = "/archivos/".Storage::disk('local')->putFileAs('avatar', $request->file('logo'), $nombre);

    }
    else
    {
        
        $ruta=$empresa->logo;
    }

          $input = [
            'razon_social'     => $request['razon_social'],
                'nit'    => $request['nit'],
            'direccion' => $request['direccion'],
             'telefono'    => $request['telefono'],
             'pais'    => $request['pais'],
             'ciudad' => $request['ciudad'],
             'celular' => $request['celular'],
             'contacto' => $request['contacto'],
             'logo' => $ruta,
            ];

             $updates=DB::table('empresa')->where('id',"=",$request['id'])->update($input);
            

      Alert::success('', 'El empresa ha sido editado con exito !')->persistent('Close');
      return redirect()->route('empresa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empresa = empresa::find($id);
        $empresa->delete();
        \Alert::success('', 'El empresa ha sido sido borrado de forma exita!')->persistent('Close');
        return redirect()->route('empresa.index');
    }
}
