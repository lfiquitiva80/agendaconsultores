
    <div class="modal fade" id="editar_clientes">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">ACTUALIZAR</h4>
                </div>
                <div class="modal-body">



                    <form class="" action="{{route('clientes.update', 'id' )}}"   method="post" id="FormClienteEdit">

                      {{method_field('patch')}}
                      {{csrf_field()}}

                      <input type="hidden" id="id"  name="id" value="">

                      <div class="form-group" >
                        <label for="id">nit</label>
                        {!! Form::text('nit', null,['class' => 'form-control','name'=>'nit','id'=>'nit']) !!}
                    </div>
                   
                    <div class="form-group" >
                        <label for="id">nombre</label>
                        {!! Form::text('nombre_cliente', null,['class' => 'form-control','name'=>'nombre_cliente', 'id'=>'nombre_cliente']) !!}
                    </div>

                    <div class="form-group">
                        <label for="id">direccion</label>
                        {!! Form::text('direccion_cliente', null,['class' => 'form-control', 'placeholder' => 'direccion_cliente completo','name'=>'direccion_cliente' ,'id'=>'direccion_cliente']) !!}
                    </div>
                    <div class="form-group">
                        <label for="id">telefono</label>
                        {!! Form::text('telefono_cliente', null,['class' => 'form-control', 'placeholder' => 'telefono_cliente','name'=>'telefono_cliente' ,'id'=>'telefono_cliente']) !!}
                    </div>
                    <div class="form-group">
                        <label for="id">celular</label>
                        {!! Form::text('celular_cliente', null,['class' => 'form-control', 'placeholder' => 'celular_cliente','id'=>'celular_cliente']) !!}

                    </div>
                    <div class="form-group">
                        <label for="id">notas</label>
                        {!! Form::text('text', null,['class' => 'form-control', 'placeholder' => 'notas_cliente','name'=>'notas_cliente','id'=>'notas_cliente']) !!}

                    </div>
                    <div class="form-group">
                    <label for="id">gran_contribuyente</label>
                    {!! Form::select('gran_contribuyente_cliente',['1'=>'Si', '0' =>'No'],null,['class'=> 'form-control','id' => 'gran_contribuyente_cliente','name'=>'gran_contribuyente_cliente','id'=>'gran_contribuyente_cliente'] )!!}
                </div> 

                    <div class="form-group">
                        <label for="id">correo</label>
                        {!! Form::text('email', null,['class' => 'form-control', 'placeholder' => 'correo_cliente','name'=>'correo_cliente','id'=>'correo_cliente']) !!}
                    </div>
                    <div class="form-group">
                       <label for="id">ciudad</label>
                       {!! Form::text('ciudad_cliente', null,['class' => 'form-control', 'placeholder' => 'ciudad_cliente','name'=>'ciudad_cliente','id'=>'ciudad_cliente']) !!}
                   </div>

                   <div class="form-group">
                       <label for="id">pais</label>
                       {!! Form::text('pais_cliente', null,['class' => 'form-control', 'placeholder' => 'ciudad_cliente','name'=>'pais_cliente','id'=>'pais_cliente']) !!}
                   </div>

                   <div class="form-group">
                       <label for="id">contacto</label>
                       {!! Form::text('contacto_cliente', null,['class' => 'form-control', 'placeholder' => 'contacto_cliente','name'=>'contacto_cliente','id'=>'contacto_cliente']) !!}
                   </div>
                   <div class="form-group">
                       <label for="id">clave_ingreso_DIAN</label>
                       {!! Form::text('clave_ingreso_DIAN_cliente', null,['class' => 'form-control', 'placeholder' => 'clave_ingreso_DIAN_cliente','name'=>'clave_ingreso_DIAN_cliente','id'=>'clave_ingreso_dian_cliente']) !!}
                   </div>
                   <div class="form-group">
                       <label for="id">clave_firma_DIAN</label>
                       {!! Form::text('clave_firma_DIAN_cliente', null,['class' => 'form-control', 'placeholder' => 'clave_firma_DIAN_cliente','name'=>'clave_firma_DIAN_cliente','id'=>'clave_firma_dian_cliente']) !!}
                   </div>
                   <div class="form-group">
                       <label for="id">clave_CC</label>
                       {!! Form::text('clave_CC_cliente', null,['class' => 'form-control', 'placeholder' => 'clave_CC_cliente','name'=>'clave_CC_cliente','id'=>'clave_CC_cliente']) !!}
                   </div>
                   <div class="form-group">
                       <label for="id">responsable</label>
                      {!! Form::select('responsable_cliente', $usuarios, null, ['class' => 'form-control', 'placeholder' => 'Seleccione el Consultor... ','name'=>'responsable_cliente','id'=>'responsable_cliente']) !!} 
                   </div>

                   <div class="form-group">
                       <label for="id">ultimo_digito</label>
                       {!! Form::text('ultimo_digito_cliente', null,['class' => 'form-control', 'placeholder' => 'ultimo_digito_cliente','name'=>'ultimo_digito_cliente','id'=>'ultimo_digito_cliente']) !!}
                   </div>

                   <div class="form-group">
                       <label for="id">ultimos_digitos</label>
                       {!! Form::text('ultimos_digitos_cliente', null,['class' => 'form-control', 'placeholder' => 'ultimos_digitos_cliente','name'=>'ultimos_digitos_cliente','id'=>'ultimos_digitos_cliente']) !!}
                   </div>
                   <div class="form-group">
                       <label for="id">activo</label>
                       {!! Form::select('activo_cliente',['1'=>'Si', '0' =>'No'],null,['class'=> 'form-control','id' => 'activo_cliente','name'=>'activo_cliente'] )!!}
                   </div>

                   <div class="form-group">
                       <label for="id">tipo</label>
                       {!! Form::text('tipo_cliente', null,['class' => 'form-control', 'placeholder' => 'tipo_cliente','name'=>'tipo_cliente','id'=>'tipo_cliente']) !!}
                   </div>

                   <div class="form-group">
                       <label for="id">representante_legal</label>
                       {!! Form::text('representante_legal_cliente', null,['class' => 'form-control', 'placeholder' => 'tipo_cliente','name'=>'representante_legal_cliente','id'=>'representante_legal_cliente']) !!}
                   </div>

                   <div class="form-group">
                       <label for="id">nombre_representante_legal</label>
                       {!! Form::text('nombre_representante_legal_cliente', null,['class' => 'form-control', 'placeholder' => 'nombre_representante_legal_cliente','name'=>'nombre_representante_legal_cliente','id'=>'nombre_representante_legal_cliente']) !!}
                   </div>

                   <div class="form-group">
                    <label for="id">Valor</label>
                    {!! Form::number('valor', null,['class' => 'form-control', 'placeholder' => 'valor','name'=>'valor','id'=>'valor']) !!}

                </div>



                   <center><button type="submit" class="btn btn-primary" >Actualizar</button>
                    <button type="button" class="btn btn-default "data-dismiss="modal" >Cerrar</button></center><p>

                    </form>



                </div>
            </div>

        </div>
    </div>
