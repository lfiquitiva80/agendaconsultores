<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <img src="{{asset('/img/coorporativo.jpeg')}}"/>@yield('contentheader_title', 'Consultores Group')
        <small>@yield('contentheader_description')</small>
    </h1>

	

    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
        <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
    </ol>
</section>