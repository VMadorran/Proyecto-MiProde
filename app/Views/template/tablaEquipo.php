<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <div class="card-tools">
          <div class="input-group input-group-sm col-md-12">
              <button type="button" class="btn btn-default col-md-3" data-toggle="modal" data-target="#modal-default">
                  Agregar Equipo
              </button>
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
              <div class="input-group-append">
                  <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                  </button>
              </div>
              <div class="modal fade" id="modal-default">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                            <div class="col-md-12">
                                <h4 class="modal-title" style="float: left">Alta de Equipo</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                          </div>
                          <div class="modal-body">
                              <form action="<?php echo base_url('submit-equipo'); ?>" method="POST" id="formulario" style="width: 100%">
                                  <div class="form-row col-md-12">
                                      <div class="form-group col-md-12">
                                          <label>Nombre</label>
                                          <input type="text" class="form-control" name="nombre" id="nombre" required oninvalid="setCustomValidity('Campo vacio')">
                                      </div>
                                      <div class="form-group col-md-12">
                                          <label>Mundiales ganados</label>
                                          <input type="number" class="form-control" name="mundiales_ganados" id="mundiales_ganados" min="0" required oninvalid="setCustomValidity('Debe contener un numero')">
                                      </div>
                                      <div class="form-group col-md-12">
                                          <label>Ranking FIFA</label>
                                          <input type="number" class="form-control" name="rancking_fifa" id="rancking_fifa" min="1" max="32">
                                      </div>
                                      <div class="form-group col-md-12">
                                          <label>Mundiales Jugados</label>
                                          <input type="number" class="form-control" name="mundiales_jugados" id="mundiales_jugados" min="0" required oninvalid="setCustomValidity('Debe contener un numero')">
                                      </div>
                                  </div>
                              </form>
                              <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                              <input type="submit"  name="submit" class="btn btn-primary" value="Guardar">
                          </div>
                      </div>
                      <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->
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
                <td><?= $e['rancking_fifa'] ?></td>
                <td><?= $e['mundiales_jugados'] ?></td>
                <td>
                  <a href="<?php echo base_url('delete/'.$e['id']);?>" onclick="return bajaEquipo()"><i class="fa-solid fa-trash-can"></i></a>
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
