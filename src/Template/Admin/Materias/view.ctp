<div class="row">
    <div class="col s6">
        <div class="card-panel">
         <h5> Nombre:</h5> <?=$materia['name']?><br>
         <h5>Carrera:</h5>

         <a href="/admin/carreras/view/<?=$materia['carrera']['id']?>">
            <?= h($materia['carrera']['name']) ?>
        </a>
        <h5>Grado:</h5><?=$materia['grado']?><br>
        <h5>Creditos:</h5><?=$materia['creditos']?><br>
    </div>
</div>

<div class="col s6">
    <div class="card-panel">
        <h5>Grupos donde se imparte la materia:</h5>
        <?php foreach ($materia['grupos'] as $g):?>
            <tr>
             
             Maestro: <a href="/admin/users/view/<?=$maestro[$g['user_id']]['id']?>"><?= h($maestro[$g['user_id']]['nombre']) ?></a>
  
            Grupo: <a href="/admin/grupos/view/<?=$g['id']?>"><?=$g['clave']?></a><br>

         <br>
     </tr>
 <?php endforeach; ?>
</div>
<?= $this->Html->link(__('Asignar materia a un grupo'),['controller'=>'Grupos','action'=>'add', $materia['id']]) ?>
</div>
</div >  