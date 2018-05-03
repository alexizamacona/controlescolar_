<?php

?>
<div class="carreras view large-9 medium-8 columns content">
    <div class="row">
        <div class="card-panel">
            <h4><th scope="row"><?= __('Grupo') ?></th></h4>
            <table>
                <tr>
                    <th scope="row"><?= __('Nombre del profesor') ?></th>
                    <td><a href="/admin/users/view/<?=$grupo->user->id?>"><?= h($grupo->user->nombre_completo) ?>
                    </a>
                </td>
            </tr>
            <tr>
                <th scope="row"><?= __('Materia') ?></th>
                <td><a href="/admin/materias/view/<?=$grupo->materia->id?>"><?= h($grupo->materia->name) ?>
                </a>
            </td>
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

            <?php if($id_login == $grupo->user->id): ?>
            <td>
                <div class = 'center'>
                    <?= $this->Html->link(__('Asignar actividad'),['controller'=>'actividades','action' => 'crear', $grupo->id]) ?>  
                </div>
            </td>
            <?php endif; ?>
        </tr>
    </table>
</div>
</div>
</div>
