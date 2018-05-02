<div class="card-panel">
    <?= $this->Form->create($carrera) ?>
    <?php
        echo $this->Form->control('name', ['label' => 'Nombre']);
        echo $this->Form->control('duracion');
        echo $this->Form->control('periodo_id',['options'=>$periodos]);
    ?>
    <?= $this->Form->button(__('Crear'),["class"=>"btn"]) ?>
    <?= $this->Form->end() ?>    
</div>