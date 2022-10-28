<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="">
                    <h1 style="font-size: 20px;font-weight: bold;color:grey;margin-bottom: 30px">
                        Listado de Usuarios
                    </h1>
                    <div class="input-group input-group-sm" style="margin: 10px 0 10px 0">
                        <button type="button" class="btn btn-default col-md-2 float-left" data-toggle="modal" data-target="#modal-default">
                            Agregar Usuario
                        </button>
                        <input type="text" name="table_search"
                               style="margin-left: auto"
                               class="form-control col-md-3 float-right"
                               placeholder="Search">
                        <div class="input-group-append" style="height: 31px">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                        <tr>
                            <th style="visibility: hidden;">Id</th>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th>DNI</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Fecha de Nacimiento</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($usuarios as $u) : ?>
                            <tr>
                                <td style="visibility: hidden;"><?= $u['id'] ?></td>
                                <td><?= $u['nombre_usuario'] ?></td>
                                <td><?= $u['contraseña'] ?></td>
                                <td><?= $u['dni'] ?></td>
                                <td><?= $u['nombre'] ?></td>
                                <td><?= $u['apellido'] ?></td>
                                <td><?= $u['email'] ?></td>
                                <td><?= $u['fecha_nacimiento'] ?></td>
                                <td>
                                    <a href="<?php echo base_url('delete/'.$u['id']);?>"  onclick="return bajaUsuario()">
                                        <i class="fa-solid fa-trash-can"></i></a>

                                    <a href="#" onclick="actualizarUsuario(<?= $u['id']?>, '<?php echo $u['nombre_usuario'] ?>','<?php echo $u['contraseña'] ?>',
                                            '<?php echo $u['dni'] ?>','<?php echo $u['nombre'] ?>','<?php echo $u['apellido'] ?>',
                                            '<?php echo $u['email'] ?>', <?= $u['fecha_nacimiento'] ?>)">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="col-md-12">
                                <h4 class="modal-title" id="form-title" style="float: left">Alta de Usuario</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="modal-body">
                            <form action="<?= site_url('/submit-usuario')?>" method="POST" id="formulario" style="width: 100%">
                                <div class="form-row col-md-12">
                                    <input type="hidden" class="form-control" name="id" id="id">
                                    <div class="form-group col-md-12">
                                        <label>Nombre Usuario</label>
                                        <input type="text" class="form-control" name="nombre_usuario" id="nombre_usuario"
                                               required oninvalid="setCustomValidity('Campo vacio')">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Contraseña</label>
                                        <input type="text" class="form-control" name="contraseña" id="contraseña"
                                               required oninvalid="setCustomValidity('Debe contener un numero')">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>DNI</label>
                                        <input type="number" class="form-control" name="dni" id="dni">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" required name="nombre" id="nombre"
                                               oninvalid="setCustomValidity('Debe contener el nombre')">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Apellido</label>
                                        <input type="text" class="form-control" name="apellido" id="apellido"
                                               required oninvalid="setCustomValidity('Debe contener el apellido')">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email" id="email"
                                               required oninvalid="setCustomValidity('Debe contener un email')">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Fecha Nacimiento</label>
                                        <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento">
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <input type="submit" name="submit" class="btn btn-primary" value="Guardar">
                                </div>
                            </form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
            <!-- /.card -->
        </div>
    </div>
