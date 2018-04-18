<?php
$lstRoles=[
    'admin'=>'Administrador',
    'profesor'=>'Profesor',
    'director'=>'Director',
    'estudiante'=>'Estudiante',
];
$genero=[
    'h'=> 'Masculino',
    'm'=> 'Femenino',
];
?>

<div class="users form large-9 medium-8 columns content card-panel">
    <?= $this->Form->create($user) ?>
    
        
        <?php
        echo $this->Form->control('username');
        echo $this->Form->control('password');
        echo $this->Form->control('nombre');
        echo $this->Form->control('a_paterno');
        echo $this->Form->control('a_materno');
        echo $this->Form->control('sexo', ['options' => $genero]);
        echo $this->Form->control('email');
        echo $this->Form->control('rol', ['options' => $lstRoles]);
        ?>
    
    <button class="btn waves-effect waves-light" type="submit" name="action"> Modificar

    </button>
    <?= $this->Form->end() ?>
</div>
