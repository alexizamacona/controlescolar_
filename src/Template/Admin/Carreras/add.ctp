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
            echo $this->Form->control('name', ['label' => 'Nombre']);
            echo $this->Form->control('duracion');
            echo $this->Form->control('periodo_id',['options'=>$periodos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Crear'),["class"=>"btn"]) ?>
    <?= $this->Form->end() ?>
</div>