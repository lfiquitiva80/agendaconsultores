<div class="modal fade" id="crear_checklist">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">CREAR checklist</h4>
            </div>
            <div class="modal-body">




{!! Form::open(['route' => 'checklist.store', 'method'=>'POST','id'=>'FormCreatechecklists']) !!}


<div class="form-group" >
        <label for="id">Descripción</label>
        {!! Form::text('descripcion', null,['class' => 'form-control', 'placeholder' => 'descripcion','name'=>'descripcion']) !!}
    </div>

<div class="form-group" >
        <label for="id">Filtro Plantilla</label>
        {!! Form::text('filtro_plantilla', null,['class' => 'form-control', 'placeholder' => 'filtro_plantilla','name'=>'filtro_plantilla']) !!}
    </div>
<div class="form-group" >
        <label for="id">Tabla Encabezado</label>
        {!! Form::text('tabla_encabezado', null,['class' => 'form-control', 'placeholder' => 'tabla_encabezado','name'=>'tabla_encabezado']) !!}
    </div>

<div class="form-group" >
        <label for="id">Tabla Detalle</label>
        {!! Form::text('tabla_detalle', null,['class' => 'form-control', 'placeholder' => 'tabla_detalle','name'=>'tabla_detalle']) !!}
    </div>    




    <center><button type="submit" class="btn btn-primary" >Enviar</button>
    <button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>

</div>
</div>
