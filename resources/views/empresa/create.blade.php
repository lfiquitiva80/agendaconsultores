<div class="modal fade" id="crear_empresa">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">CREAR empresa</h4>
            </div>
            <div class="modal-body">




                {!! Form::open(['route' => 'empresa.store', 'method'=>'POST','id'=>'FormCreateempresas', 'enctype' => 'multipart/form-data']) !!}


                <img src="{{ asset('img/empresa.jpg')}}" style="width:140px; height:140px; position:absolute; top:10px; left:10px; border-radius:50%">

</a>

<br><br><br><br><br><br><br><br>
                <div class="form-group" >
                    <label for="id">Razón Social</label>
                    {!! Form::text('razon_social', null,['class' => 'form-control', 'placeholder' => 'razon_social','name'=>'razon_social']) !!}
                </div>

                <div class="form-group" >
                    <label for="id">nit</label>
                    {!! Form::number('nit', null,['class' => 'form-control', 'placeholder' => 'nit','name'=>'nit']) !!}
                </div>

                <div class="form-group" >
                    <label for="id">logo</label>
                    {!! Form::file('logo') !!}
                </div>

                <div class="form-group" >
                    <label for="id">Dirección</label>
                    {!! Form::text('direccion', null,['class' => 'form-control', 'placeholder' => 'direccion','name'=>'direccion']) !!}
                </div>
                 <div class="form-group" >
                    <label for="id">Teléfono</label>
                    {!! Form::text('telefono', null,['class' => 'form-control', 'placeholder' => 'telefono','name'=>'telefono']) !!}
                </div>
                 <div class="form-group" >
                    <label for="id">Pais</label>
                    {!! Form::text('pais', null,['class' => 'form-control', 'placeholder' => 'pais','name'=>'pais']) !!}
                </div>
                 <div class="form-group" >
                    <label for="id">Ciudad</label>
                    {!! Form::text('ciudad', null,['class' => 'form-control', 'placeholder' => 'ciudad','name'=>'ciudad']) !!}
                </div>

                 <div class="form-group" >
                    <label for="id">Celular</label>
                    {!! Form::text('celular', null,['class' => 'form-control', 'placeholder' => 'celular','name'=>'celular']) !!}
                </div>

                <div class="form-group" >
                    <label for="id">Contacto</label>
                    {!! Form::text('contacto', null,['class' => 'form-control', 'placeholder' => 'contacto','name'=>'contacto']) !!}
                </div>
                <center><button type="submit" class="btn btn-primary" >Guardar</button>
                    <button type="reset" class="btn btn-danger">Borrar</button></center><p>

                        {!! Form::close() !!}


                    </div>
                </div>

            </div>
        </div>
