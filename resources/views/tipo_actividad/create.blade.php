<div class="modal fade" id="crear_tipo_actividad">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">CREAR tipo_actividad</h4>
            </div>
            <div class="modal-body">




{!! Form::open(['route' => 'tipo_actividad.store', 'method'=>'POST','id'=>'FormCreatetipo_actividads']) !!}


<div class="form-group" >
        <label for="id">descripcion_tipo_actividad</label>
        {!! Form::text('descripcion', null,['class' => 'form-control', 'placeholder' => 'descripcion','name'=>'descripcion', 'required']) !!}
    </div>

    <center><button type="submit" class="btn btn-primary" >Guardar</button>
    <button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>

</div>
</div>
