<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\User;
use App\cargo;
use App\perfil;
use App\clientes;
use Alert;
use Carbon\Carbon;

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
        $clientes = clientes::orderBy('nombre_cliente','asc')->pluck('nombre_cliente', 'id');



         return view('usuario.index',compact('usuario','perfil','cargo','clientes'));


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
          $json = json_encode($request->input('cargo'), true);

          $this->validate($request,[
            'name'     => 'required|max:255',
            'username' => 'sometimes|required|max:255|unique:users',
            'email'    => 'required|email|max:255|unique:users',
            //'password' => 'required|min:6|confirmed',

        ]);


             if ($request->hasFile('avatar')) {


        $nombre=$request->avatar->getClientOriginalName();
        $dt = Carbon::now();
       $ruta = "/archivos/".Storage::disk('local')->putFileAs('avatar', $request->file('avatar'), $nombre);

    }
    else
    {

        $ruta='img/default.jpg';
    }

          $input = [
            'name'     => $request['name'],
            'email'    => $request['email'],
            'password' => bcrypt($request['password']),
             'cargo'    => $json,
             'activo'    => $request['activo'],
             'perfil_usuario' => $request['perfil_usuario'],
             'valor' => $request['valor'],
             'horas' => $request['horas'],
             'avatar' => $ruta,
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

            $usuarioupdate=DB::table('users')->where('id',"=",$request->id)->first();
            //dd($usuarioupdate);
                if ($request->hasFile('avatar')) {


        $nombre=$request->avatar->getClientOriginalName();
        $dt = Carbon::now();
       $ruta = "/archivos/".Storage::disk('local')->putFileAs('avatar', $request->file('avatar'), $nombre);

    }
    else
    {

        $ruta=$usuarioupdate->avatar;
    }


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
             'avatar' => $ruta,
             'habilitar_empresas' => $request['habilitar_empresas'],
            ];

           //dd($request->all());


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

    public function profile(Request $request)
    {

        $usuario=DB::table('users')->where('id',"=",$request->id)->first();


                      if ($request->hasFile('avatar')) {


        $nombre=$request->avatar->getClientOriginalName();
        $dt = Carbon::now();
       $ruta = "/archivos/".Storage::disk('local')->putFileAs('avatar', $request->file('avatar'), $nombre);

    }
    else
    {

        $ruta=$usuario->avatar;
    }

         $input = [
            'name'     => $request['name'],
            'password' => bcrypt($request['password']),
            'avatar' => $ruta,
            'notificacion'     => $request['notificacion'],
            ];

               $updates=DB::table('users')->where('id',"=",$request['id'])->update($input);
         //dd($updates);
      Alert::success('', 'el Perfil ha sido editado con exito !')->persistent('Close');


        //dd($usuario);
        return back();
    }
}
