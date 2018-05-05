<?php
?>
<?php if ($grupo->user_id == $id_login): ?>

    <div class="carreras view large-9 medium-8 columns content">

       <ul class="collapsible">
        <li>
          <div class="collapsible-header">Grupo</div>
          <div class="collapsible-body"><span>

            <div class="row">
                <div class="card-panel">
                    <table>
                        <tr>
                            <th scope="row"><?= __('Nombre del profesor') ?></th>
                            <td><a href="/admin/users/view/<?=$grupo->user->id?>"><?= h($grupo->user->nombre_completo) ?>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Materia') ?></th>
                        <td><a href="/admin/materias/view/<?=$grupo->materia->id?>"><?= h($grupo->materia->name) ?>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Clave') ?></th>
                    <td><?= h($grupo->clave) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Turno') ?></th>
                    <td><?= h($grupo->turno) ?></td>
                </tr>

                <tr> 

                    <?php if($id_login == $grupo->user->id): ?>
                        <td>
                            <div class = 'center'>
                                <?= $this->Html->link(__('Asignar actividad'),['controller'=>'actividades','action' => 'crear', $grupo->id]) ?>  
                            </div>
                        </td>
                    <?php endif; ?>
                </tr>
            </table>
        </div>
    </div>
</span></div>
</li>
<li>
  <div class="collapsible-header">Alumnos</div>
  <div class="collapsible-body"><span>
      <div class="card-panel">

    <?php if (!empty($alumnos)){ ?>
        <table cellpadding="0" cellspacing="0" >
            <tr>
                <th scope="col"><?= __('nombre') ?></th>
            </tr>
            <?php foreach ($alumnos->inscripciones as $alumno):?>
                <tr>

                    <td><?php print_r($alumno->Users['nombre'])." ".print_r($alumno->Users['apellido_paterno']).' '.print_r($alumno->Users['apellido_materno']) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php }?>
</div>

  </span></div>
</li>
<li>
  <div class="collapsible-header">Actividades</div>
  <div class="collapsible-body"><span>

<table class="responsive-table">
        <thead>
          <tr>
              <th>Descripción</th>
              <th>Porcentaje</th>
          </tr>
        </thead>

        <tbody>
            <?php foreach ($grupo->actividades as $a): ?>
                <tr>
                    <td><?= $a->descripcion?></td>
                    <td><?= $a->porcentaje?>%</td>
                </tr>
                
            <?php endforeach ?>
        </tbody>
      </table>









  </span></div>

</li>
</ul>
</div>
<?php else: ?>

    <div class="card-panel">
        <h5>Estimado <?=h($nombre_login)?> no estas asignado como profesor a este grupo</h5>
    </div>

<?php endif ?>

<a href="/profesor/" class="waves-effect waves-light btn">Inicio</a> 
<script>
     $(document).ready(function(){
    $('.collapsible').collapsible();
  });
</script>