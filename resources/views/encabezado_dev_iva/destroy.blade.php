{!! Form::open(['route' => ['encabezado_dev_iva.destroy', $row->id],'method'=>'DELETE']) !!}


<button class='btn btn-danger' onclick="return confirm('Esta seguro de Eliminar el encabezado_dev_iva')"><i class="fa fa-trash" aria-hidden="true"></i> </button>
{!! Form::close() !!}
