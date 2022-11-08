
<div class="register-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="../../index2.html" class="h1"><b>Mi Prode</b></a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Crear cuenta</p>

            <form action="<?= site_url('/new-user')?>" method="POST" id="quickForm">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nombre"  name="nombre" id="nombre"  required oninvalid="setCustomValidity('Campo vacio')">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Apellido"  name="apellido" id="apellido" required oninvalid="setCustomValidity('Campo vacio')">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email"  name="email" id="email" required oninvalid="setCustomValidity('Campo vacio')">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="DNI"  name="dni" id="dni"  required oninvalid="setCustomValidity('Campo vacio')">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fa-solid fa-id-card-clip"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                        <div class="input-group date" id="reservationdate" data-target-input="nearest" >
                            <input  type="date" class="form-control datetimepicker-input"  name="fecha_nacimiento" id="fecha_nacimiento" data-target="#reservationdate"/>
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker" >
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="User" name="nombre_usuario" id="nombre_usuario" required oninvalid="setCustomValidity('Campo vacio')">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fa-solid fa-id-card-clip"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Contraseña"  name="contraseña" id="contraseña" required oninvalid="setCustomValidity('Campo vacio')">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fa-solid fa-id-card-clip"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                                Acepto los <a href="#">terminos</a>
                            </label>
                        </div>
                    </div>

                </div>
                <!-- /.col -->
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Siguiente</button>
                </div>
                <!-- /.col -->
            </form>
        <div style="align-content: center">
            <a href="<?php echo base_url('/login')?>" class="text-center">Login</a>
        </div>

        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->


</div>
