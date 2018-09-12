<div class="modal fade" id="crear_compromisos_cliente">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">CREAR COMPROMISOS CLIENTES</h4>
            </div>
            <div class="modal-body">




{!! Form::open(['route' => 'compromisoscliente.store', 'method'=>'POST','id'=>'FormCreatecompromisos_cliente']) !!}


<div class="form-group">
    <label for="id">empresa</label>
    {!! Form::select('id_empresa', $clientes, $id, ['class' => 'form-control','name'=>'id_empresa']) !!} 

    
</div>
<div class="form-group">
    <label for="id">Compromisos</label>
    {!! Form::select('id_compromiso', $compromisos, null, ['class' => 'form-control', 'placeholder' => 'Seleccione el compromiso... ','name'=>'id_compromiso']) !!} 
    
</div>

<div class="form-group">
    <label for="id">Periodo</label>
    {!! Form::select('id_periodo', $periodo, null, ['class' => 'form-control', 'placeholder' => 'Seleccione el Periodo... ','name'=>'id_periodo']) !!} 
    
</div>



</script>

    <center><button type="submit" class="btn btn-primary" >Enviar</button>
    <button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}

<!-- <p id="valorempresa"></p> -->



   <!--  <div class="panel-footer">
        
        <div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
  
      <td>Cliente</td>
      <td>Compromisos</td>
      <td>Periodos</td>

       <td>  Acción </td>



    </tr>
  </thead>
  <tbody>

  @foreach($compromisos_clientes as $row)
    <tr>

          

        
          <td>{{$row->clientes->nombre_cliente}}</td>
          <td>{{$row->compromiso->descripcion_compromisos}}</td>
          <td>{{$row->periodos->descripcion_periodo}}</td>
          <td>@include('compromisoscliente.destroy')</td>
          
    </tr>
  </tbody>

  @endforeach


</table>
</div>

    </div> -->
</div>

  </div>
</div>

</div>
</div>
