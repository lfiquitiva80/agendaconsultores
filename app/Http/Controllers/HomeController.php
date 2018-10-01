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
         if (Auth::user()->perfil_usuario == 1) {
        $clientes = clientes::pluck('nombre_cliente', 'id');
    } else {
        $clientes = clientes::where('responsable_cliente',Auth::user()->id)->pluck('nombre_cliente', 'id');
    }
         $usuarios = User::where('perfil_usuario',2)->pluck('name', 'id');
         $actividad_citas = actividad::where('tipo',1)->orWhere('tipo','["1","2"]')->pluck('descripcion_actividad', 'id');
         $estado_citas = estado_cita::pluck('Estado', 'id');
         $jornada = jornada::pluck('descripcion_jornada', 'id');
         $compromisos = compromisos::pluck('descripcion_compromisos', 'id');
        
        return view('home',compact('citas','lugar','clientes','usuarios','actividad_citas','estado_citas','jornada','compromisos'));
    }
}