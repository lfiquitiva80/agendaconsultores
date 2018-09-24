<div class="modal fade" id="crear_pago_cliente">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">CREAR pago_cliente</h4>
            </div>
            <div class="modal-body">




{!! Form::open(['route' => 'pago_cliente.store', 'method'=>'POST','id'=>'FormCreatepago_clientes']) !!}


<div class="form-group">
    <label for="id">empresa</label>
    {!! Form::select('cliente_pago', $clientes, $id, ['class' => 'form-control', 'placeholder' => 'Seleccione la Empresa... ','name'=>'cliente_pago','required']) !!} 
    
</div>

<div class="form-group">
    <label for="id">Fecha de Pago Cliente </label>
    {!! Form::date('fecha_pago_cliente', \Carbon\Carbon::now(), ['class' => 'form-control', 'placeholder' => 'Seleccione la Empresa... ','name'=>'fecha_pago_cliente','required']) !!} 
    
</div>

<div class="form-group">
    <label for="id">Valor Pago Cliente </label>
    {!! Form::number('valor_pago_cliente', null, ['class' => 'form-control', 'placeholder' => 'Seleccione la Empresa... ','name'=>'valor_pago_cliente','min' => '0','required']) !!} 
    
</div>

    <center><button type="submit" class="btn btn-primary" >Enviar</button>
    <button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>

</div>
</div>
