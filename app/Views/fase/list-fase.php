<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="">
                    <h1 style="font-size: 20px;font-weight: bold;color:grey;margin-bottom: 30px">
                        Listado de Fases
                    </h1>
                    <div class="input-group input-group-sm" style="margin: 10px 0 10px 0">
                        <button type="button" class="btn btn-default col-md-2 float-left" data-toggle="modal" data-target="#modal-default">
                            Agregar Fase
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
                            <th>Nombre</th>
                            <th>Fecha inicio</th>
                            <th>Fecha fin</th>
                            <th></th>
                            <th></th>
                            <th></th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($fases as $f) : ?>
                            <tr>
                                <td style="visibility: hidden;"><?= $f['id'] ?></td>
                                <td><?= $f['nombre'] ?></td>
                                <td><?= $f['fecha_inicio'] ?></td>
                                <td><?= $f['fecha_fin'] ?></td>
                                <td>
                                    <a href="<?php echo base_url('/fase/delete/'.$f['id']); ?>" onclick= "return bajaFase()"><i class="fa-solid fa-trash-can"></i></a>

                                    <a href="#" onclick="actualizarFase(<?= $f['id']?>, '<?php echo $f['nombre'] ?>','<?php echo $f['fecha_inicio'] ?>', '<?php echo $f['fecha_fin'] ?>')">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="<?php echo base_url('/add-partidos/'.$f['id']); ?>">Agregar partido</a>
                                </td>
                                <td>
                                    <a href="<?php echo base_url('/get-partidos/'.$f['id']); ?>">Ver partidos</a>
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
                                <h4 class="modal-title" id="form-title" style="float: left">Alta de Fases</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="modal-body">
                            <form action="<?= site_url('/submit-fase')?>" method="POST" id="formulario" style="width: 100%">
                                <div class="form-row col-md-12">
                                    <input type="hidden" class="form-control" name="id" id="id">
                                    <div class="form-group col-md-12">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre"
                                               required oninvalid="setCustomValidity('Campo vacio')">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>Fecha Inicio</label>
                                        <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>Fecha Fin</label>
                                        <input type="date" class="form-control" name="fecha_fin" id="fecha_fin">
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
