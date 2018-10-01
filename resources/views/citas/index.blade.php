@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')



  <div class="panel-body">

<div class="container">
{!! Form::open(['route' => 'citas.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="nombre" id="nombre">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>REGISTROS DE CITAS</h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#crear_citas'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear citas</a>

  @include('citas.create')

  @include('citas.edit')




<p>
<div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
    <td>  id  </td>
    <td>  fecha_citas </td>
    <td>  lugar_citas </td>
    <td>  observacion_citas </td>
    <td>  empresa_citas </td>
    <td>  hora_citas  </td>
    <td>  asistio_citas </td>
    <td>  usuario_citas </td>
    <td>  hora_final_citas  </td>
    <td>  jornada_citas </td>
    <td>  estado_citas  </td>
    <td>  Acción </td>



    </tr>
  </thead>
  <tbody>

  @foreach($citas as $row)
    <tr>



          <td>{{$row->id}}</td>
          <td>{{$row->fecha_citas}}</td>
          <td>{{$row->lugar->descripcion_lugar}}</td>
          <td>{{$row->observacion_citas}}</td>
          <td>{{$row->clientes->nombre_cliente}}</td>
          <td>{{$row->hora_citas}}</td>
          <td><?php if ($row->asistio_citas==1) {
            echo "Si";
          } else {
            echo "No";

          } ?></td>
          <td>{{$row->usuarios->name}}</td>
          <td>{{$row->hora_final_citas}}</td>
          <td>{{$row->jornada->descripcion_jornada}}</td>
         
          <td>{{$row->estado->Estado}}</td>


           <td><a href="{{ $url = route('actavisita', $row->id) }}" class="btn bg-purple margin"><i class="fa fa-eye" aria-hidden="true"></i> Acta Visita</a></td>


          <!-- <td><a   data-toggle="modal" data-target="#editar_citas" data-id ="{{$row->id}}"
              data-fecha_citas ="{{$row->fecha_citas}}"
              data-lugar_citas ="{{$row->lugar_citas}}"
              data-observacion_citas ="{{$row->observacion_citas}}"
              data-empresa_citas ="{{$row->empresa_citas}}"
              data-hora_citas ="{{$row->hora_citas}}"
              data-asistio_citas ="{{$row->asistio_citas}}"
              data-usuario_citas ="{{$row->usuario_citas}}"
              data-hora_final_citas ="{{$row->hora_final_citas}}"
              data-jornada_citas ="{{$row->jornada_citas}}"
              data-actividad_citas ="{{$row->actividad_citas}}"
              data-estado_citas ="{{$row->estado_citas}}"
              data-compromiso_citas ="{{$row->compromiso_citas}}"

            class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></td> -->

            <td>@include('citas.destroy')</td>
          
    </tr>
  </tbody>

  @endforeach


</table>
</div>

<center>{{ $citas->links() }}</center>

</div>

</div>
</div>


@endsection
