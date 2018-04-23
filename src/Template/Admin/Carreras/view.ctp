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
                <th scope="row"><?= __('Nombre') ?></th>
                <td><?= h($carrera->name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Duracion') ?></th>
                <td><?= h($carrera->duracion) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Modalidad') ?></th>
                <td><?= h($carrera->periodo->tipo) ?></td>
            </tr>
        </table>
        <br>
        <a class="waves-effect waves-light btn " href=<?="/admin/carreras/edit/$carrera->id"?>><i class="material-icons left">edit</i>Editar</a>
    </div>
</div>
</div>