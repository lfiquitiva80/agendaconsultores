{!! Form::open(['route' => ['encabezado_informe.destroy', $row->id],'method'=>'DELETE']) !!}


<button class='btn btn-danger' onclick="return confirm('Esta seguro de Eliminar el encabezado_informe')"><i class="fa fa-trash" aria-hidden="true"></i> </button>
{!! Form::close() !!}
