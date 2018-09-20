{!! Form::open(['route' => ['cargo.destroy', $row->id],'method'=>'DELETE']) !!}


<button class='btn btn-danger' onclick="return confirm('Esta seguro de Eliminar el cargo')"><i class="fa fa-trash" aria-hidden="true"></i> </button>
{!! Form::close() !!}
