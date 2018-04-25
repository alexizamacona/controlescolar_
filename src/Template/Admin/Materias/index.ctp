<div class="materias index large-9 medium-8 columns content">
    <h3><?= __('Materias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <THEAD>
            <td>NAME</td>
            <td>CARRERA</td>
            <td>GRADO</td>
            <td>CREDITOS</td>
        </THEAD>
        <tbody>
            <?php foreach ($materias as $materia): ?>
            <tr>
                <td><a href="/admin/materias/view/<?=$materia['id']?>"><?= h($materia->name) ?></a></td>
                <td><?= h($materia['carrera']['name']) ?></td>
                <td><?= $this->Number->format($materia->grado) ?></td>
                <td><?= $this->Number->format($materia->creditos) ?></td>
                <td><a href="/admin/materias/edit/<?=$materia['id']?>">EDITAR</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>   
</div>
<a class="btn" href="/admin/materias/add">
    AGREGAR
</a>