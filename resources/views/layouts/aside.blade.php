<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="/">
            <div class="logo-img">
                <img src="{{asset('src/img/brand-white.svg')}}" class="header-brand-img" alt="lavalite" />
            </div>
            <span class="text">SysLBL</span>
        </a>
        <button type="button" class="nav-toggle">
            <i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i>
        </button>
        <button id="sidebarClose" class="nav-close">
            <i class="ik ik-x"></i>
        </button>
    </div>

    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">
                <div>
                    <div class="nav-lavel">Navegacion</div>
                    <div class="nav-item {{! Route::is('home') ?:  'active'}}">
                        <a href="/"><i class="ik ik-bar-chart-2"></i><span>Inicio</span></a>
                    </div>
                </div>

                <div>
                    <div class="nav-lavel">Estudiantes</div>
                    <div class="nav-item {{! Route::is('estudiantes.index') ?:  'active'}}">
                        <a href="{{route('estudiantes.index')}}"><i class="ik ik-bar-chart-2"></i><span>Lista de Estudiantes</span></a>
                    </div>
                    <div class="nav-item {{! Route::is('estudiantes.lista_foto') ?:  'active'}}">
                        <a href="{{route('estudiantes.lista_foto')}}"><i class="ik ik-bar-chart-2"></i><span>Faltantes por Foto</span></a>
                    </div>
                    <div class="nav-item {{! Route::is('estudiantes.create') ?:  'active'}}">
                        <a href="{{route('estudiantes.create', 1)}}"><i class="ik ik-bar-chart-2"></i><span>Registrar Estudiante</span></a>
                    </div>
                    <!--
                    <div class="nav-item has-sub {{! Route::is('estudiantes.create') ?:  'active open'}}">
                        <a href="#"><i class="ik ik-gitlab"></i><span>Registrar Estudiante</span></a>
                        <div class="submenu-content">
                            <a href="{{route('estudiantes.create', 1)}}" class="menu-item {{! Route::is('estudiantes.create') ?:  'active'}}">Primer año</a>
                        </div>
                    </div>-->
                </div>

            </nav>
        </div>
    </div>
</div>