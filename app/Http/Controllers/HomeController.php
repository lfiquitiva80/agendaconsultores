<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\User;
use App\perfil;
use App\citas;
use App\lugar;
use App\clientes;
use App\actividad;
use App\estado_cita;
use App\jornada;
use App\compromisos;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
         $citas = citas::all();
         $lugar = lugar::pluck('descripcion_lugar', 'id');
         if (Auth::user()->perfil_usuario == 1 || Auth::user()->habilitar_empresas == 1) {
        $clientes = clientes::where('activo_cliente', 1)
        ->orderBy('nombre_cliente', 'asc')
        ->pluck('nombre_cliente', 'id');
    } else {
        $clientes = clientes::where([['responsable_cliente','=',Auth::user()->id],['activo_cliente','=', 1],])
            ->orderBy('nombre_cliente', 'asc')
            ->pluck('nombre_cliente', 'id');
    }
         $usuarios = User::where('perfil_usuario',2)->orderBy('name', 'asc')->pluck('name', 'id');
         $actividad_citas = actividad::where('tipo','["1"]')->orWhere('tipo','["1","2"]')
         ->orderBy('descripcion_actividad', 'asc')
         ->pluck('descripcion_actividad', 'id');
         $estado_citas = estado_cita::pluck('Estado', 'id');
         $jornada = jornada::pluck('descripcion_jornada', 'id');
         $compromisos = compromisos::pluck('descripcion_compromisos', 'id');

         $date= Carbon::now();

        $citas2 = \DB::table('citas')
    ->where([
    ['actividad_citas','=','["17"]'],
    ['usuario_citas','=', Auth::user()->id],
    ['fecha_citas','=', $date->format('Y-m-d')],
    ])->get();

    //dd($citas2);
    // $ip= Auth::user()->name. "Dirección Ip =>  ". $_SERVER['REMOTE_ADDR'];

    //    if (count($citas2)==0 && Auth::user()->perfil_usuario==2) {
    //            $citas = new citas;
    //             $citas->fecha_citas=$date;
    //             $citas->lugar_citas=1;
    //             $citas->observacion_citas=$ip;
    //             $citas->empresa_citas=117;
    //             $citas->jornada_citas=1;
    //             $citas->hora_citas=Carbon::now()->format('H:i');
    //             $citas->usuario_citas=Auth::user()->id;
    //             $citas->hora_final_citas=Carbon::now()->format('H:i');
    //             $citas->hora_citas=Carbon::now()->format('H:i');
    //             $citas->actividad_citas='["17"]';
    //             $citas->estado_citas=1;
    //             $citas->compromiso_citas='["3","5","6","17","20","21","22"]';
    //     // ...

    //     $citas->save();
    //      } else {
    //         Log::info(Auth::user()->name. " ya esta registrada el inicio de Sesión");
    //      }



         Log::info(Auth::user()->name. " Ingreso al sistema - Agenda");


        return view('home',compact('citas','lugar','clientes','usuarios','actividad_citas','estado_citas','jornada','compromisos'));
    }

    public function agendaconsultor()
    {
         $citas = citas::all();
         $lugar = lugar::pluck('descripcion_lugar', 'id');
         if (Auth::user()->perfil_usuario == 1) {
        $clientes = clientes::where('activo_cliente', 1)
        ->orderBy('nombre_cliente', 'asc')
        ->pluck('nombre_cliente', 'id');
    } else {
        $clientes = clientes::where([['responsable_cliente','=',Auth::user()->id],['activo_cliente','=', 1],])
            ->orderBy('nombre_cliente', 'asc')
            ->pluck('nombre_cliente', 'id');
    }
         $usuarios = User::where('perfil_usuario',2)->orderBy('name', 'asc')->pluck('name', 'id');
         $actividad_citas = actividad::where('tipo','["1"]')->orWhere('tipo','["1","2"]')
         ->orderBy('descripcion_actividad', 'asc')
         ->pluck('descripcion_actividad', 'id');
         $estado_citas = estado_cita::pluck('Estado', 'id');
         $jornada = jornada::pluck('descripcion_jornada', 'id');
         $compromisos = compromisos::pluck('descripcion_compromisos', 'id');

    //      $date= Carbon::now();

    //     $citas2 = \DB::table('citas')
    // ->where([
    // ['actividad_citas','=','["17"]'],
    // ['usuario_citas','=', Auth::user()->id],
    // ['fecha_citas','=', $date->format('Y-m-d')],
    // ])->get();

    // //dd($citas2);
    // $ip= Auth::user()->name. "Dirección Ip =>  ". $_SERVER['REMOTE_ADDR'];

    //    if (count($citas2)==0 && Auth::user()->perfil_usuario==2) {
    //            $citas = new citas;
    //             $citas->fecha_citas=$date;
    //             $citas->lugar_citas=1;
    //             $citas->observacion_citas=$ip;
    //             $citas->empresa_citas=117;
    //             $citas->jornada_citas=1;
    //             $citas->hora_citas=Carbon::now()->format('H:i');
    //             $citas->usuario_citas=Auth::user()->id;
    //             $citas->hora_final_citas=Carbon::now()->format('H:i');
    //             $citas->hora_citas=Carbon::now()->format('H:i');
    //             $citas->actividad_citas='["17"]';
    //             $citas->estado_citas=1;
    //             $citas->compromiso_citas='["3","5","6","17","20","21","22"]';
    //     // ...

    //     $citas->save();
    //      } else {
    //         Log::info(Auth::user()->name. " ya esta registrada el inicio de Sesión");
    //      }



         Log::info(Auth::user()->name. " Ingreso al sistema - Agenda");


        return view('agendaconsultor',compact('citas','lugar','clientes','usuarios','actividad_citas','estado_citas','jornada','compromisos'));
    }

    public function adminitradordearchivos()
    {
        return view('filemanager.adminitradordearchivos');
    }

    public function info()

    {

        $citas = citas::all();
         $lugar = lugar::pluck('descripcion_lugar', 'id');
         if (Auth::user()->perfil_usuario == 1) {
        $clientes = clientes::where('activo_cliente', 1)
        ->orderBy('nombre_cliente', 'asc')
        ->pluck('nombre_cliente', 'id');
    } else {
        $clientes = clientes::where([['responsable_cliente','=',Auth::user()->id],['activo_cliente','=', 1],])
            ->orderBy('nombre_cliente', 'asc')
            ->pluck('nombre_cliente', 'id');
    }
         $usuarios = User::where('perfil_usuario',2)->orderBy('name', 'asc')->pluck('name', 'id');
         $actividad_citas = actividad::where('tipo','["1"]')->orWhere('tipo','["1","2"]')
         ->orderBy('descripcion_actividad', 'asc')
         ->pluck('descripcion_actividad', 'id');
         $estado_citas = estado_cita::pluck('Estado', 'id');
         $jornada = jornada::pluck('descripcion_jornada', 'id');
         $compromisos = compromisos::pluck('descripcion_compromisos', 'id');

        return view('citas.iniciosesion',compact('citas','lugar','clientes','usuarios','actividad_citas','estado_citas','jornada','compromisos'));
    }
}
