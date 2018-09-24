
<div class="modal fade" id="editar_plantilla_checklist">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ACTUALIZAR</h4>
            </div>
            <div class="modal-body">

                

<form class="" action="{{route('plantilla_checklist.update', 'id' )}}"   method="post" id="FormEditplantilla_checklists">

  {{method_field('patch')}}
  {{csrf_field()}}

<input type="hidden" id="id"  name="id" value="">

<div class="form-group" >
        <label for="id">codigo_plantilla_checklist</label>
        {!! Form::text('codigo_plantilla_checklist', null,['class' => 'form-control', 'placeholder' => 'codigo_plantilla_checklist','name'=>'codigo_plantilla_checklist', 'required','id'=>'codigo_plantilla_checklist']) !!}
    </div>

    <div class="form-group" >
        <label for="id">descripcion_plantilla_checklist</label>
        {!! Form::text('descripcion_plantilla_checklist', null,['class' => 'form-control', 'placeholder' => 'descripcion_plantilla_checklist','name'=>'descripcion_plantilla_checklist', 'required','id'=>'descripcion_plantilla_checklist']) !!}
    </div>

    <div class="form-group" >
        <label for="id">filtro_checklist</label>
        {!! Form::text('filtro_checklist', null,['class' => 'form-control', 'placeholder' => 'filtro_checklist','name'=>'filtro_checklist', 'required','id'=>'filtro_checklist']) !!}
    </div>

    <center><button type="submit" class="btn btn-primary" >Enviar</button>
    <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>

</form>



  </div>
</div>

</div>
</div>
