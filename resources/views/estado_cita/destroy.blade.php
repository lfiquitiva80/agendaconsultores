{!! Form::open(['route' => ['estado_cita.destroy', $row->id],'method'=>'DELETE']) !!}


<button class='btn btn-danger' onclick="return confirm('Esta seguro de Eliminar el estado_cita')"><i class="fa fa-trash" aria-hidden="true"></i> </button>
{!! Form::close() !!}
