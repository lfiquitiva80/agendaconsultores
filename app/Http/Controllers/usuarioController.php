<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\User;
use App\cargo;
use App\perfil;
use Alert;


class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $usuario =User::search($request->name)->orderBy('activo', 'desc')->orderBy('name', 'asc')->paginate(10);

        $perfil = perfil::pluck('descripcion_perfil','id');
        $cargo = cargo::pluck('descripcion_cargo','id');
      

       
         return view('usuario.index',compact('usuario','perfil','cargo'));


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
          
          $json = json_encode($request->input('cargo'), true);

          $this->validate($request,[
            'name'     => 'required|max:255',
            'username' => 'sometimes|required|max:255|unique:users',
            'email'    => 'required|email|max:255|unique:users',
            //'password' => 'required|min:6|confirmed',
            
        ]);

          $input = [
            'name'     => $request['name'],
            'email'    => $request['email'],
            'password' => bcrypt($request['password']),
             'cargo'    => $json,
             'activo'    => $request['activo'],
             'perfil_usuario' => $request['perfil_usuario'],
             'valor' => $request['valor'],
             'horas' => $request['horas'],
            ];
            
        
        $createuser=User::create($input);
        //dd($createuser);
        Alert::success('', 'el usuario ha sido registrado con exito !')->persistent('Close');
        return redirect()->route('usuario.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $usuario = User:: find($id);

          return view('escolta.edit',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         
         $json = json_encode($request->input('cargo'), true);
          $input = [
            'name'     => $request['name'],
            'email'    => $request['email'],
            'password' => bcrypt($request['password']),
             'perfil_usuario'    => $request['perfil_usuario'],
             'cargo'    => $json,
             'activo'    => $request['activo'],
             'perfil_usuario' => $request['perfil_usuario'],
             'valor' => $request['valor'],
             'horas' => $request['horas'],
            ];

           // dd($request->all());

               
        $updates=DB::table('users')->where('id',"=",$request['id'])->update($input);
         //dd($updates);
      Alert::success('', 'el usuario ha sido editado con exito !')->persistent('Close');
      return redirect()->route('usuario.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $usuario = User::find($id);
       $usuario->delete();
         Alert::success('', 'el usuario ha sido sido borrado de forma exita!')->persistent('Close');
         return redirect()->route('usuario.index');
    }


    public function export() 
    {
        return \Excel::download(new UsersExport, 'Usuarios.xlsx');
    }
}
