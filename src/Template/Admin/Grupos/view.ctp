<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pelicula $pelicula
 */
?>
        <div class="carreras view large-9 medium-8 columns content">
<div class="row">
    <div class="card-panel">
        <h4><th scope="row"><?= __('Grupo') ?></th>   <?= h($grupo->id) ?></h4>
        <table class="vertical-table">
                <tr>
                    <th scope="row"><?= __('Duracion') ?></th>
                    <td><?= h($grupo->materia_id) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Clave') ?></th>
                    <td><?= h($grupo->clave) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Turno') ?></th>
                    <td><?= h($grupo->turno) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('user_id') ?></th>
                    <td><?= h($grupo->user_id) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('periodo_id') ?></th>
                    <td><?= h($grupo->periodo_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
