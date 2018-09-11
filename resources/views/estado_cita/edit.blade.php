
<div class="modal fade" id="editar_estado_cita">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ACTUALIZAR</h4>
            </div>
            <div class="modal-body">

                

<form class="" action="{{route('estado_cita.update', 'id' )}}"   method="post" id="FromEditEstadoCita">

  {{method_field('patch')}}
  {{csrf_field()}}

<input type="hidden" id="id"  name="id" value="">

<div class="form-group" >
        <label for="id">Estado</label>
        {!! Form::text('Estado', null,['class' => 'form-control', 'placeholder' => 'Estado','name'=>'Estado','id'=>'Estado']) !!}
    </div>


    <div class="form-group" >
        <label for="id">Color Agenda</label>
        {!! Form::color('color_agenda', null,['class' => 'form-control', 'placeholder' => 'color_agenda','name'=>'color_agenda','id'=>'color_agenda']) !!}
    </div>


    <center><button type="submit" class="btn btn-primary" >Enviar</button>
    <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>

</form>



  </div>
</div>

</div>
</div>
