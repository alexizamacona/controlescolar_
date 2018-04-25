<div class="users form large-9 medium-8 columns content card-panel">
    <?= $this->Form->create($carrera) ?>
    
        
        <?php
        echo $this->Form->control('name', ['label' => 'Nombre']);
        echo $this->Form->control('duracion');
        echo $this->Form->control("periodo");
        ?>
    <?= $this->Form->end() ?>
</div>
<a class="btn-floating btn-large waves-effect waves-light  teal accent-4 right"  type="submit"><i class="material-icons">save</i> Guardar</a>

