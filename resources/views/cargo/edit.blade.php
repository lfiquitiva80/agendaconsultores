
<div class="modal fade" id="editar_cargo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ACTUALIZAR</h4>
            </div>
            <div class="modal-body">

                

<form class="" action="{{route('cargo.update', 'id' )}}"   method="post" id="reg_form3">

  {{method_field('patch')}}
  {{csrf_field()}}

<input type="hidden" id="id"  name="id" value="">

<div class="form-group" >
        <label for="id">descripcion_cargo</label>
        {!! Form::text('descripcion_cargo', null,['class' => 'form-control', 'placeholder' => 'descripcion_cargo','name'=>'descripcion_cargo','id'=>'descripcion_cargo']) !!}
    </div>


    <center><button type="submit" class="btn btn-primary" >Enviar</button>
    <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>

</form>



  </div>
</div>

</div>
</div>
