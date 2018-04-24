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

                    <th scope="col">Nombre de la materia</th>
                    <th scope="col">Duración</th>   
                    <th scope="col">Modalidad</th>
                    <th scope="col" class="actions"><?= __('Actiones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($carreras as $carrera): ?>
                    <tr>

                        <td><?= h($carrera->name)?></td>
                        <td><?= h($carrera->duracion)?> modulos</td>
                        <td><?= h($carrera->modalidad)?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Ver'), ['action' => 'view', $carrera->id]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
        </table>

    </div>
</div>  
     <a class="btn-floating btn-large waves-effect waves-light  teal accent-4 right" href="/admin/carreras/add"><i class="material-icons">add</i></a>