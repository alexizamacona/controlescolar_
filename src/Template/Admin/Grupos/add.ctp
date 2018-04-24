<?php
$turnos = [
    'matutino' => 'Matutino',
    'vespertino' => 'Vespertino',
];
?>
<div class="Grupos form large-10 medium-8 columns content">
    <?= $this->Form->create($grupo) ?>
    

    <legend><?= __('AGREGAR NUEVO GRUPO') ?></legend>
    <div class="row">
        <div class="card-panel col s12">

            <?php
            echo $this->Form->control('materia_id');
            echo $this->Form->control('turno',['options'=>$turnos]);
            echo $this->Form->control('periodo_id');
            echo $this->Form->control('user_id',['label'=>'Profesor de la materia']);
            ?>
        </div>
    </div>
    
    <?= $this->Form->button(__('Agregar'),["class"=>"btn green"]) ?>
    <?= $this->Form->end() ?>
</div>
