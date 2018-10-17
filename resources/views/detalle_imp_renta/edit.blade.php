
<div class="modal fade" id="editar_detalle_imp_renta">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ACTUALIZAR DETALLE DEVOLUCION IVA</h4>
            </div>
            <div class="modal-body">

                

                <form class="" action="{{route('detalle_imp_renta.update', 'id' )}}"   method="post" id="FormEditdetalle_imp_rentas">

                  {{method_field('patch')}}
                  {{csrf_field()}}

                  <input type="hidden" id="id"  name="id" value="">

                  <div class="form-group" >
                    <label for="id">Consecutivo Detalle</label>
                    {!! Form::number('cns_detalle', null,['class' => 'form-control', 'placeholder' => 'cns_detalle','name'=>'cns_detalle','id'=>'cns_detalle']) !!}
                </div>


                <div class="form-group" >
                    <label for="id">Código</label>
                    {!! Form::text('codigo', null,['class' => 'form-control', 'placeholder' => 'Digite el código','name'=>'codigo','id'=>'codigo']) !!}
                </div>

                <div class="form-group" >
                    <label for="id">Descripción</label>
                    {!! Form::text('descripcion', null,['class' => 'form-control', 'placeholder' => 'Digite descripcion','name'=>'descripcion','id'=>'descripcion']) !!}
                </div>

                @if (Auth::user()->perfil_usuario == 1)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Responsable</h3>
                    </div>
                    <div class="panel-body">
                      <div class="form-group">
                        <label for="id">Si es Responsable</label>
                        {!! Form::select('ressi',[ '1'=>'Si', '0' =>'No'],null,['class'=> 'form-control','name'=>'ressi','id'=>'ressi'] )!!}
                    </div>

                    <div class="form-group">
                        <label for="id">No es Responsable</label>
                        
                        {!! Form::select('ressi',[ '1'=>'Si', '0' =>'No'],null,['class'=> 'form-control','name'=>'resno','id'=>'resno'] )!!}
                    </div>

                    <div class="form-group">
                        <label for="id">No aplica el Responsable</label>
                        {!! Form::select('ressi',[ '1'=>'Si', '0' =>'No'],null,['class'=> 'form-control','name'=>'resna','id'=>'resna'] )!!}
                    </div>
                    
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Auditor</h3>
                </div>
                <div class="panel-body">

                    
                    <div class="form-group">
                        <label for="id">Si Auditor</label>
                        {!! Form::select('audsi',[ '1'=>'Si', '0' =>'No'],null,['class'=> 'form-control','name'=>'audsi','id'=>'audsi'] )!!}
                    </div>

                    <div class="form-group">
                        <label for="id">No Auditor</label>
                        
                        {!! Form::select('ressi',[ '1'=>'Si', '0' =>'No'],null,['class'=> 'form-control','name'=>'audno','id'=>'audno'] )!!}
                    </div>

                    <div class="form-group">
                        <label for="id">No aplica el Auditor</label>
                        {!! Form::select('ressi',[ '1'=>'Si', '0' =>'No'],null,['class'=> 'form-control','name'=>'audna','id'=>'audna'] )!!}
                    </div>


                    
                </div>
            </div>
            @elseif (Auth::user()->perfil_usuario == 2)

              <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Responsable</h3>
                    </div>
                    <div class="panel-body">
                      <div class="form-group">
                        <label for="id">Si es Responsable</label>
                        {!! Form::select('ressi',[ '1'=>'Si', '0' =>'No'],null,['class'=> 'form-control','name'=>'ressi','id'=>'ressi'] )!!}
                    </div>

                    <div class="form-group">
                        <label for="id">No es Responsable</label>
                        
                        {!! Form::select('ressi',[ '1'=>'Si', '0' =>'No'],null,['class'=> 'form-control','name'=>'resno','id'=>'resno'] )!!}
                    </div>

                    <div class="form-group">
                        <label for="id">No aplica el Responsable</label>
                        {!! Form::select('ressi',[ '1'=>'Si', '0' =>'No'],null,['class'=> 'form-control','name'=>'resna','id'=>'resna'] )!!}
                    </div>
                    
                </div>
            </div>
            @else

                <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Auditor</h3>
                </div>
                <div class="panel-body">

                    
                    <div class="form-group">
                        <label for="id">Si Auditor</label>
                        {!! Form::select('audsi',[ '1'=>'Si', '0' =>'No'],null,['class'=> 'form-control','name'=>'audsi','id'=>'audsi'] )!!}
                    </div>

                    <div class="form-group">
                        <label for="id">No Auditor</label>
                        
                        {!! Form::select('ressi',[ '1'=>'Si', '0' =>'No'],null,['class'=> 'form-control','name'=>'audno','id'=>'audno'] )!!}
                    </div>

                    <div class="form-group">
                        <label for="id">No aplica el Auditor</label>
                        {!! Form::select('ressi',[ '1'=>'Si', '0' =>'No'],null,['class'=> 'form-control','name'=>'audna','id'=>'audna'] )!!}
                    </div>


                    
                </div>
            </div>



            @endif
            

            


            
            
            

            


            <center><button type="submit" class="btn btn-primary" >Actualizar</button>
                <button type="button" class="btn btn-default "data-dismiss="modal" >Cerrar</button></center><p>

                </form>



            </div>
        </div>

    </div>
</div>
