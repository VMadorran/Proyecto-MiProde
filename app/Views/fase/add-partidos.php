
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="">
                    <h1 style="font-size: 20px;font-weight: bold;color:grey;margin-bottom: 30px">
                        Partidos para agregar
                    </h1>
                    <div class="input-group input-group-sm" style="margin: 10px 0 10px 0">
                        <a class="btn btn-primary" href="<?php echo base_url('/table-fase')?>" role="button"
                           style="background-color: #f8f9fa; border-color: #ddd; color: #444;">Atrás</a>
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
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Local</th>
                            <th>Visitante</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($partidos as $p) : ?>
                            <tr>
                                <td style="visibility: hidden;"><?= $p['id'] ?></td>
                                <td><?= $p['fecha'] ?></td>
                                <td><?= $p['hora'] ?></td>
                                <td><?= $p['local'] ?></td>
                                <td><?= $p['visitante'] ?>
                                <td>
                                    <a href="<?php echo base_url('fase/add-partido/'. ($id).'/'.$p['id']); ?>">
                                    <i class="fa-sharp fa-solid fa-plus"></i></a></td>
                            </tr>
                        <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>

            <!-- /.card -->
        </div>
    </div>


