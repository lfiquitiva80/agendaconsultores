
<div class="modal modal-success fade" id="editar_citas">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ACTUALIZAR</h4>
            </div>
            <div class="modal-body">

                

<form class="" action="{{route('citas.update', 'id' )}}"   method="post" id="reg_form3">

  {{method_field('patch')}}
  {{csrf_field()}}

<input type="hidden" id="id"  name="id" value="">

<div class="row">
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
   <div class="form-group" >
        <label for="id">fecha_citas</label>
        {!! Form::date('fecha_citas', \Carbon\Carbon::now(),['class' => 'form-control', 'placeholder' => 'fecha_citas','name'=>'fecha_citas' ,'id'=>'fecha_citas']) !!}
        
    </div>

</div>

<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
 <div class="form-group" >
    <label for="id">Hora_citas</label>
    {{ Form::time('Hora_citas', Carbon\Carbon::now()->format('H:i'),['class' => 'form-control', 'placeholder' => 'Hora_citas','name'=>'hora_citas','id'=>'hora_citas']) }}

</div>


</div>

<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
 <div class="form-group" >
    <label for="id">hora_final_citas</label>
    {{ Form::time('hora_final_citas', Carbon\Carbon::now()->format('H:i'),['class' => 'form-control', 'placeholder' => 'hora_final_citas','name'=>'hora_final_citas','id'=>'hora_final_citas']) }}

</div>


</div>

</div>

<div class="form-group">
    <label for="id">lugar_citas</label>
    {!! Form::select('lugar_citas', $lugar, null, ['class' => 'form-control', 'placeholder' => 'Seleccione el lugar... ','name'=>'lugar_citas','id'=>'lugar_citas']) !!} 
    
</div>

<div class="form-group">
    <label for="id">observacion_citas</label>
   {!! Form::textarea('observacion_citas', null, ['class' => 'form-control', 'placeholder' => 'Digite una Observación','name'=>'observacion_citas','id'=>'observacion_citas']) !!}
</div>

<div class="form-group">
    <label for="id">empresa_citas</label>
    {!! Form::select('empresa_citas', $clientes, null, ['class' => 'form-control', 'placeholder' => 'Seleccione la Empresa... ','name'=>'empresa_citas','id'=>'empresa_citas']) !!} 
    
</div>

<div class="form-group">
                <label for="id">asistio_citas</label>
                {!! Form::select('asistio_citas',['1'=>'Si', '0' =>'No'],null,['class'=> 'form-control','id' => 'asistio_citas','name'=>'asistio_citas','id'=>'asistio_citas'] )!!}
</div>

<div class="form-group">
    <label for="id">usuario_citas</label>
    {!! Form::select('usuario_citas', $usuarios, null, ['class' => 'form-control', 'placeholder' => 'Seleccione el usuario... ','name'=>'usuario_citas','id'=>'usuario_citas']) !!} 
    
</div>

<div class="form-group">
    <label for="id">jornada_citas</label>
    
    {!! Form::select('jornada_citas', $jornada, null, ['class' => 'form-control', 'placeholder' => 'Seleccione la actividad... ','name'=>'jornada_citas','id'=>'jornada_citas']) !!} 
    
</div>

<div class="form-group">
    <label for="id">actividad_citas</label>
    {!! Form::select('actividad_citas', $actividad_citas, null, ['class' => 'form-control', 'placeholder' => 'Seleccione la actividad... ','name'=>'actividad_citas','id'=>'actividad_citas']) !!} 
    
</div>

<div class="form-group">
    <label for="id">estado_citas</label>
    {!! Form::select('estado_citas', $estado_citas, null, ['class' => 'form-control', 'placeholder' => 'Seleccione el estado... ','name'=>'estado_citas','id'=>'estado_citas']) !!} 
    
</div>    



    <center><button type="submit" class="btn btn-primary" >Enviar</button>
    <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>

</form>



  </div>
</div>

</div>
</div>
