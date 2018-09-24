<div class="modal fade" id="crear_plantilla_checklist">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">CREAR plantilla_checklist</h4>
            </div>
            <div class="modal-body">




{!! Form::open(['route' => 'plantilla_checklist.store', 'method'=>'POST','id'=>'FormCreateplantilla_checklists']) !!}


<div class="form-group" >
        <label for="id">codigo_plantilla_checklist</label>
        {!! Form::text('codigo_plantilla_checklist', null,['class' => 'form-control', 'placeholder' => 'codigo_plantilla_checklist','name'=>'codigo_plantilla_checklist', 'required']) !!}
    </div>

    <div class="form-group" >
        <label for="id">descripcion_plantilla_checklist</label>
        {!! Form::text('descripcion_plantilla_checklist', null,['class' => 'form-control', 'placeholder' => 'descripcion_plantilla_checklist','name'=>'descripcion_plantilla_checklist', 'required']) !!}
    </div>

    <div class="form-group" >
        <label for="id">filtro_checklist</label>
        {!! Form::text('filtro_checklist', null,['class' => 'form-control', 'placeholder' => 'filtro_checklist','name'=>'filtro_checklist', 'required']) !!}
    </div>

    <center><button type="submit" class="btn btn-primary" >Enviar</button>
    <button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>

</div>
</div>
