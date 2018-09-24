{!! Form::open(['route' => ['plantilla_checklist.destroy', $row->id],'method'=>'DELETE']) !!}


<button class='btn btn-danger' onclick="return confirm('Esta seguro de Eliminar el plantilla_checklist')"><i class="fa fa-trash" aria-hidden="true"></i> </button>
{!! Form::close() !!}
