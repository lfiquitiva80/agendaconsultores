@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')



  <div class="panel-body">
<a href="{{ URL::previous() }}" class="btn btn-warning "><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a><p>
<div class="container">
{!! Form::open(['route' => 'detalle_dev_iva.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">

    <input type="text" class="form-control" placeholder="Search" name="nombre" id="nombre">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>DETALLE DEVOLUCION IVA</h4></b></center>

<a class="btn btn-info" data-toggle="modal" href='#crear_detalle_dev_iva'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear detalle_dev_iva</a>

  @include('detalle_dev_iva.create')

  @include('detalle_dev_iva.edit')




<p>
<div class="table-responsive">
<table class="table table-hover" >
  <thead>

    <tr>
      <th colspan="4"></th>
      <th>Responsable&nbsp;&nbsp;&nbsp;&nbsp;Auditor</th>


    </tr>

    <tr>
      <th>id</th>
      <th>cns_detalle</th>
      <th>codigo</th>
      <th>descripcion</th>
      <th>Si&nbsp;&nbsp;&nbsp;&nbsp;No&nbsp;&nbsp;&nbsp;&nbsp;Na&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Si&nbsp;&nbsp;&nbsp;&nbsp;No&nbsp;&nbsp;&nbsp;&nbsp;Na
      </th>






    </tr>
  </thead>
  <tbody>



  @foreach($detalle_dev_iva as $row)
    <tr>




      <td>{{$row->id}}</td>
      <td>{{$row->cns_detalle}}</td>
      <td>{{$row->codigo}}</td>
      <td>{{$row->descripcion}}</td>

      <td  NOWRAP>


      {!! Form::open(['route' => ['detalle_dev_iva.update', $row->id],'method'=>'PATCH']) !!}
      <input type="hidden" id="id"  name="id" value="{{$row->id}}">

       @if (Auth::user()->perfil_usuario == 1)


      {!! Form::checkbox('ressi',  1, $row->ressi, []) !!}
      &nbsp;
      &nbsp;
      {!! Form::checkbox('resno',  1, $row->resno, []) !!}
      &nbsp;
      &nbsp;
      &nbsp;
      {!! Form::checkbox('resna',  1, $row->resna, []) !!}
      &nbsp;
      &nbsp;
      &nbsp;

      {!! Form::checkbox('audsi',  1, $row->audsi, []) !!}
      &nbsp;
      &nbsp;
      &nbsp;
      {!! Form::checkbox('audno',  1, $row->audno, []) !!}
      &nbsp;
      &nbsp;
      &nbsp;
      {!! Form::checkbox('audna',  1, $row->audna, []) !!}

       @elseif (Auth::user()->perfil_usuario == 2)

       {!! Form::checkbox('ressi',  1, $row->ressi, []) !!}
        &nbsp;
      &nbsp;
      {!! Form::checkbox('resno',  1, $row->resno, []) !!}
       &nbsp;
      &nbsp;
      &nbsp;
      {!! Form::checkbox('resna',  1, $row->resna, []) !!}
     &nbsp;
      &nbsp;
      &nbsp;
      {!! Form::checkbox('audsi',  1, $row->audsi, ['disabled']) !!}
       &nbsp;
      &nbsp;
      &nbsp;
      {!! Form::checkbox('audno',  1, $row->audno, ['disabled']) !!}
       &nbsp;
      &nbsp;
      &nbsp;
      {!! Form::checkbox('audna',  1, $row->audna, ['disabled']) !!}

      @else


      {!! Form::checkbox('ressi',  1, $row->ressi, ['disabled']) !!}
       &nbsp;
      &nbsp;

      {!! Form::checkbox('resno',  1, $row->resno, ['disabled']) !!}
       &nbsp;
      &nbsp;
      &nbsp;
      {!! Form::checkbox('resna',  1, $row->resna, ['disabled']) !!}
       &nbsp;
      &nbsp;
      &nbsp;

      {!! Form::checkbox('audsi',  1, $row->audsi, []) !!}
       &nbsp;
      &nbsp;
      &nbsp;
      {!! Form::checkbox('audno',  1, $row->audno, []) !!}
       &nbsp;
      &nbsp;
      &nbsp;
      {!! Form::checkbox('audna',  1, $row->audna, []) !!}
       &nbsp;
      &nbsp;
      &nbsp;

      @endif


          <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Actualizar</button>

       {!! Form::close() !!}


      </td>

    </tr>
  </tbody>


  @endforeach




</table>
</div>

</div>


</div>
</div>




@endsection
