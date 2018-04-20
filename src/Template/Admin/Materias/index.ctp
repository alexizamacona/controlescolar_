<div class="materias index large-9 medium-8 columns content">
    <h3><?= __('Materias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <THEAD>
            <td>ID</td>
            <td>NAME</td>
            <td>CARRERA</td>
            <td>GRADO</td>
            <td>CREDITOS</td>
        </THEAD>
        <tbody>
            <?php foreach ($materias as $materia): ?>
            <tr>
                <td><a href="/admin/materias/view/<?=$materia['id']?>"><?= $this->Number->format($materia->id) ?></td>
                <td><?= h($materia->name) ?></td>
                <td><?= h($materia->carrera_id) ?></td>
                <td><?= $this->Number->format($materia->grado) ?></td>
                <td><?= $this->Number->format($materia->creditos) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>   
</div>