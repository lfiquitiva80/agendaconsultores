{!! Form::open(['route' => ['pago_cliente.destroy', $row->id],'method'=>'DELETE']) !!}


<button class='btn btn-danger' onclick="return confirm('Esta seguro de Eliminar el pago_cliente')"><i class="fa fa-trash" aria-hidden="true"></i> </button>
{!! Form::close() !!}
