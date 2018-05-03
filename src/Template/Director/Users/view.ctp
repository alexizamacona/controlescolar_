<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
$gruposal = $user->inscripciones;
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
    <?php if (!empty($user->inscripciones)): ?>
        <h5><?= __('Grupos') ?></h5>
        <table cellpadding="0" cellspacing="0" >
            <tr>


                <th scope="col"><?= __('Clave') ?></th>
                <th scope="col"><?= __('Turno') ?></th>
                <th scope="col"><?= __('Carrera') ?></th>

            </tr>
            <?php foreach ($gruposal as $g): ?>

                <tr>

                    <td><?= $this->Html->link(h($g->grupo->clave),
                        ['controller' => 'grupos', 'action' => 'view', 
                        $g->id]);?></td>
                        <td><?=$g->grupo->turno?></td>
                        <td><?= $this->Html->link(h($g->grupo->materia->carrera->name),
                            ['controller' => 'grupos', 'action' => 'view', 
                            $g->id]);?></td>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</div>
<div class="card-panel">
<h5>Grupos donde imparte la materia:</h5>
    <?php foreach ($user['grupos'] as $g):?>
        <tr>
           Grupo: <a href="/admin/grupos/view/<?=$g['id']?>"><?=$g['clave']?></a>
       </a>
       <br>
   </tr>
<?php endforeach; ?>
</div>
</div>
