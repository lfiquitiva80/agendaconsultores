
<div class="modal fade" id="editar_tipo_actividad">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ACTUALIZAR</h4>
            </div>
            <div class="modal-body">

                

<form class="" action="{{route('tipo_actividad.update', 'id' )}}"   method="post" id="FormEdittipo_actividads">

  {{method_field('patch')}}
  {{csrf_field()}}

<input type="hidden" id="id"  name="id" value="">

<div class="form-group" >
        <label for="id">descripcion_tipo_actividad</label>
        {!! Form::text('descripcion', null,['class' => 'form-control', 'placeholder' => 'descripcion','name'=>'descripcion','id'=>'descripcion', 'required']) !!}
    </div>


    <center><button type="submit" class="btn btn-primary" >Enviar</button>
    <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>

</form>



  </div>
</div>

</div>
</div>
