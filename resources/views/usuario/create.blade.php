<div class="modal fade" id="crear_usuario">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">CREAR USUARIO</h4>
            </div>
            <div class="modal-body">

                <!--  -->


                {!! Form::open(['route' => 'usuario.store', 'method'=>'POST','id'=>'formUserCreate', 'enctype' => 'multipart/form-data']) !!}

                    <img src="{{ asset('img/default.jpg')}}" style="width:140px; height:140px; position:absolute; top:10px; left:10px; border-radius:50%">

</a>

<br><br><br><br><br><br><br><br>
{!!   Form::file('avatar')!!}

                <div class="form-group">
                    <label for="id">Nombre</label>
                    {!! Form::text('name', null,['class' => 'form-control', 'placeholder' => 'Nombre completo','name'=>'name']) !!}
                </div>

                <div class="form-group">
                    <label for="id">Email</label>
                    {!! Form::text('email', null,['class' => 'form-control', 'placeholder' => 'Email','name'=>'email']) !!}

                </div>
                <div class="form-group">
                    <label for="id">Contraseña </label>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña">
                </div>

                <div class="form-group">
                    <label  for="password-confirm">Confirmar Contraseña</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Contraseña">
                </div>
                <div class="form-group">
                    <label for="id">Perfil de Usuario</label>

                    {!! Form::select('perfil_usuario', $perfil,null, ['class' => 'form-control','name'=>'perfil_usuario' ]) !!}

                </div>


                <div class="form-group">
                    <label for="id">Cargo del Usuario  <code>Tecla Control + clic derecho para Seleccionar</code></label>

                    {!! Form::select('cargo', $cargo,null, ['class' => 'form-control','name'=>'cargo[]','id'=>'cargo', 'multiple' => 'multiple' ]) !!}

                </div>

                <div class="form-group">
                    <label for="id">Horas</label>

            {!! Form::text('horas', null, ['class' => 'form-control','name'=>'horas']) !!}

                </div>

                 <div class="form-group">
                    <label for="id">Valor</label>

            {!! Form::text('valor', null, ['class' => 'form-control','name'=>'valor']) !!}

                </div>


                <div class="form-group">
                    <label for="id">Activo</label>
                    {!! Form::select('activo',[ '1'=>'Activo', '0' =>'Inactivo'],null,['class'=> 'form-control','id' => 'activo','name'=>'activo'] )!!}
                </div>


                <center><button type="submit" class="btn btn-primary" >Guardar</button>
                    <button type="reset" class="btn btn-danger">Borrar</button></center><p>

                        {!! Form::close() !!}


                    </div>
                </div>

            </div>
        </div>
