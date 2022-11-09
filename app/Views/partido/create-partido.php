<div class="card card-primary col-8" style="align-self: center">
    <div class="card-header">
        <h3 class="card-title">Alta Partido</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="<?= site_url('/new-partido') ?>" method="POST" id="formulario-partido">
        <div class="card-body">
            <div class="form-group">
                <input type="date" class="form-control" id="fecha" name="fecha">
            </div>
            <div class="form-group">
                <input type="time" class="form-control" id="hora" name="hora">
            </div>


        </div>
        <div>
            <div class="form-group">
                <select class="form-select" id="local" aria-label="Default select example" onchange="onLocalChange()">
                    <?php foreach ($equipos as $e) : ?>
                        <option id="id_local" name="id_local" value="<?= $e['id'] ?>"><?= $e['nombre'] ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <select class="form-select" id="visitante" aria-label="Default select example">
                    <option selected="">Equipo Visitante</option>
                    <?php foreach ($equipos as $e) : ?>
                        <option id="id_visitante" name="id_visitante" value="<?= $e['id'] ?>"><?= $e['nombre'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
</div>
<!-- /.card-body -->

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Guardar</button>
    <button onclick="" class="btn btn-primary">Cancelar</button>
    </form>
</div>
<!-- /.card -->