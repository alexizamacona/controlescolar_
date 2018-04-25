<?php
$turnos = [
    'matutino' => 'Matutino',
    'vespertino' => 'Vespertino',
];
?>
<div class="card-panel">
    <?= $this->Form->create($grupo) ?>
    

    <legend><?= __('EDITAR GRUPO.') ?></legend><br>
    <div class="row">


            <?php
            echo $this->Form->control('materia_id');
            echo $this->Form->control('turno',['options'=>$turnos]);
            echo $this->Form->control('user_id',['label'=>'Profesor de la materia']);
            ?>

    </div>
    
    <?= $this->Form->button(__('Modificar'),["class"=>"btn green"]) ?>
    <?= $this->Form->end() ?>
</div>
