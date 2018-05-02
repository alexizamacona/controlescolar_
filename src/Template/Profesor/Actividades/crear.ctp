<?php 
$grupo = $grupos;
?>

<?= $this->Form->create($actividad) ?>
<div class="card-panel">

			<?= $this->form->hidden('grupo_id', ['default'=>$id_grupo])?></input>

	<?= $this->form->control('descripcion',['label'=>'Descripción'])?>
	<?= $this->form->control('porcentaje',['type'=>'number'])?>

	<?= $this->Form->hidden('calificacion',['defaul' => '0'])?>
	<div class="">
		<?= $this->form->control('fecha',['type' => 'date'])?>	
	</div>

</div>
<button class="btn waves-effect waves-light right" type="submit" name="action"> Crear
	<i class="material-icons right">send</i>
</button>
<?= $this->Form->end() ?>

<script>
	$(document).ready(function(){
		$('.datepicker').datepicker();
	});
</script>