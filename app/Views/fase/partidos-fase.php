<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="">
                    <h1 style="font-size: 20px;font-weight: bold;color:grey;margin-bottom: 30px">
                        Partidos de la fase
                    </h1>
                    <div class="input-group input-group-sm" style="margin: 10px 0 10px 0">
                        <button type="button" class="btn btn-default col-md-2 float-left" data-toggle="modal" data-target="#modal-default">
                            Atras
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
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Local</th>
                            <th>Visitante</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($partidos as $p) : ?>
                            <tr>
                                <td style="visibility: hidden;"><?= $p['id_partido'] ?></td>
                                <td><?= $p['fecha'] ?></td>
                                <td><?= $p['hora'] ?></td>
                                <td><?= $p['local'] ?></td>
                                <td><?= $p['vistante'] ?></td>
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

