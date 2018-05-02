<?php 
$grupo = $grupos;
?>
<?= $this->Form->create($actividad) ?>
<div class="card-panel">
	<?= $this->form->control('descripcion',['label'=>'Descripción'])?>
	<?= $this->form->control('grupo_id',['options'=>$grupo])?>
	<?= $this->form->control('porcentaje',['type'=>'number'])?>
	<?= $this->form->control('calificacion',['type'=>'number'],['default'=>'0'])?>	
	<?= $this->form->control('fecha',['type'=>'date'],['label'=>' '])?>	

</div>
	<button class="btn waves-effect waves-light right" type="submit" name="action"> Crear
		<i class="material-icons right">send</i>
	</button>
	<?= $this->Form->end() ?>

