<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 300px;">
        <h1> <?= $titulo ?> </h1>
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th style="visibility: hidden;">Id</th>
              <th>Nombre</th>
              <th>Mundiales ganados</th>
              <th>Ranking FIFA</th>
              <th>Mundiales Jugados</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($equipos as $e) : ?>
              <tr>
                <td style="visibility: hidden;"><?= $e['id'] ?></td>
                <td><?= $e['nombre'] ?></td>
                <td><?= $e['mundiales_ganados'] ?></td>
                <td><?= $e['ranking_fifa'] ?></td>
                <td><?= $e['mundiales_jugados'] ?></td>
                <td>
                  <a href="<?php echo base_url('delete/'.$e['id']);?>" onclick="return baja()"><i class="fa-solid fa-trash-can"></i></a>
                  <a></a>
                  <a><a href="#"></a><i class="fa-solid fa-pen"></i></a>
                </td>
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
