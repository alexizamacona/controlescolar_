<h2>Bienvenido <?= h($yo->nombre_completo)?></h2>
<div class="card-panel">
<h6>Lista de carreras<h6/><br>
<?php foreach($Carreras as $carrera): ?>
                  
                <?=$carrera['name']?>
                <br>
            <?php endforeach; ?>
</div>