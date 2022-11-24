<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="">
                    <h1 style="font-size: 20px;font-weight: bold;color:grey;margin-bottom: 30px">
                        <? $titulo ?>
                    </h1>
                    <div class="input-group input-group-sm" style="margin: 10px 0 10px 0">
                        <button type="button" class="btn btn-default col-md-2 float-left" data-toggle="modal" data-target="#modal-default">
                            Agregar Apuesta
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
                            <th>Usuario</th>
                            <th>Partido</th>
                            <th>Resultado</th>
                            <th>Fecha</th>
                            <th>Operaciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($apuestas as $e) : ?>
                            <tr>
                                <td><?= $e['usuario'] ?></td>
                                <td><?= $e['partido'] ?></td>
                                <td><?= $e['resultado'] ?></td>
                                <td><?= $e['fecha'] ?></td>
                                <td>
                                    <a href="<?php echo base_url('partido/delete/'.$e['id']);?>" onclick="return deletePartido()"><i class="fa-solid fa-trash-can"></i></a>

                                    <a href="#<?php echo base_url('partido/delete/'.$e['id']);?>" onclick="actualizarPartido(<?= $e['id']?>, '<?php echo $e['fecha'] ?>', '<?php echo $e['hora'] ?>', '<?php echo $e['local'] ?>', '<?php echo $e['visitante'] ?>')">
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
                                <h4 class="modal-title" id="form-title" style="float: left">Alta de Apuesta</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="modal-body">
                            <form action="<?= site_url('/submit-apuesta')?>" id="formulario-partido" method="POST">

                                <input type="hidden" class="form-control" id="id" name="id">
                                <div class="form-group col-md-11 ml-1">
                                    <label selected="">Fase</label>
                                    <select class="form-select col-md-12" id="local_select"  name="local_select" aria-label="Default select example">
                                        <option selected="">--</option>
                                        <?php foreach ($fases as $f) : ?>
                                            <option id="id_local" name="id_local" value="<?php echo $f['id'] ?>"><?= $f['nombre'] ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-11 ml-2">
                                    <label selected="">Partido</label>
                                    <select class="form-select col-md-12" id="visitante_select" name="visitante_select" aria-label="Default select example">
                                        <option selected="">--</option>
                                        <?php foreach ($partidos as $p) : ?>
                                            <option id="<?php echo $p['nombre'] ?>" name="id_visitante" value="<?php echo $p['id'] ?>"><?= $p['nombre'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-11 ml-2">
                                    <label selected="">Resultado</label>
                                    <select class="form-select col-md-12" id="visitante_select" name="visitante_select" aria-label="Default select example">
                                        <option selected="">--</option>
                                        <?php foreach ($resultados as $r) : ?>
                                            <option id="<?php echo $r['descripcion'] ?>" name="id_visitante" value="<?php echo $r['id'] ?>"><?= $r['descripcion'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
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


