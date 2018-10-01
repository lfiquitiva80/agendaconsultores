{!! Form::open(['route' => ['actividad_cargo.destroy', $row->id],'method'=>'DELETE']) !!}


<button class='btn btn-danger' onclick="return confirm('Esta seguro de Eliminar el actividad_cargo')"><i class="fa fa-trash" aria-hidden="true"></i> </button>
{!! Form::close() !!}
