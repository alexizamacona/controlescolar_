<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="card-panel">
    <div class="users index large-9 medium-8 columns content-4">
        <h3><?= __('Estudiantes') ?></h3>
        <table >
            <thead>
                <tr>

                    <th scope="col">Nombre de usuario</th>
                    <th scope="col">Nombre</th>
                    <th scope="col" class="actions"><?= __('Actiones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <?php if($user->rol == 'estudiante' or $user->rol == 'Estudiante'){?>
                    <tr>

                        <td><?= h($user->username) ?></td>
                        <td><?= h($user->nombre_completo) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id]) ?>
                            
                        </td>
                    </tr>
                    <?php  } endforeach; ?>
                </tbody>
        </table>

    </div>
</div>