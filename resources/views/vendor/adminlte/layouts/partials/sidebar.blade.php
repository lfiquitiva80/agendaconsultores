<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
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
            <li class="active"><a href="{{ url('home') }}"><i class="fa fa-home" aria-hidden="true"></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>

            <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-tachometer" aria-hidden="true"></i></i> <span> Dashboard</span></a></li>
            <li><a href="{{ route('usuario.index') }}"><i class="fa fa-user-circle" aria-hidden="true"></i> <span> Usuarios</span></a></li>
            <li><a href="{{ route('clientes.index') }}"><i class="fa fa-users" aria-hidden="true"></i> <span> Clientes</span></a></li>
            <li><a href="{{ route('perfil.index') }}"><i class="fa fa-address-card" aria-hidden="true"></i><span> Perfil</span></a></li>
            <li><a href="{{ route('citas.index') }}"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <span> Citas</span></a></li>
            <li><a href="{{ route('cargo.index') }}"><i class="fa fa-id-badge" aria-hidden="true"></i> <span> Cargos</span></a></li>
            <li><a href="{{ route('actividad.index') }}"><i class="fa fa-globe" aria-hidden="true"></i> <span> Actividad</span></a></li>
            <li><a href="{{ route('compromisos.index') }}"><i class="fa fa-commenting-o" aria-hidden="true"></i> <span> Compromisos</span></a></li>
            <li><a href="{{ route('estado_cita.index') }}"><i class="fa fa-hourglass-start" aria-hidden="true"></i> <span> Estado Cita</span></a></li>
            <li><a href="{{ route('lugar.index') }}"><i class="fa fa-map-marker" aria-hidden="true"></i> <span> Lugar</span></a></li>


            
            <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> <span> Calendario Tributario</span></a></li>
            <li><a href="/logs"><i class="fa fa-sun-o" aria-hidden="true"></i> <span> Logs de Sistema</span></a></li>

            <li class="treeview">
                <a href="#"><i class="fa fa-file-excel-o" aria-hidden="true"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
