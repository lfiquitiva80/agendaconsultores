 <!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset(Auth::user()->avatar) }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p style="overflow: hidden;text-overflow: ellipsis;max-width: 160px;" data-toggle="tooltip" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
            </div>
        </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->

            @if (Auth::user()->perfil_usuario == 1)
            <li class="active"><a href="{{ url('home') }}"><i class="fa fa-home" aria-hidden="true"></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-tachometer" aria-hidden="true"></i></i> <span> Dashboard</span></a></li>

            <li><a href="{{ url('agendaconsultor') }}"><i class="fa fa-users" aria-hidden="true"></i> <span>Agenda Consultor</span></a></li>

            <li><a href="{{ url('adminitradordearchivos') }}"><i class="fa fa-folder-open-o" aria-hidden="true"></i> <span> Administrador de Archivos </span></a></li>



<!--
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <i class="fa fa-check-square-o" aria-hidden="true"></i> <span> Checklist</span></a></li>
                <span class="caret"></span>
            </button>


            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="background-color: #050810;">
                <li><a href="{{ route('encabezado_dev_iva.index') }}"><i class="fa fa-check-circle" aria-hidden="true"></i>  Devolución Iva</a></li>
                <li><a href="{{ route('encabezado_imp_ica.index') }}"><i class="fa fa-check-circle" aria-hidden="true"></i>  Ica</a></li>
                <li><a href="{{ route('encabezado_imp_iva.index') }}"><i class="fa fa-check-circle" aria-hidden="true"></i>  Iva</a></li>
                <li><a href="{{ route('encabezado_imp_renta.index') }}"><i class="fa fa-check-circle" aria-hidden="true"></i>  Renta</a></li>
                <li><a href="{{ route('encabezado_imp_reteica.index') }}"><i class="fa fa-check-circle" aria-hidden="true"></i>  Reteica</a></li>
                <li><a href="{{ route('encabezado_imp_retencion.index') }}"><i class="fa fa-check-circle" aria-hidden="true"></i>  Retención</a></li>
                <li><a href="{{ route('encabezado_informe.index') }}"><i class="fa fa-check-circle" aria-hidden="true"></i> Informe</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ route('plantilla_checklist.index') }}"><i class="fa fa-check-circle" aria-hidden="true"></i> Plantilla checklist</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ route('checklist.index') }}"><i class="fa fa-check-circle" aria-hidden="true"></i> Configuración Checklist</a></li>

            </ul>
        </div> -->

        <!-- <br>
        <div class="dropdown">
            <button class="btn btn-danger dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <i class="fa fa-database" aria-hidden="true"></i> Tablas Principales</span></a></li>
            <span class="caret"></span>
        </button>


        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="background-color: #050810;">
            <li><a href="{{ route('usuario.index') }}"><i class="fa fa-user-circle" aria-hidden="true"></i> <span> Usuarios</span></a></li>

            <li><a href="{{ route('clientes.index') }}"><i class="fa fa-users" aria-hidden="true"></i> <span> Clientes</span></a></li>

            <li><a href="{{ route('perfil.index') }}"><i class="fa fa-address-card" aria-hidden="true"></i><span> Perfil</span></a></li>

            <li><a href="{{ route('citas.index') }}"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <span> Citas</span></a></li>
            <li><a href="{{ route('cargo.index') }}"><i class="fa fa-id-badge" aria-hidden="true"></i> <span> Cargos</span></a></li>
            <li><a href="{{ route('actividad.index') }}"><i class="fa fa-globe" aria-hidden="true"></i> <span> Actividad</span></a></li>
            <li><a href="{{ route('compromisos.index') }}"><i class="fa fa-commenting-o" aria-hidden="true"></i> <span> Compromisos</span></a></li>

            <li><a href="{{ route('estado_cita.index') }}"><i class="fa fa-hourglass-start" aria-hidden="true"></i> <span> Estado Cita</span></a></li>
            <li><a href="{{ route('lugar.index') }}"><i class="fa fa-map-marker" aria-hidden="true"></i> <span> Lugar</span></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> <span> Calendario Tributario</span></a></li>


        </ul>
    </div>
 -->





          <li class="treeview">
                <a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> <span>Checklist</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                     <li><a href="{{ route('encabezado_dev_iva.index') }}"><i class="fa fa-check-circle" aria-hidden="true"></i>  Devolución Iva</a></li>
                <li><a href="{{ route('encabezado_imp_ica.index') }}"><i class="fa fa-check-circle" aria-hidden="true"></i>  Ica</a></li>
                <li><a href="{{ route('encabezado_imp_iva.index') }}"><i class="fa fa-check-circle" aria-hidden="true"></i>  Iva</a></li>
                <li><a href="{{ route('encabezado_imp_renta.index') }}"><i class="fa fa-check-circle" aria-hidden="true"></i>  Renta</a></li>
                <li><a href="{{ route('encabezado_imp_reteica.index') }}"><i class="fa fa-check-circle" aria-hidden="true"></i>  Reteica</a></li>
                <li><a href="{{ route('encabezado_imp_retencion.index') }}"><i class="fa fa-check-circle" aria-hidden="true"></i>  Retención</a></li>
                <li><a href="{{ route('encabezado_informe.index') }}"><i class="fa fa-check-circle" aria-hidden="true"></i> Informe</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ route('plantilla_checklist.index') }}"><i class="fa fa-check-circle" aria-hidden="true"></i> Plantilla checklist</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ route('checklist.index') }}"><i class="fa fa-check-circle" aria-hidden="true"></i> Configuración Checklist</a></li>
                </ul>
            </li>

          <li class="treeview">
                <a href="#"><i class="fa fa-database" aria-hidden="true"></i> <span>Tablas Principales</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu" id="treerevision">
            <li><a href="{{ route('usuario.index') }}"><i class="fa fa-user-circle" aria-hidden="true"></i> <span> Usuarios</span></a></li>

            <li><a href="{{ route('clientes.index') }}"><i class="fa fa-users" aria-hidden="true"></i> <span> Clientes</span></a></li>

            <li><a href="{{ route('perfil.index') }}"><i class="fa fa-address-card" aria-hidden="true"></i><span> Perfil</span></a></li>

            <li><a href="{{ route('citas.index') }}"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <span> Citas</span></a></li>
            <li><a href="{{ route('cargo.index') }}"><i class="fa fa-id-badge" aria-hidden="true"></i> <span> Cargos</span></a></li>
            <li><a href="{{ route('actividad.index') }}"><i class="fa fa-globe" aria-hidden="true"></i> <span> Actividad</span></a></li>
            <li><a href="{{ route('compromisos.index') }}"><i class="fa fa-commenting-o" aria-hidden="true"></i> <span> Compromisos</span></a></li>

            <li><a href="{{ route('estado_cita.index') }}"><i class="fa fa-hourglass-start" aria-hidden="true"></i> <span> Estado Cita</span></a></li>
            <li><a href="{{ route('lugar.index') }}"><i class="fa fa-map-marker" aria-hidden="true"></i> <span> Lugar</span></a></li>
            <li><a href="{{ route('empresa.index') }}"><i class="fa fa-industry" aria-hidden="true"></i> <span> Empresa</span></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> <span> Calendario Tributario</span></a></li>
                </ul>
            </li>
            <li><a href="{{ route('panel.index') }}"><i class="fa fa-file-excel-o" aria-hidden="true"></i> <span> Reportes</span></a></li>
            <li><a href="/log-viewer"><i class="fa fa-sun-o" aria-hidden="true"></i> <span> Logs de Sistema</span></a></li>

            @else
            <li class="active"><a href="{{ url('home') }}"><i class="fa fa-home" aria-hidden="true"></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>

            <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-tachometer" aria-hidden="true"></i></i> <span> Dashboard</span></a></li>

            <li><a href="{{ url('adminitradordearchivos') }}"><i class="fa fa-folder-open-o" aria-hidden="true"></i> <span> Administrador de Archivos </span></a></li>

            <li class="treeview">
                <a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> <span>Checklist</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                     <li><a href="{{ route('encabezado_dev_iva.index') }}"><i class="fa fa-check-circle" aria-hidden="true"></i>  Devolución Iva</a></li>
                <li><a href="{{ route('encabezado_imp_ica.index') }}"><i class="fa fa-check-circle" aria-hidden="true"></i>  Ica</a></li>
                <li><a href="{{ route('encabezado_imp_iva.index') }}"><i class="fa fa-check-circle" aria-hidden="true"></i>  Iva</a></li>
                <li><a href="{{ route('encabezado_imp_renta.index') }}"><i class="fa fa-check-circle" aria-hidden="true"></i>  Renta</a></li>
                <li><a href="{{ route('encabezado_imp_reteica.index') }}"><i class="fa fa-check-circle" aria-hidden="true"></i>  Reteica</a></li>
                <li><a href="{{ route('encabezado_imp_retencion.index') }}"><i class="fa fa-check-circle" aria-hidden="true"></i>  Retención</a></li>
                <li><a href="{{ route('encabezado_informe.index') }}"><i class="fa fa-check-circle" aria-hidden="true"></i> Informe</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ route('plantilla_checklist.index') }}"><i class="fa fa-check-circle" aria-hidden="true"></i> Plantilla checklist</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ route('checklist.index') }}"><i class="fa fa-check-circle" aria-hidden="true"></i> Configuración Checklist</a></li>
                </ul>
            </li>







            @endif





        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
