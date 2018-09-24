
<div class="modal fade" id="editar_pago_cliente">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ACTUALIZAR</h4>
            </div>
            <div class="modal-body">

                

<form class="" action="{{route('pago_cliente.update', 'id' )}}"   method="post" id="FormEditpago_clientes">

  {{method_field('patch')}}
  {{csrf_field()}}

<input type="hidden" id="id"  name="id" value="">

<div class="form-group">
    <label for="id">empresa</label>
    {!! Form::select('cliente_pago', $clientes, null, ['class' => 'form-control', 'placeholder' => 'Seleccione la Empresa... ','name'=>'cliente_pago','id'=>'cliente_pago','required']) !!} 
    
</div>

<div class="form-group">
    <label for="id">Fecha de Pago Cliente </label>
    {!! Form::date('fecha_pago_cliente', \Carbon\Carbon::now(), ['class' => 'form-control', 'placeholder' => 'Seleccione la Empresa... ','name'=>'fecha_pago_cliente','id'=>'fecha_pago_cliente','required']) !!} 
    
</div>

<div class="form-group">
    <label for="id">Valor Pago Cliente </label>
    {!! Form::number('valor_pago_cliente', null, ['class' => 'form-control', 'placeholder' => 'Seleccione la Empresa... ','name'=>'valor_pago_cliente','min' => '0','id'=>'valor_pago_cliente','required']) !!} 
    
</div>


    <center><button type="submit" class="btn btn-primary" >Enviar</button>
    <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>

</form>



  </div>
</div>

</div>
</div>
