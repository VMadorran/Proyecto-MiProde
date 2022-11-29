
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="../../index2.html" class="h1"><b>Mi Prode</b></a>
            <div style="padding: 15px">
                <span style="font-weight: bold">Iniciar Sesión</span>
            </div>
        </div>
        <div class="card-body">
            <p class="login-box-msg"></p>

            <form action="<?= site_url('/login-user')?>" method="POST" id="quickForm">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="User" id="nombre_usuario" name="nombre_usuario">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fa-solid fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Contraseña" id="contraseña" name="contraseña">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <!-- /.col -->
                    <div class="col-12" >
                        <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <p class="mb-0">
                <a href="<?php echo base_url('/signup')?>" class="text-center">Registrarme</a>
            </p>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
