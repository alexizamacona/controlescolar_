<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div id="test-swipe-1" class="col s12 white">
    <div class="card-panel">
        <div class="users index large-9 medium-8 columns content-4">
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
                </tbody>
            </table>

        </div>
    </div>
    <a class="waves-effect waves-light btn" href="/admin"><i class="material-icons left">arrow_back</i>Regresar</a>
    <div class="right">
        <a class="waves-effect waves-light btn " href="/admin/grupos/add"><i class="material-icons left">add</i>Agregar grupo</a>
    </div>
</div>      
</div>