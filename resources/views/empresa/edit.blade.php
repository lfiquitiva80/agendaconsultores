
<div class="modal fade" id="editar_empresa">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ACTUALIZAR</h4>
            </div>
            <div class="modal-body">

                

<form class="" action="{{route('empresa.update', 'id' )}}"   method="post" id="FormEditempresas" enctype="multipart/form-data">

  {{method_field('patch')}}
  {{csrf_field()}}

<input type="hidden" id="id"  name="id" value="">
<input type="hidden" id="logo2"  name="logo2" value="">

   <img  id="logo" style="width:140px; height:140px; position:absolute; top:10px; left:10px; border-radius:50%">

</a>

<br><br><br><br><br><br><br><br>

                <div class="form-group" >
                    <label for="id">Razón Social</label>
                    {!! Form::text('razon_social', null,['class' => 'form-control', 'placeholder' => 'razon_social','name'=>'razon_social','id'=>'razon_social']) !!}
                </div>

                <div class="form-group" >
                    <label for="id">nit</label>
                    {!! Form::number('nit', null,['class' => 'form-control', 'placeholder' => 'nit','name'=>'nit','id'=>'nit']) !!}
                </div>

                <div class="form-group" >
                    <label for="id">logo</label>
                    {!! Form::file('logo') !!}
                </div>

                <div class="form-group" >
                    <label for="id">Dirección</label>
                    {!! Form::text('direccion', null,['class' => 'form-control', 'placeholder' => 'direccion','name'=>'direccion','id'=>'direccion']) !!}
                </div>
                 <div class="form-group" >
                    <label for="id">Teléfono</label>
                    {!! Form::text('telefono', null,['class' => 'form-control', 'placeholder' => 'telefono','name'=>'telefono','id'=>'telefono']) !!}
                </div>
                 <div class="form-group" >
                    <label for="id">Pais</label>
                    {!! Form::text('pais', null,['class' => 'form-control', 'placeholder' => 'pais','name'=>'pais','id'=>'pais']) !!}
                </div>
                 <div class="form-group" >
                    <label for="id">Ciudad</label>
                    {!! Form::text('ciudad', null,['class' => 'form-control', 'placeholder' => 'ciudad','name'=>'ciudad','id'=>'ciudad']) !!}
                </div>

                 <div class="form-group" >
                    <label for="id">Celular</label>
                    {!! Form::text('celular', null,['class' => 'form-control', 'placeholder' => 'celular','name'=>'celular','id'=>'celular']) !!}
                </div>

                <div class="form-group" >
                    <label for="id">Contacto</label>
                    {!! Form::text('contacto', null,['class' => 'form-control', 'placeholder' => 'contacto','name'=>'contacto','id'=>'contacto']) !!}
                </div>


    <center><button type="submit" class="btn btn-primary" >Actualizar</button>
    <button type="button" class="btn btn-default "data-dismiss="modal" >Cerrar</button></center><p>

</form>



  </div>
</div>

</div>
</div>
