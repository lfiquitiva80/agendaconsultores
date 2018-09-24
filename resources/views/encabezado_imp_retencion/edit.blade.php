
<div class="modal fade" id="editar_encabezado_imp_retencion">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ACTUALIZAR</h4>
            </div>
            <div class="modal-body">

                

<form class="" action="{{route('encabezado_imp_retencion.update', 'id' )}}"   method="post" id="FormEditCargos" >

  {{method_field('patch')}}
  {{csrf_field()}}

<input type="hidden" id="id"  name="id" value="">

              <div class="form-group">
                    <label for="id">Responsable</label>
                    {!! Form::select('responsable', $usuarios, Auth::user()->id, ['class' => 'form-control', 'placeholder' => 'Seleccione el Consultor... ','name'=>'responsable','id'=>'responsable', 'required']) !!} 

                </div>

                <div class="form-group">
                    <label for="id">Empresa</label>
                    {!! Form::select('cliente', $clientes, null, ['class' => 'form-control', 'placeholder' => 'Seleccione la Empresa... ','name'=>'cliente','id'=>'cliente', 'required']) !!} 

                </div>

                <div class="form-group">
                    <label for="id">Auditor</label>
                    {!! Form::select('audito', $auditor, null, ['class' => 'form-control', 'placeholder' => 'Seleccione el Auditor... ','name'=>'audito','id'=>'audito', 'required']) !!} 

                </div>

                <div class="form-group">
                    <label for="id">bim</label>
                    {!! Form::number('bim_auditado', null,['class' => 'form-control', 'placeholder' => 'Digite el BIM','name'=>'bim_auditado','id'=>'bim_auditado', 'required']) !!}

                </div>

                <div class="form-group">
                    <label for="id">Fecha de Vencimiento</label>
                    {!! Form::date('fecha_vencimiento', null,['class' => 'form-control', 'placeholder' => 'fecha_vencimiento','name'=>'fecha_vencimiento','id'=>'fecha_vencimiento', 'required']) !!}

                </div>

                <div class="form-group">
                    <label for="id">Fecha de Entrega</label>
                    {!! Form::date('fecha_entrega', null,['class' => 'form-control', 'placeholder' => 'fecha_entrega','name'=>'fecha_entrega','id'=>'fecha_entrega', 'required']) !!}

                </div>

                <div class="form-group">
                    <label for="id">Observaciones</label>
                    {!! Form::textarea('Observaciones', null, ['class' => 'form-control', 'placeholder' => 'Observaciones','name'=>'Observaciones','id'=>'Observaciones', 'required']) !!}

                </div>

                <div class="form-group">
                    <label for="id">Enviar Auditoria</label>
                    {!! Form::select('enviar_auditoria',[ '0'=>'No', '1' =>'Si'],null,['class'=> 'form-control','name'=>'enviar_auditoria','id'=>'enviar_auditoria', 'required'] )!!}
                </div>

                <div class="form-group">
                    <label for="id">Cierre Auditoria</label>
                    {!! Form::select('cierre_auditoria',[ '0'=>'No', '1' =>'Si'],null,['class'=> 'form-control','name'=>'cierre_auditoria','id'=>'cierre_auditoria', 'required'] )!!}
                </div>

                <div class="form-group">
                    <label for="id">Observaciones de Auditoria</label>
                    {!! Form::textarea('observaciones_auditoria', null, ['class' => 'form-control', 'placeholder' => 'observaciones_auditoria','name'=>'observaciones_auditoria','id'=>'observaciones_auditoria', 'required']) !!}
                </div>

                <div class="form-group">
                    <label for="id">Ubicación de Archivos</label>
                  {!! Form::text('ubicacion_archivos', null, ['class' => 'form-control', 'placeholder' => 'ubicacion_archivos','name'=>'ubicacion_archivos','id'=>'ubicacion_archivos', 'required']) !!}

                </div>

                <div class="form-group">
<label for="id">Fecha Auditoria</label>
{!! Form::date('fecha_auditoria', null,['class' => 'form-control', 'placeholder' => 'fecha_auditoria','name'=>'fecha_auditoria','id'=>'fecha_auditoria', 'required']) !!}

                </div>

                <div class="form-group">
                    <label for="id">Fecha de Elaboración</label>
                    {!! Form::date('fecha_elaboracion', null,['class' => 'form-control', 'placeholder' => 'fecha_elaboracion','name'=>'fecha_elaboracion','id'=>'fecha_elaboracion', 'required']) !!}

                </div>


    <center><button type="submit" class="btn btn-primary" >Enviar</button>
    <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>

</form>



  </div>
</div>

</div>
</div>
