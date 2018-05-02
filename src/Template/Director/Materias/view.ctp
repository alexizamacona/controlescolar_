<div class="row">
    <h3><?=$materia['name']?></h1>
    <h5>Grado:</h5><?=$materia['grado']?>
    <h5>Creditos:</h5><?=$materia['creditos']?>
   
</div>

<div class="row">
    <div class="card-panel">
        <h5>Grupos:</h5>
        <?php foreach ($materia['grupos'] as $g):?>
            <tr>
             Clave: <a href="/director/grupos/view/<?=$g['id']?>"><?=$g['clave']?></a>

             Docente: <a href="/director/users/view/<?=$maestro[$g['user_id']]['id']?>"><?= h($maestro[$g['user_id']]['nombre']) ?>
             </a>
             <br>
         </tr>
     <?php endforeach; ?>
 </div>
</div>


</div >  





<div class="row">
    <div class="row col"><a href="/director/materias/index" class="btn">Regresar</a></div>
</div>