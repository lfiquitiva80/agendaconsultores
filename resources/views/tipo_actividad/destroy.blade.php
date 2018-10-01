{!! Form::open(['route' => ['tipo_actividad.destroy', $row->id],'method'=>'DELETE']) !!}


<button class='btn btn-danger' onclick="return confirm('Esta seguro de Eliminar el tipo_actividad')"><i class="fa fa-trash" aria-hidden="true"></i> </button>
{!! Form::close() !!}
