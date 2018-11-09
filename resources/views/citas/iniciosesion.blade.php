<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <title> </title>

                    <!-- Latest compiled and minified CSS & JS -->
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
                    <script src="//code.jquery.com/jquery.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
                </head>
                <body id="registro_home">

                </body>
                </html>

                 <script>
  $(document).ready(function()
  {
    // id de nuestro modal
    $("#iniciosesion").modal("show");
  });
  </script>




<div class="modal fade" id="iniciosesion" class="btn btn-info">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               <!--  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
                <h4 class="modal-title">REGISTRO INICIO SESION</h4>
            </div>
            <div class="modal-body">


{!! Form::open(['route' => 'sesiones', 'method'=>'POST','id'=>'CreateFormSesion']) !!}

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
   <div class="form-group" >
        <label for="id">fecha</label>
        {!! Form::date('fecha_citas', \Carbon\Carbon::now(),['class' => 'form-control', 'placeholder' => 'fecha_citas','name'=>'fecha_citas','id'=>'fecha_citas','readonly']) !!}
    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
 <div class="form-group" >
    <label for="id">Hora</label>
    {{ Form::time('hora_citas', Carbon\Carbon::now()->format('H:i'),['class' => 'form-control', 'placeholder' => 'Hora_citas','name'=>'hora_citas','readonly']) }}

</div>


</div>

<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
 <div class="form-group" >
    <label for="id">hora_final</label>
    {{ Form::time('hora_final_citas', Carbon\Carbon::now()->format('H:i'),['class' => 'form-control', 'placeholder' => 'hora_final_citas','name'=>'hora_final_citas','readonly']) }}

</div>


</div>

</div>

<div class="form-group">
    <label for="id">lugar</label>
    {!! Form::select('lugar_citas', $lugar, null, ['class' => 'form-control', 'placeholder' => 'Seleccione el Lugar de la cita... ','name'=>'lugar_citas','required']) !!}


</div>



<div class="form-group">
    <label for="id">empresa</label>
    {!! Form::select('empresa_citas', $clientes, null, ['class' => 'form-control', 'placeholder' => 'Seleccione la Empresa... ','name'=>'empresa_citas','id'=>'empresa_citas2','required']) !!}

</div>

<!-- <div class="form-group">
                <label for="id">asistio_citas</label>
                {!! Form::select('asistio_citas',['1'=>'Si', '0' =>'No'],null,['class'=> 'form-control','id' => 'asistio_citas','name'=>'asistio_citas'] )!!}
</div> -->

<div class="form-group">
    <label for="id">usuario</label>
    @if (Auth::user()->perfil_usuario == 1)
    <label for="id">usuario</label>
    {!! Form::select('usuario_citas', $usuarios, null, ['class' => 'form-control', 'placeholder' => 'Seleccione el usuario... ','name'=>'usuario_citas','id'=>'usuario_citas']) !!}
    @else
    <label for="id">usuario</label>
    <select name="usuario_citas" id="usuario_citas" class="form-control">
        <option value="{{Auth::user()->id}}">{{Auth::user()->name}}</option>
    </select>

    @endif

</div>

<!-- <div class="form-group">
    <label for="id">jornada</label>

    {!! Form::select('jornada_citas', $jornada, 1, ['class' => 'form-control', 'placeholder' => 'Seleccione la actividad... ','name'=>'jornada_citas','readonly']) !!}

</div>

<div class="form-group">
    <label for="id">actividad <code>Tecla Control + clic derecho para Seleccionar</code></label>
    {!! Form::select('actividad_citas', $actividad_citas, null, ['class' => 'form-control ','name'=>'actividad_citas[]','multiple'=>'multiple','readonly']) !!}

</div>

<div class="form-group">
    <label for="id">estado</label>
    {!! Form::select('estado_citas', $estado_citas, 1, ['class' => 'form-control', 'placeholder' => 'Seleccione el estado... ','name'=>'estado_citas','readonly']) !!}

</div>

<div class="form-group">
    <label for="id">Compromisos</label>
    {!! Form::select('compromiso_citas', $compromisos, null, ['class' => 'form-control', 'placeholder' => 'Seleccione el compromiso... ','name'=>'compromiso_citas[]','id'=>'compromiso_citas2' ,'multiple'=>'multiple','readonly']) !!}

</div>

<div class="form-group">
    <label for="id">observacion</label>
    <?php  $ip= "Inicio de Sesióin del Usuario ". Auth::user()->name. " Dirección Ip =>  ". $_SERVER['REMOTE_ADDR'];   ?>
   {!! Form::textarea('observacion_citas', $ip, ['class' => 'form-control', 'placeholder' => 'Digite una Observación','name'=>'observacion_citas','readonly']) !!}
</div>
 -->


    <center><button type="submit" class="btn btn-default" >Registrar su inicio de Sesión</button>


{!! Form::close() !!}

<div class="pull-right">
                                    <a href="{{ url('/logout') }}" class="btn btn-default btn-flat" id="logout"
                                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {{ trans('adminlte_lang::message.signout') }}
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        <input type="submit" value="logout" style="display: none;">
                                    </form>

                                </div>
  </div>
</div>


</div>
</div>

</body>
</html>
