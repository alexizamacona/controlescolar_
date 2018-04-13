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
                    <th scope="col"><?= $this->Paginator->sort('Matricula') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Nombre de usuario') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Nombre') ?></th>
                    <th scope="col" class="actions"><?= __('Actiones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <?php if($user->rol == 'estudiante' or $user->rol == 'Estudiante'){?>
                    <tr>
                        <td><?= $this->Number->format($user->id) ?></td>
                        <td><?= h($user->username) ?></td>
                        <td><?= h($user->nombre_completo) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Ver'), ['action' => 'ver', $user->id]) ?>
                            
                        </td>
                    </tr>
                    <?php  } endforeach; ?>
                </tbody>
        </table>
        <div class="paginator center">
            <ul class="pagination">

                <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('Siguiente') . ' >') ?>

            </ul>
        </div>
    </div>
</div>

<div class="card-panel">
    <div class="users index large-9 medium-8 columns content-4">
        <h3><?= __('Maestros') ?></h3>
        <table >
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('Matricula') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Nombre de usuario') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Nombre') ?></th>
                    <th scope="col" class="actions"><?= __('Actiones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <?php if($user->rol == 'profesor' or $user->rol == "Profesor"){?>
                    <tr>
                        <td><?= $this->Number->format($user->id) ?></td>
                        <td><?= h($user->username) ?></td>
                        <td><?= h($user->nombre_completo) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id]) ?>
                            
                        </td>
                    </tr>
                <?php  } endforeach; ?>
                </tbody>
        </table>
        <div class="paginator center">
            <ul class="pagination">

                <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('Siguiente') . ' >') ?>

            </ul>
        </div>
    </div>
</div>

<div class="card-panel">
    <div class="users index large-9 medium-8 columns content-4">
        <h3><?= __('Directores') ?></h3>
        <table >
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('Matricula') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Nombre de usuario') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Nombre') ?></th>
                    <th scope="col" class="actions"><?= __('Actiones') ?></th>
                </tr>
            </thead>    
            <tbody>
                <?php foreach ($users as $user): ?>
                    <?php if($user->rol == 'director' or $user->rol == 'Director'){?>
                    <tr>
                        <td><?= $this->Number->format($user->id) ?></td>
                        <td><?= h($user->username) ?></td>
                        <td><?= h($user->nombre_completo) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id]) ?>
                           
                        </td>
                    </tr>
                    <?php  } endforeach; ?>
                </tbody>
        </table>
        <div class="paginator center">
            <ul class="pagination">

                <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('Siguiente') . ' >') ?>

            </ul>
        </div>
    </div>
</div>