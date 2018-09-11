
<div class="modal fade" id="editar_lugar">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ACTUALIZAR</h4>
            </div>
            <div class="modal-body">

                

<form class="" action="{{route('lugar.update', 'id' )}}"   method="post" id="FormEditLugar">

  {{method_field('patch')}}
  {{csrf_field()}}

<input type="hidden" id="id"  name="id" value="">

<div class="form-group" >
        <label for="id">descripcion_lugar</label>
        {!! Form::text('descripcion_lugar', null,['class' => 'form-control', 'placeholder' => 'descripcion_lugar','name'=>'descripcion_lugar','id'=>'descripcion_lugar']) !!}
    </div>


    <center><button type="submit" class="btn btn-primary" >Enviar</button>
    <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>

</form>



  </div>
</div>

</div>
</div>
