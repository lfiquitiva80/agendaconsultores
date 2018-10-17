
<div class="modal fade" id="editar_citas_agenda">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ACTUALIZAR AGENDA</h4>
                

<form class="" action="{{route('citas.update', 'id' )}}"   method="post" id="EditFormCitas">

  {{method_field('patch')}}
  {{csrf_field()}}

<input type="hidden" id="id5"  name="id" value="">


<button type="button" class="btn bg-purple margin" id="acta"> <i class="fa fa-eye" aria-hidden="true"></i> Acta Visita</button>



<div class="row">
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
   <div class="form-group" >
        <label for="id">fecha</label>
        {!! Form::date('fecha_citas', \Carbon\Carbon::now(),['class' => 'form-control', 'placeholder' => 'fecha_citas','name'=>'fecha_citas' ,'id'=>'fecha_citas_agenda']) !!}
       </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
 <div class="form-group" >
    <label for="id">Hora</label>
    {{ Form::time('Hora_citas', Carbon\Carbon::now()->format('H:i'),['class' => 'form-control', 'placeholder' => 'Hora_citas','name'=>'hora_citas','id'=>'hora_citas']) }}

</div>


</div>

<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
 <div class="form-group" >
    <label for="id">hora_final</label>
    {{ Form::time('hora_final_citas', Carbon\Carbon::now()->format('H:i'),['class' => 'form-control', 'placeholder' => 'hora_final_citas','name'=>'hora_final_citas','id'=>'hora_final_citas']) }}

</div>


</div>

</div>

<div class="form-group">
    <label for="id">lugar</label>
    {!! Form::select('lugar_citas', $lugar, null, ['class' => 'form-control', 'placeholder' => 'Seleccione el lugar... ','name'=>'lugar_citas','id'=>'lugar_citas']) !!} 
    
</div>



<div class="form-group">
    <label for="id">empresa</label>
    {!! Form::select('empresa_citas', $clientes, null, ['class' => 'form-control', 'placeholder' => 'Seleccione la Empresa... ','name'=>'empresa_citas','id'=>'empresa_citas']) !!} 
    
</div>

<!-- <div class="form-group">
                <label for="id">asistio_citas</label>
                {!! Form::select('asistio_citas',['1'=>'Si', '0' =>'No'],null,['class'=> 'form-control','id' => 'asistio_citas','name'=>'asistio_citas','id'=>'asistio_citas_agenda'] )!!}
</div> -->

<div class="form-group">
   
   @if (Auth::user()->perfil_usuario == 1)
    <label for="id">usuario</label>
   {!! Form::select('usuario_citas', $usuarios, null, ['class' => 'form-control', 'placeholder' => 'Seleccione el usuario... ','name'=>'usuario_citas','id'=>'usuario_citas2']) !!}
    @else
    <label for="id">usuario</label>
   <select name="usuario_citas" id="usuario_citas" class="form-control">
        <option value="{{Auth::user()->id}}">{{Auth::user()->name}}</option>
    </select>


    @endif 
    
</div>

<div class="form-group">
    <label for="id">jornada</label>
    
    {!! Form::select('jornada_citas', $jornada, null, ['class' => 'form-control', 'placeholder' => 'Seleccione la actividad... ','name'=>'jornada_citas','id'=>'jornada_citas']) !!} 
    
</div>

<div class="form-group">
    <label for="id">actividad <code>Tecla Control + clic derecho para Seleccionar</code></label>
    {!! Form::select('actividad_citas', $actividad_citas, null, ['class' => 'form-control','name'=>'actividad_citas[]','id'=>'actividad_citas','multiple'=>'multiple', 'style' => '.selected {background-color:red;}' ]) !!} 
    
</div>

<div class="form-group">
    <label for="id">estado</label>
    {!! Form::select('estado_citas', $estado_citas, null, ['class' => 'form-control', 'placeholder' => 'Seleccione el estado... ','name'=>'estado_citas','id'=>'estado_citas']) !!} 
    
</div>

<div class="form-group">
    <label for="id">Compromisos</label>
    {!! Form::select('compromiso_citas', $compromisos, null, ['class' => 'form-control', 'placeholder' => 'Seleccione el compromiso... ','name'=>'compromiso_citas[]','id'=>'compromiso_citas','multiple'=>'multiple']) !!} 
    
</div>

<div class="form-group">
    <label for="id">observacion</label>
   {!! Form::textarea('observacion_citas', null, ['class' => 'form-control', 'placeholder' => 'Digite una Observación','name'=>'observacion_citas','id'=>'observacion_citas']) !!}
</div>    



    <center><button type="submit" class="btn btn-primary" id="actualizarcita">Actualzar</button>
    <button type="button" class="btn btn-default "data-dismiss="modal" >Cerrar</button></center><p>

</form>


                


            </div>
            <div class="modal-body">

                

                



  </div>
</div>

</div>
</div>
