<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    	<?php $empresa =  \App\empresa::first();?>
        <img src="{{asset($empresa->logo)}}"/> {{$empresa->razon_social}}
        <small>@yield('contentheader_description')</small>
    </h1>

	@include('usuario.profile')

    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
        <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
    </ol>
</section>