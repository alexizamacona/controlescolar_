<?php

?>
<div class="carreras view large-9 medium-8 columns content">
    <div class="row">
        <div class="card-panel">
            <h4><th scope="row"><?= __('Grupo') ?></th>  </h4>
            <table>
                <tr>
                    <th scope="row"><?= __('Materia') ?></th>
                    <td><?= h($grupo->materia->name) ?></td>
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
                    <th scope="row"><?= __('Nombre del profesor') ?></th>
                    <td><?= h($grupo->user->nombre_completo) ?>  
                    </td>
                </tr>
                <tr> 
                    <td>
                        <div class = 'center'>
                            <?= $this->Html->link(__('Editar'),['action' => 'edit', $grupo->id]) ?>   
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
