<div class="row">
    <div class="col s6">
        <div class="card-panel">
         <h5>Nombre:</h5><?=$materia['name']?></a><br>
         <h5>Carrera:</h5>
         <a href="/director/carreras/view/<?=$materia['carrera']['id']?>">
            <?= h($materia['carrera']['name']) ?>
        </a>
        <h5>Grado:</h5><?=$materia['grado']?><br>
        <h5>Creditos:</h5><?=$materia['creditos']?><br>
        <h5>Grupos en los que esta la materia:</h5>
        <?php foreach ($materia['grupos'] as $g):?>
            <tr>
              <a href="/admin/grupos/view/<?=$g['id']?>"><?=$g['clave']?></a>
         </a>
         <br>
     </tr>
 <?php endforeach; ?>
    </div>
</div>
</div > 