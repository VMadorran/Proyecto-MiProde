<div class="fase-container">
    <div class="col-md-12">
        <h4 class="modal-title" id="form-title" style="float: left">Alta de Fase</h4>
    </div>
    <form action="<?= site_url('/submit-fase')?>" method="POST" id="formulario-fase" style="width: 100%">
        <div class="form-row col-md-12">
            <input type="hidden" class="form-control" name="id" id="id">
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
                <input type="number" class="form-control" name="ranking_fifa" id="ranking_fifa" min="1" max="32">
            </div>
            <div class="form-group col-md-12">
                <label>Mundiales Jugados</label>
                <input type="number" class="form-control" name="mundiales_jugados" id="mundiales_jugados" min="0" required oninvalid="setCustomValidity('Debe contener un numero')">
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <input type="submit" name="submit" class="btn btn-primary" value="Guardar">
        </div>
    </form>
</div>
