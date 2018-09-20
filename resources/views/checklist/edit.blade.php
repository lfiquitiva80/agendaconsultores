
<div class="modal fade" id="editarchecklist">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ACTUALIZAR</h4>
            </div>
            <div class="modal-body">

                

<form class="" action="{{route('checklist.update', 'id' )}}"   method="post" id="FormEditchecklists">

  {{method_field('patch')}}
  {{csrf_field()}}

<input type="hidden" id="id"  name="id" value="">

<div class="form-group" >
        <label for="id">Descripción</label>
        {!! Form::text('descripcion', null,['class' => 'form-control', 'placeholder' => 'descripcion','name'=>'descripcion','id'=>'descripcion']) !!}
    </div>

<div class="form-group" >
        <label for="id">Filtro Plantilla</label>
        {!! Form::text('filtro_plantilla', null,['class' => 'form-control', 'placeholder' => 'filtro_plantilla','name'=>'filtro_plantilla','id'=>'filtro_plantilla']) !!}
    </div>
<div class="form-group" >
        <label for="id">Tabla Encabezado</label>
        {!! Form::text('tabla_encabezado', null,['class' => 'form-control', 'placeholder' => 'tabla_encabezado','name'=>'tabla_encabezado','id'=>'tabla_encabezado']) !!}
    </div>

<div class="form-group" >
        <label for="id">Tabla Detalle</label>
        {!! Form::text('tabla_detalle', null,['class' => 'form-control', 'placeholder' => 'tabla_detalle','name'=>'tabla_detalle','id'=>'tabla_detalle']) !!}
    </div>  


    <center><button type="submit" class="btn btn-primary" >Enviar</button>
    <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>

</form>



  </div>
</div>

</div>
</div>
