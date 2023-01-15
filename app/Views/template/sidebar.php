<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">

        <span class="brand-text font-weight-light">Mi Prode</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"> <?= session()->nombre_usuario ?> </a>

            </div>
            <div style="float: right;margin-left: auto;padding-right: 10px">
                <a href="<?= base_url('/log-out')?>">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Buscar" aria-label="Buscar">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>


        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item" >
                    <a href = "<?= site_url('/list-equipo')?>" class="nav-link" >
                        <i class="nav-icon fa fa-users" ></i >
                        <p >
                    Equipos
                        </p >
                    </a >
                </li >
                <li class="nav-item">
                    <a href="<?= site_url('/list-partido')?>" class="nav-link">
                        <i class="nav-icon fa fa-futbol"></i>
                        <p>
                           Partidos
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url('/list-fase')?>" class="nav-link">
                        <i class="nav-icon fa fa-calendar-alt"></i>
                        <p>
                            Fases
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url('/list-torneo')?>" class="nav-link">
                        <i class="nav-icon fa fa-trophy"></i>
                        <p>
                            Torneos
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url('/list-usuario')?>" class="nav-link">
                        <i class="nav-icon fa fa-user-plus"></i>
                        <p>
                            Usuarios
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url('/fixture')?>" class="nav-link">
                        <i class="nav-icon fa fa-list"></i>
                        <p>
                           Fixture
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url('/torneos')?>" class="nav-link">
                        <i class="nav-icon fa fa-money-bill-wave"></i>
                        <p>
                            Apuestas
                        </p>
                    </a>
                </li>
            
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

</aside>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
