<div class="modal fade" id="crear_estado_cita">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">CREAR estado_cita</h4>
            </div>
            <div class="modal-body">




{!! Form::open(['route' => 'estado_cita.store', 'method'=>'POST','id'=>'FromCreateEstadoCita']) !!}


<div class="form-group" >
        <label for="id">Estado</label>
        {!! Form::text('Estado', null,['class' => 'form-control', 'placeholder' => 'Estado','name'=>'Estado']) !!}
    </div>


    <div class="form-group" >
        <label for="id">Color Agenda</label>
        {!! Form::color('color_agenda', null,['class' => 'form-control', 'placeholder' => 'color_agenda','name'=>'color_agenda']) !!}
    </div>

    <center><button type="submit" class="btn btn-primary" >Enviar</button>
    <button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>

</div>
</div>
