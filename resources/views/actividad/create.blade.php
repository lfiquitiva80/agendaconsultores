    <div class="modal fade" id="crear_actividad">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">CREAR actividad</h4>
                </div>
                <div class="modal-body">




                    {!! Form::open(['route' => 'actividad.store', 'method'=>'POST','id'=>'FormCreateActividad']) !!}


                    <div class="form-group" >
                        <label for="id">descripcion_actividad</label>
                        {!! Form::text('descripcion_actividad', null,['class' => 'form-control', 'placeholder' => 'descripcion_actividad','name'=>'descripcion_actividad']) !!}
                    </div>

                    <div class="form-group">
                        <label for="id">Tipo Actividad <code> Tecla Control + click derecho para seleccionar</code></label>
                        {!! Form::select('tipo',$tipo_actividad,null,['class'=> 'form-control','id' => 'tipo','name'=>'tipo[]', 'multiple' => 'multiple'] )!!}
                    </div>  

                    <div class="form-group">
                        <label for="id">Modo Actividad</label>
                        {!! Form::select('modo_actividad',['1'=>'Si', '0' =>'No'],null,['class'=> 'form-control','id' => 'modo_actividad','name'=>'modo_actividad'] )!!}
                    </div>     

                    <center><button type="submit" class="btn btn-primary" >Guardar</button>
                        <button type="reset" class="btn btn-danger">Borrar</button></center><p>

                            {!! Form::close() !!}


                        </div>
                    </div>

                </div>
            </div>
