<?php
$modalidad = [
'cuatrimestral'=> 'Cuatrimestral',
'semestral'=> 'Semestral',
]
?>
<div class="Carreras form large-10 medium-10 columns content">
    <?= $this->Form->create($carrera) ?>
    <fieldset>
        <legend><?= __('REGISTRAR CARRERA') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('duracion');
            echo $this->Form->control('modalidad',['options'=>$modalidad]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Crear'),["class"=>"btn"]) ?>
    <?= $this->Form->end() ?>
</div>