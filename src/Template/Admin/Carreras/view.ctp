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
        <a class="waves-effect waves-light btn " href=<?="/admin/materias/add/$carrera->id"?>><i class="material-icons left">edit</i>Agregar </a>

    </div>
</div>
</div>

<div class="row">
    <div class="card-panel">
     <div class="carreras view large-9 medium-8 columns content">
        <table class="vertical-table">
            <tr>
                <th scope="row"><?= __('Lista de materias') ?></th>
                <td><?php foreach($carrera->materias as $m): ?>
                    <?=$m['grado']?>  
                    <a href="/admin/materias/view/<?=$m['id']?>"><?=$m['name']?></a>
                <?php endforeach; ?></td>
            </tr>
            <tr>
             

            </div>