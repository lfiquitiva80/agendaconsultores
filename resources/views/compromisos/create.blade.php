<div class="modal fade" id="crear_compromisos">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">CREAR COMPROMISOS</h4>
            </div>
            <div class="modal-body">




{!! Form::open(['route' => 'compromisos.store', 'method'=>'POST','id'=>'FormCreateCompromisos']) !!}


<div class="form-group" >
        <label for="id">descripcion_compromisos</label>
        {!! Form::text('descripcion_compromisos', null,['class' => 'form-control', 'placeholder' => 'descripcion_compromisos','name'=>'descripcion_compromisos', 'required']) !!}
       
    </div>

    <center><button type="submit" class="btn btn-primary" >Guardar</button>
    <button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>

</div>
</div>
