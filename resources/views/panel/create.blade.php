<div class="modal fade" id="crear_cargo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">CREAR CARGO</h4>
            </div>
            <div class="modal-body">




{!! Form::open(['route' => 'cargo.store', 'method'=>'POST','id'=>'FormCreateCargos']) !!}


<div class="form-group" >
        <label for="id">descripcion_cargo</label>
        {!! Form::text('descripcion_cargo', null,['class' => 'form-control', 'placeholder' => 'descripcion_cargo','name'=>'descripcion_cargo']) !!}
    </div>

    <center><button type="submit" class="btn btn-primary" >Enviar</button>
    <button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>

</div>
</div>
