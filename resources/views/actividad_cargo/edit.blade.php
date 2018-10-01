
<div class="modal fade" id="editar_actividad_cargo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ACTUALIZAR</h4>
            </div>
            <div class="modal-body">

                

<form class="" action="{{route('actividad_cargo.update', 'id' )}}"   method="post" id="FormEditactividad_cargos">

  {{method_field('patch')}}
  {{csrf_field()}}

<input type="hidden" id="id"  name="id" value="">

<div class="form-group">
    <label for="id">Descripción Cargo</label>
    {!! Form::select('id_cargo', $cargo, null, ['class' => 'form-control', 'placeholder' => 'Seleccione el Cargo... ','name'=>'id_cargo', 'required','id'=>'id_cargo']) !!} 
    
</div>

<div class="form-group">
    <label for="id">Descripción Actividad</label>
    {!! Form::select('id_actividad', $actividad, null, ['class' => 'form-control', 'placeholder' => 'Seleccione la Actividad... ','name'=>'id_actividad', 'required','id'=>'id_actividad']) !!} 

</div>

    <center><button type="submit" class="btn btn-primary" >Actualizar</button>
    <button type="button" class="btn btn-default "data-dismiss="modal" >Cerrar</button></center><p>

</form>



  </div>
</div>

</div>
</div>
