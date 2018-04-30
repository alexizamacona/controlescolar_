<?php

?>

<?php
?>



<ul id="tabs-swipe-demo" class="tabs">
    <li class="tab col s3"><a href="#test-swipe-1">Semestral</a></li>
    <li class="tab col s3"><a href="#test-swipe-3">Cuatrimestral</a></li>
</ul>
<div id="test-swipe-1" class="col s12 white">
    <div class="card-panel">
        <div class="users index large-9 medium-8 columns content-4">
            <h3><?= __('Carreras Semestrales') ?></h3>
            <table >
                <thead>
                    <tr>
                        <th scope="col">Nombre de la carrera</th>
                        <th scope="col" class="actions"><?= __('Acciones') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($carreras as $carrera): ?>
                        <?php if($carrera->periodo_id=="2"){?>
                        <tr>
                            <td><?=h($carrera->name) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Ver'), ['action' => 'view', $carrera->id]) ?>
                                <?= $this->Html->link(__('Editar'),['action' => 'edit', $carrera->id]) ?>
                            </td>
                        </tr>
                        <?php  } endforeach; ?>
                    </tbody>
                </table>
                <a class="btn" href="/admin/carreras/add">
                    AGREGAR
                </a>
            </div>
        </div>
    </div>



    <div id="test-swipe-3" class="col s12 white">
        <div class="card-panel">
            <div class="users index large-9 medium-8 columns content-4">
                <h3><?= __('Carreras Cuatrimestrales') ?></h3>
                <table >
                    <thead>
                        <tr>
                            <th scope="col">Nombre de la carrera</th>
                            <th scope="col" class="actions"><?= __('Acciones') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($carreras as $carrera): ?>
                            <?php if($carrera->periodo_id =='1'){?>
                            <tr>
                                <td><?= h($carrera->name)?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $carrera->id]) ?>
                                    <?= $this->Html->link(__('Editar'),['action' => 'edit', $carrera->id]) ?>
                                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $carrera->id], ['confirm' => __('¿deseas borrar '.$carrera->name.'? al hacerlo sera de forma permanente.', $carrera->id)]) ?>
                                </td>
                            </tr>
                            <?php  } endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
