<div class="modal fade" id="crear_detalle_imp_retencion">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">CREAR detalle_imp_retencion</h4>
            </div>
            <div class="modal-body">




                {!! Form::open(['route' => 'detalle_imp_retencion.store', 'method'=>'POST','id'=>'FormCreatedetalle_imp_retencions']) !!}


                <div class="form-group" >
                    <label for="id">Consecutivo Detalle</label>
                    {!! Form::number('cns_detalle', null,['class' => 'form-control', 'placeholder' => 'cns_detalle','name'=>'cns_detalle', 'required']) !!}
                </div>


                <div class="form-group" >
                    <label for="id">Código</label>
                    {!! Form::text('codigo', null,['class' => 'form-control', 'placeholder' => 'Digite el código','name'=>'codigo', 'required']) !!}
                </div>

                <div class="form-group" >
                    <label for="id">Descripción</label>
                    {!! Form::text('descripcion', null,['class' => 'form-control', 'placeholder' => 'Digite descripcion','name'=>'descripcion', 'required']) !!}
                </div>

                <center><button type="submit" class="btn btn-primary" >Guardar</button>
                    <button type="reset" class="btn btn-danger">Borrar</button></center><p>

                        {!! Form::close() !!}


                    </div>
                </div>

            </div>
        </div>
