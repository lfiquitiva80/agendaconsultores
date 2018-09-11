<div class="modal fade" id="crear_perfil">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">CREAR PERFIL</h4>
            </div>
            <div class="modal-body">




{!! Form::open(['route' => 'perfil.store', 'method'=>'POST','id'=>'FormCreatePerfil']) !!}


<div class="form-group" >
        <label for="id">descripcion_perfil</label>
        {!! Form::text('descripcion_perfil', null,['class' => 'form-control', 'placeholder' => 'descripcion_perfil','name'=>'descripcion_perfil']) !!}
    </div>

    <center><button type="submit" class="btn btn-primary" >Enviar</button>
    <button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>

</div>
</div>
