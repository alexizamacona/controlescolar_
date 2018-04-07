<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="">
    <?= $this->Form->create($user) ?>



    <div class="row">
        <div class="card-panel col s12">
            <h5 class ="center">Agregar Usuario</h5>
            
            <div class="col s1 "></div>
            <div class=" col s5">

                <?php

                echo $this->Form->control('username');
                echo $this->Form->control('password');
                echo $this->Form->control('nombre');
                echo $this->Form->control('apellido_paterno');

                ?>
            </div>  
            
            <div class="col s5">
                <?php 
                echo $this->Form->control('apellido_materno');
                echo $this->Form->control('sexo');
                echo $this->Form->input('rol');
                echo $this->Form->control('email');
                ?>
            </div>

        </div>
    </div>
    <div class="button col of" style="margin-left: 70%;"></div>
    <button class="btn waves-effect waves-light" type="submit" name="action"> Crear Usuario
        <i class="material-icons right">send</i>
    </button>


    <?= $this->Form->end() ?>
</div> 
