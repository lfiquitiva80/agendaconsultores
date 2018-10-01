<div class="modal fade" id="crear_actividad_cargo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">CREAR actividad_cargo</h4>
            </div>
            <div class="modal-body">




{!! Form::open(['route' => 'actividad_cargo.store', 'method'=>'POST','id'=>'FormCreateactividad_cargos']) !!}


<div class="form-group">
    <label for="id">Descripción Cargo</label>
    {!! Form::select('id_cargo', $cargo, $id, ['class' => 'form-control', 'placeholder' => 'Seleccione el Cargo... ','name'=>'id_cargo', 'required']) !!} 
    
</div>

<div class="form-group">
    <label for="id">Descripción Actividad</label>
    {!! Form::select('id_actividad', $actividad, null, ['class' => 'form-control', 'placeholder' => 'Seleccione la Actividad... ','name'=>'id_actividad', 'required']) !!} 
    
</div>

    <center><button type="submit" class="btn btn-primary" >Guardar</button>
    <button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>

</div>
</div>
