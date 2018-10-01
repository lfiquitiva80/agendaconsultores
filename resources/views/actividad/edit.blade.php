
<div class="modal fade" id="editar_actividad">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ACTUALIZAR</h4>
            </div>
            <div class="modal-body">

                

                <form class="" action="{{route('actividad.update', 'id' )}}"   method="post" id="FormEditActividad">

                  {{method_field('patch')}}
                  {{csrf_field()}}

                  <input type="hidden" id="id"  name="id" value="">

                  <div class="form-group" >
                        <label for="id">descripcion_actividad</label>
                        {!! Form::text('descripcion_actividad', null,['class' => 'form-control', 'placeholder' => 'descripcion_actividad','name'=>'descripcion_actividad','id'=>'descripcion_actividad']) !!}
                    </div>

                    <div class="form-group">
                        <label for="id">Tipo Actividad <code> Tecla Control + click derecho para seleccionar</code></label>
                        {!! Form::select('tipo',$tipo_actividad,null,['class'=> 'form-control','id' => 'tipo','name'=>'tipo[]','id'=>'tipo', 'multiple' => 'multiple'] )!!}
                    </div>  

                    <div class="form-group">
                        <label for="id">Modo Actividad</label>
                        {!! Form::select('modo_actividad',['1'=>'Si', '0' =>'No'],null,['class'=> 'form-control','id' => 'modo_actividad','name'=>'modo_actividad','id'=>'modo_actividad'] )!!}
                    </div> 


                <center><button type="submit" class="btn btn-primary" >Actualizar</button>
                    <button type="button" class="btn btn-default "data-dismiss="modal" >Cerrar</button></center><p>

                    </form>



                </div>
            </div>

        </div>
    </div>
