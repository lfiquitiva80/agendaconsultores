<div class="modal fade" id="crear_cliente">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">CREAR CLIENTE</h4>
            </div>
            <div class="modal-body">




                {!! Form::open(['route' => 'clientes.store', 'method'=>'POST','id'=>'FormClienteCreate']) !!}


                <div class="form-group" >
                    <label for="id">nit</label>
                    {!! Form::text('nit', null,['class' => 'form-control', 'placeholder' => 'nit','name'=>'nit']) !!}
                </div>

                <div class="form-group" >
                    <label for="id">nombre_cliente</label>
                    {!! Form::text('nombre_cliente', null,['class' => 'form-control', 'placeholder' => 'nombre_cliente','name'=>'nombre_cliente']) !!}
                </div>

                <div class="form-group">
                    <label for="id">direccion_cliente</label>
                    {!! Form::text('direccion_cliente', null,['class' => 'form-control', 'placeholder' => 'direccion_cliente completo','name'=>'direccion_cliente']) !!}
                </div>
                <div class="form-group">
                    <label for="id">telefono_cliente</label>
                    {!! Form::text('telefono_cliente', null,['class' => 'form-control', 'placeholder' => 'telefono_cliente','name'=>'telefono_cliente']) !!}
                </div>
                <div class="form-group">
                    <label for="id">celular_cliente</label>
                    {!! Form::text('celular_cliente', null,['class' => 'form-control', 'placeholder' => 'celular_cliente','name'=>'celular_cliente']) !!}

                </div>
                <div class="form-group">
                    <label for="id">notas_cliente</label>
                    {!! Form::text('text', null,['class' => 'form-control', 'placeholder' => 'notas_cliente','name'=>'notas_cliente']) !!}

                </div>

                <div class="form-group">
                    <label for="id">gran_contribuyente_cliente</label>
                    {!! Form::select('gran_contribuyente_cliente',['1'=>'Si', '0' =>'No'],null,['class'=> 'form-control','id' => 'gran_contribuyente_cliente','name'=>'gran_contribuyente_cliente'] )!!}
                </div>                  


                <div class="form-group">
                    <label for="id">correo_cliente</label>
                    {!! Form::text('email', null,['class' => 'form-control', 'placeholder' => 'correo_cliente','name'=>'correo_cliente']) !!}
                </div>
                <div class="form-group">
                   <label for="id">ciudad_cliente</label>
                   {!! Form::text('ciudad_cliente', null,['class' => 'form-control', 'placeholder' => 'ciudad_cliente','name'=>'ciudad_cliente']) !!}
               </div>

               <div class="form-group">
                   <label for="id">pais_cliente</label>
                   {!! Form::text('pais_cliente', null,['class' => 'form-control', 'placeholder' => 'ciudad_cliente','name'=>'pais_cliente']) !!}
               </div>

               <div class="form-group">
                   <label for="id">contacto_cliente</label>
                   {!! Form::text('contacto_cliente', null,['class' => 'form-control', 'placeholder' => 'contacto_cliente','name'=>'contacto_cliente']) !!}
               </div>
               <div class="form-group">
                   <label for="id">clave_ingreso_DIAN_cliente</label>
                   {!! Form::text('clave_ingreso_DIAN_cliente', null,['class' => 'form-control', 'placeholder' => 'clave_ingreso_DIAN_cliente','name'=>'clave_ingreso_DIAN_cliente']) !!}
               </div>
               <div class="form-group">
                   <label for="id">clave_firma_DIAN_cliente</label>
                   {!! Form::text('clave_firma_DIAN_cliente', null,['class' => 'form-control', 'placeholder' => 'clave_firma_DIAN_cliente','name'=>'clave_firma_DIAN_cliente']) !!}
               </div>
               <div class="form-group">
                   <label for="id">clave_CC_cliente</label>
                   {!! Form::text('clave_CC_cliente', null,['class' => 'form-control', 'placeholder' => 'clave_CC_cliente','name'=>'clave_CC_cliente']) !!}
               </div>
               <div class="form-group">
                   <label for="id">responsable_cliente</label>
                   <!-- {!! Form::text('responsable_cliente', null,['class' => 'form-control', 'placeholder' => 'responsable_cliente','name'=>'responsable_cliente']) !!} -->
                    
                   {!! Form::select('responsable_cliente', $usuarios, null, ['class' => 'form-control', 'placeholder' => 'Seleccione el Consultor... ','name'=>'responsable_cliente']) !!} 

               </div>

               <div class="form-group">
                   <label for="id">ultimo_digito_cliente</label>
                   {!! Form::text('ultimo_digito_cliente', null,['class' => 'form-control', 'placeholder' => 'ultimo_digito_cliente','name'=>'ultimo_digito_cliente']) !!}
               </div>

               <div class="form-group">
                   <label for="id">ultimos_digitos_cliente</label>
                   {!! Form::text('ultimos_digitos_cliente', null,['class' => 'form-control', 'placeholder' => 'ultimos_digitos_cliente','name'=>'ultimos_digitos_cliente']) !!}
               </div>


               <div class="form-group">
                   <label for="id">activo_cliente</label>
                   {!! Form::select('activo_cliente',['1'=>'Si', '0' =>'No'],null,['class'=> 'form-control','id' => 'activo_cliente','name'=>'activo_cliente'] )!!}
               </div>  

               <div class="form-group">
                   <label for="id">tipo_cliente</label>
                   {!! Form::text('tipo_cliente', null,['class' => 'form-control', 'placeholder' => 'tipo_cliente','name'=>'tipo_cliente']) !!}
               </div>

               <div class="form-group">
                   <label for="id">representante_legal_cliente</label>
                   {!! Form::text('representante_legal_cliente', null,['class' => 'form-control', 'placeholder' => 'tipo_cliente','name'=>'representante_legal_cliente']) !!}
               </div>

               <div class="form-group">
                   <label for="id">nombre_representante_legal_cliente</label>
                   {!! Form::text('nombre_representante_legal_cliente', null,['class' => 'form-control', 'placeholder' => 'nombre_representante_legal_cliente','name'=>'nombre_representante_legal_cliente']) !!}
               </div>


               <center><button type="submit" class="btn btn-primary" >Enviar</button>
                <button type="reset" class="btn btn-danger">Borrar</button></center><p>

                    {!! Form::close() !!}


                </div>

               

            </div>

        </div>
    </div>
