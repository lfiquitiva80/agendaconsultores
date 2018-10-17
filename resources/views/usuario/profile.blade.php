<div class="modal fade" id="user_profile">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Bienvenido a su Perfil</h4>
      </div>
      <div class="modal-body">

        <?php $usuario= \App\User::find(Auth::User()->id);?>

        <form class="" action="{{route('profile')}}"   method="post" id="formUserEdit" enctype="multipart/form-data">

          {{method_field('patch')}}
          {{csrf_field()}}

          <input type="hidden" id="id"  name="id" value="{{$usuario->id}}">


      <img  src="{{$usuario->avatar}}" style="width:140px; height:140px; position:absolute; top:10px; left:10px; border-radius:50%">

</a>

<br><br><br><br><br><br><br><br>
{!!   Form::file('avatar')!!}

          <div class="form-group">
            <label for="id">Nombre</label>
            {!! Form::text('name',$usuario->name,['class' => 'form-control', 'placeholder' => 'Nombre completo','name'=>'name','id'=>'name']) !!}
          </div>

         <div class="form-group">
            <label for="id">Contraseña </label>
            <input  type="password" class="form-control" name="password" placeholder="Contraseña">
          </div>

            <div class="form-group">
                    <label for="id">Desea recibir notificaciones de correo</label>
                    {!! Form::select('activo',[ '1'=>'Si', '0' =>'No'],$usuario->notificacion,['class'=> 'form-control','id' => 'notificacion','name'=>'notificacion'] )!!}
                </div> 


          <center><button type="submit" class="btn btn-primary" >Actualizar mi Perfil</button>
            <button type="button" class="btn btn-default "data-dismiss="modal" >Cerrar</button></center><p>

            </form>


          </div>
        </div>

      </div>
    </div>

