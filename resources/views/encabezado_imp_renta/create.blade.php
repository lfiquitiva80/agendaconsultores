<div class="modal fade" id="crear_encabezado_imp_renta">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ENCABEZADO</h4>
            </div>
            <div class="modal-body">




                {!! Form::open(['route' => 'encabezado_imp_renta.store', 'method'=>'POST','id'=>'FormCreateencabezado_imp_rentas', 'enctype' => 'multipart/form-data']) !!}


                <div class="form-group">
                    <label for="id">Responsable</label>

                     @if (Auth::user()->perfil_usuario == 1)
                    {!! Form::select('responsable', $usuarios, Auth::user()->id, ['class' => 'form-control', 'placeholder' => 'Seleccione el Consultor... ','name'=>'responsable']) !!}
                    @else

                    <select name="responsable" id="responsable" class="form-control" required>
                     <option value="{{Auth::user()->id}}">{{Auth::user()->name}}</option>
                    </select>

                    @endif 

                </div>

                <div class="form-group">
                    <label for="id">Empresa</label>
                    {!! Form::select('cliente', $clientes, null, ['class' => 'form-control', 'placeholder' => 'Seleccione la Empresa... ','name'=>'cliente','required']) !!} 

                </div>

                <div class="form-group">
                    <label for="id">Auditor</label>
                    {!! Form::select('audito', $auditor, null, ['class' => 'form-control', 'placeholder' => 'Seleccione el Auditor... ','name'=>'audito','required']) !!} 

                </div>

               <!--  <div class="form-group">
                    <label for="id">bim</label>
                    {!! Form::number('bim', null,['class' => 'form-control', 'placeholder' => 'Digite el BIM','name'=>'bim','required']) !!}

                </div> -->

                <!-- <div class="form-group">
                    <label for="id">Fecha de Vencimiento</label>
                    {!! Form::date('fecha_vencimiento', null,['class' => 'form-control', 'placeholder' => 'fecha_vencimiento','name'=>'fecha_vencimiento','required']) !!}

                </div>

                <div class="form-group">
                    <label for="id">Fecha de Entrega</label>
                    {!! Form::date('fecha_entrega', null,['class' => 'form-control', 'placeholder' => 'fecha_entrega','name'=>'fecha_entrega','required']) !!}

                </div>

                <div class="form-group">
                    <label for="id"><i class="fa fa-upload" aria-hidden="true"></i> Ubicación de Archivos</label>
                    {!! Form::file('ubicacion_archivos', ['class' => 'form-control', 'placeholder' => 'ubicacion_archivos','name'=>'ubicacion_archivos', 'enctype' => 'multipart/form-data', 'files' => 'true','required']) !!}

                </div>

                <div class="form-group">
                    <label for="id">Observaciones</label>
                    {!! Form::textarea('Observaciones', null, ['class' => 'form-control', 'placeholder' => 'Observaciones','name'=>'Observaciones', 'required']) !!}

                </div>

                <div class="form-group">
                    <label for="id">Enviar Auditoria</label>
                    {!! Form::select('enviar_auditoria',[ '0'=>'No', '1' =>'Si'],null,['class'=> 'form-control','name'=>'enviar_auditoria','required'] )!!}
                </div>

                <div class="form-group">
                    <label for="id">Cierre Auditoria</label>
                    {!! Form::select('cierre_auditoria',[ '0'=>'No', '1' =>'Si'],null,['class'=> 'form-control','name'=>'cierre_auditoria','required'] )!!}
                </div>

                <div class="form-group">
                    <label for="id">Observaciones de Auditoria</label>
                    {!! Form::textarea('observaciones_auditoria', null, ['class' => 'form-control', 'placeholder' => 'observaciones_auditoria','name'=>'observaciones_auditoria','required']) !!}
                </div>

                

                <div class="form-group">
<label for="id">Fecha Auditoria Encabezado Devolución Iva</label>
{!! Form::date('fecha_auditoria_encabezado_imp_renta', null,['class' => 'form-control', 'placeholder' => 'fecha_auditoria_encabezado_imp_renta','name'=>'fecha_auditoria_encabezado_imp_renta','required']) !!}

                </div> -->

                <div class="form-group">
                    <label for="id">Fecha de Elaboración</label>
                    {!! Form::date('fecha_elaboracion', \Carbon\Carbon::now(),['class' => 'form-control', 'placeholder' => 'fecha_elaboracion','name'=>'fecha_elaboracion','readonly']) !!}

                </div>


                <center><button type="submit" class="btn btn-primary" >Generar encabezado y detalle</button>
                    <button type="reset" class="btn btn-danger">Borrar</button></center><p>

                        {!! Form::close() !!}


                    </div>
                </div>

            </div>
        </div>
