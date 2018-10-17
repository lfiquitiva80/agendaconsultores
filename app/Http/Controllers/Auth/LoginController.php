<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers {
        attemptLogin as attemptLoginAtAuthenticatesUsers;
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/iniciosesion';

        protected function redirectTo()
            {

    $date= Carbon::now();

        $citas2 = \DB::table('citas')
    ->where([
     ['actividad_citas','=','["17"]'],
     ['usuario_citas','=', Auth::user()->id],
     ['fecha_citas','=', $date->format('Y-m-d')],
     ])->get();

  $ip= Auth::user()->name. "Dirección Ip =>  ". $_SERVER['REMOTE_ADDR'];   
Log::info(Auth::user()->name. " Ingreso al modulo de registro de Sesión ".$ip);
     

       if ($citas2->count() == 0 && Auth::user()->perfil_usuario == 2) {

        Log::info(Auth::user()->name. " Ingreso al modulo de registro de Sesión");
        return '/iniciosesion';
        //        $citas = new citas;

        // // ...

        // $citas->save();
         } else {
            return '/home';
            Log::info(Auth::user()->name. " ya esta registrada el inicio de Sesión");
         }

                // $evaluadores = evaluadores::where('id_users', \Auth::user()->id)->first();
                // if (\Auth::user()->TipoUsers==0 && empty($evaluadores->Cedula) || \Auth::user()->TipoUsers==0 && empty($evaluadores->Ciudad_expedicion) || \Auth::user()->TipoUsers==0 && empty($evaluadores->Telefono))
                //     {
                //   return '/informacion';
                // } else {
                    
                //     return '/home';
                // }

        }        

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Returns field name to use at login.
     *
     * @return string
     */
    public function username()
    {
        return config('auth.providers.users.field','email');
    }

    /**
     * Attempt to log the user into the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {
        if ($this->username() === 'email') return $this->attemptLoginAtAuthenticatesUsers($request);
        if ( ! $this->attemptLoginAtAuthenticatesUsers($request)) {
            return $this->attempLoginUsingUsernameAsAnEmail($request);
        }
        return false;
    }

    /**
     * Attempt to log the user into application using username as an email.
     *
     * @param \Illuminate\Http\Request $request
     * @return bool
     */
    protected function attempLoginUsingUsernameAsAnEmail(Request $request)
    {
        return $this->guard()->attempt(
            ['email' => $request->input('username'), 'password' => $request->input('password')],
            $request->has('remember'));
    }


}
