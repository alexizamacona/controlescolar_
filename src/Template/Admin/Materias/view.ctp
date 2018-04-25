<div class="row">
    <div class="col s6">
        <div class="card-panel">
           <h5> Name:</h5> <?=$materia['name']?><br>
            <h5>Carrera:</h5><?=$materia['carrera']['name']?><br>
            <h5>Grado:</h5><?=$materia['grado']?><br>
            <h5>Creditos:</h5><?=$materia['creditos']?><br>
            <h5>Grupos:</h5>
            <?php foreach ($materia['grupos'] as $g):?>
            <tr>
               <a href="/admin/grupos/view/<?=$g['id']?>"> <?=$g['clave']?><br></a>
            </tr>
            <?php endforeach; ?>
        </div>
	</div>
</div>
<a class="btn" href="/admin/materias/index">
    REGRESAR
</a>           