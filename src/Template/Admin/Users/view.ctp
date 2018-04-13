<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
 $bandera = '';
?>
<div class="card-panel">
    <div class="users view large-9 medium-8 columns content">
        <h3 class="center"><?= h($user->nombre_completo) ?></h3>
        <table class="vertical-table">
               <tr>
                <th scope="col"><?= __('Matricula') ?></th>
                <th scope="col""><?= __('Username') ?></th>           
                <th scope="col""><?= __('Sexo') ?></th>
                <th scope="col""><?= __('Email') ?></th>
                <th scope="col"><?= __('Rol') ?></th>
                </tr>

                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->sexo) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->rol) ?></td>

        </table>
    </div>


    <div class="related">
        <h5><?= __('Grupos') ?></h5>
        <?php if (!empty($user->grupos)): ?>
            <table cellpadding="0" cellspacing="0" >
                <tr>
                    
                    
                    <th scope="col"><?= __('Clave') ?></th>
                    <th scope="col"><?= __('Turno') ?></th>
                    <th scope="col"><?= __('Carrera') ?></th>
                    
                </tr>
                <?php foreach ($user->grupos as $grupos): 
                        if($bandera != $grupos->clave){?>
                    <tr>
                        <td><?= $this->Html->link(h($grupos->clave),
                            ['controller' => 'grupos', 'action' => 'view', 
                            $grupos->id]);?></td>
                        <td><?= h($grupos->turno) ?></td>  
                        <td><?= h($grupos->materia->carrera->name) ?></td>
                        <?php $bandera = $grupos->clave; }?>

                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>
</div>



