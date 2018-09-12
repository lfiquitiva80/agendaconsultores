
<div class="modal fade" id="editar_compromisos_cliente">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ACTUALIZAR</h4>
            </div>
            <div class="modal-body">

                

<form class="" action="{{route('compromisoscliente.update', 'id' )}}"   method="post" id="FormEditcompromisos_cliente">

  {{method_field('patch')}}
  {{csrf_field()}}

<input type="hidden" id="id"  name="id" value="">

<div class="form-group">
    <label for="id">empresa</label>
    {!! Form::select('id_empresa', $clientes, null, ['class' => 'form-control', 'name'=>'id_empresa','id'=>'id_empresa']) !!} 
    
</div>
<div class="form-group">
    <label for="id">Compromisos</label>
    {!! Form::select('id_compromiso', $compromisos, null, ['class' => 'form-control', 'placeholder' => 'Seleccione el compromiso... ','name'=>'id_compromiso','id'=>'id_compromiso']) !!} 
    
</div>

<div class="form-group">
    <label for="id">Periodo</label>
    {!! Form::select('id_periodo', $periodo, null, ['class' => 'form-control', 'placeholder' => 'Seleccione el Periodo... ','name'=>'id_periodo','id'=>'id_periodo']) !!} 

</div>



    <center><button type="submit" class="btn btn-primary" >Enviar</button>
    <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>

</form>



  </div>
</div>

</div>
</div>
