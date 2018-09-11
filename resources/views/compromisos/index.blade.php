@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')



  <div class="panel-body">

<div class="container">
{!! Form::open(['route' => 'compromisos.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="nombre" id="nombre">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>REGISTROS DE COMPROMISO</h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#crear_compromisos'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear compromisos</a>

  @include('compromisos.create')

  @include('compromisos.edit')




<p>
<div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
      <td>id_compromisos</td>
      <td>descripcion_compromisos</td>
       <td>  Acción </td>



    </tr>
  </thead>
  <tbody>

  @foreach($compromisos as $row)
    <tr>



          <td>{{$row->id}}</td>
          <td>{{$row->descripcion_compromisos}}</td>
         

          <td><a   data-toggle="modal" data-target="#editar_compromisos" data-id="{{$row->id}}"
            data-descripcion_compromisos="{{$row->descripcion_compromisos}}"
            class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>

            <td>@include('compromisos.destroy')</td>
          
    </tr>
  </tbody>

  @endforeach


</table>
</div>

<center>{{ $compromisos->links() }}</center>

</div>

</div>
</div>



@endsection
