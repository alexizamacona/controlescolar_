<div class="row">
    <div class="col s12">
        <ul class="tabs">
            <?php foreach($carreras as $carrera):?>
                <li class="tab col s3"><a href=<?="#$carrera->id"?>><?=$carrera->name?></a></li>
            <?php endforeach?>
        </ul>
    </div>
    <?php foreach($carreras as $carrera):?>
        <div id=<?="$carrera->id"?>>
            <table cellpadding="0" cellspacing="0">
                <THEAD>
                    <td>NAME</td>
                    <td>GRADO</td>
                    <td>CREDITOS</td>
                </THEAD>
                <tbody>
                    <?php foreach($materias as $materia):?>
                        <?php if ($materia->carrera_id == $carrera->id){?>
                        <tr>
                            <td><a href="/admin/materias/view/<?=$materia->id?>"><?= h($materia->name) ?></a></td>
                            <td><?= $this->Number->format($materia->grado) ?></td>
                            <td><?= $this->Number->format($materia->creditos) ?></td>
                            <td><a href="/admin/materias/edit/<?=$materia->id?>">EDITAR</a></td>
                        </tr>
                        <?php }endforeach?>
                    </tbody>
                </table> 
            </div>
        <?php endforeach?>


    </div>

    <a class="btn" href="/admin/materias/add">
        AGREGAR
    </a>