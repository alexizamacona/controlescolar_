    <h3><?= __('Grupos') ?></h3>
            <table >
                <thead>
                    <tr>

                        <th scope="col">Clave</th>
                        <th scope="col">Materia</th>
                        <th scope="col">Maestro</th>
                        <th scope="col">Ver</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($grupos as $grupo): ?>
                        <tr>

                            <td><?= h($grupo->clave) ?></td>
                            <td><?= h($grupo->materia->name) ?></td>
                            <td><?= h($grupo->user->nombre) ?></td>
                            <td>
                                <a href=<?="/admin/grupos/view/$grupo->id"?>>Ver</a>
                                <?= $this->Html->link(__('Editar'),['action' => 'edit', $grupo->id]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <a class="waves-effect waves-light btn " href=<?="/admin/Grupos"?>><i class="material-icons left">edit</i>Ver grupos </a>
                </tbody>
            </table>