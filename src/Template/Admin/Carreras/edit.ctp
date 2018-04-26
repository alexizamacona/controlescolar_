<div class="users form large-9 medium-8 columns content card-panel">
    <?= $this->Form->create($carrera) ?>
    
        
        <?php
        echo $this->Form->control('name', ['label' => 'Nombre']);
        echo $this->Form->control('duracion');
        echo $this->Form->control("periodo");
        echo $this->Form->button('guardar',['class'=>'btn']);
        ?>
    <?= $this->Form->end() ?>
</div>


