<div class="modal fade" id="editar_usuario">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">ACTUALIZAR</h4>
      </div>
      <div class="modal-body">



        <form class="" action="{{route('usuario.update', 'id' )}}"   method="post" id="formUserEdit">

          {{method_field('patch')}}
          {{csrf_field()}}

          <input type="hidden" id="id"  name="id" value="">

          <div class="form-group">
            <label for="id">Nombre</label>
            {!! Form::text('name', null,['class' => 'form-control', 'placeholder' => 'Nombre completo','name'=>'name','id'=>'name']) !!}
          </div>

          <div class="form-group">
            <label for="id">Email</label>
            {!! Form::text('email', null,['class' => 'form-control', 'placeholder' => 'Email','name'=>'email','id'=>'email']) !!}

          </div>
          <div class="form-group">
            <label for="id">Contraseña </label>
            <input  type="password" class="form-control" name="password" placeholder="Contraseña">
          </div>

          <div class="form-group">
            <label for="id">Perfil de Usuario</label>

            {!! Form::select('perfil_usuario', $perfil,null, ['class' => 'form-control','name'=>'perfil_usuario','id'=>'perfil_usuario' ]) !!}             

          </div>
          <div class="form-group">
            <label for="id">Cargo del Usuario  <code>Tecla Control + clic derecho para Seleccionar</code></label>

            {!! Form::select('cargo', $cargo,null, ['class' => 'form-control','name'=>'cargo[]','id'=>'cargo', 'multiple' => 'multiple' ]) !!}             

          </div>

          <div class="form-group">
            <label for="id">Horas</label>

            {!! Form::text('horas', null, ['class' => 'form-control','name'=>'horas','id'=>'horas']) !!}             

          </div>

          <div class="form-group">
            <label for="id">Valor</label>

            {!! Form::text('valor', null, ['class' => 'form-control','name'=>'valor','id'=>'valor']) !!}             

          </div>
          <div class="form-group">
            <label for="id">Activo</label>
            {!! Form::select('activo',[ ''=>'SELECCIONE','1'=>'Activo', '0' =>'Inactivo'],null,['class'=> 'form-control','id' => 'activo','name'=>'activo'] )!!}
          </div>


          <center><button type="submit" class="btn btn-primary" >Enviar</button>
            <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>

            </form>


          </div>
        </div>

      </div>
    </div>
