<h2>Bienvenido <?= h($yo->nombre_completo)?></h2>
<div class="card-panel">
<h6 class="red-text">Lista de carreras<h6/><br>
<?php foreach($Carreras as $carrera): ?>

<a href="/director/carreras/View/<?=$carrera['id']?>"><?=$carrera['name']?></a>
<br>
<?php endforeach; ?>
</div>