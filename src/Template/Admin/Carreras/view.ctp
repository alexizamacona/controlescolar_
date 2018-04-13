<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pelicula $pelicula
 */
?>
<div class="row">
    <div class="card-panel">

<div class="carreras view large-9 medium-8 columns content">
    <table class="vertical-table">
        <tr>
        <th scope="row"><?= __('ID') ?></th>
            <td><?= h($carrera->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($carrera->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Duracion') ?></th>
            <td><?= h($carrera->duracion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modalidad') ?></th>
            <td><?= h($carrera->modalidad) ?></td>
        </tr>
    </table>

    </div>
</div>
</div>