<?php
?>
<div class="Carreras form large-6 medium-6 columns content">
    <?= $this->Form->create($carrera) ?>
    <fieldset>
        <legend><?= __('AGREGAR CARRERA') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('duracion');
            echo $this->Form->control('modalidad');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Crear'),["class"=>"btn"]) ?>
    <?= $this->Form->end() ?>
</div>
