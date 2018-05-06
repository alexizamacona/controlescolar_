    <h3><?= __('Grupos') ?></h3>
    <table >
        <thead>
            <tr>

                <th scope="col">Clave</th>
                <th scope="col">Materia</th>
                <th scope="col">Ver</th>
            </tr>
        </thead>
        <tbody>
                <?php foreach ($grupos as $grupo): ?>
            <tr>

                    <td><?=$grupo->clave?></td>
                    <td><?=$grupo->materia->name?></td>
                    <td><a href=<?="/profesor/grupos/view/$grupo->id"?>>Ver</a></td>
            </tr>
                <?php endforeach ?>
        </tbody>
    </table>