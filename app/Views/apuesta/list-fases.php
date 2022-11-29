<div>
    <div class="mt-4">
        <h1 style="font-size: 20px;font-weight: bold;color:grey;margin-bottom: 30px">
            <? $titulo ?>
        </h1>
    </div>
    <div>
        <div class="col-sm-3" style="margin-right: 10px;">
            <?php foreach ($fases as $f): ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;"><?= $f['nombre'] ?></h5>
                        <div class="card partido-main-content">
                            <div class="partido-item-container">
                                <div class="partido-item">

                                </div>
                            </div>
                            <button class="time">
                                <a href="<?php echo base_url('apuesta/list-apuesta/'.$f['id']);?>"></a>
                                Apostar</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
