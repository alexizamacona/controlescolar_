<?php 
$promedio = 0;
$n = 0;
?>

<?php foreach ($calif->actividades as $c): ?>
	<?php if ($c->user_id == $id_login): ?>
		<?php $promedio = $promedio + ($c->calificacion*($c->porcentaje/100)); ?>
		<?php $n = $n+1 ?>
	<?php endif ?>
<?php endforeach; ?>

<div class="card-panel">


	<?php if ($n!=0): ?>
		<table class="vertical-table">
			<tr>
				<?php foreach ($calif->actividades as $c): ?>
					<?php if ($c->user_id == $id_login): ?>
								<th scope="col"><?= __($c->descripcion) ?></th>
					<?php endif ?>
				<?php endforeach; ?>		
			</tr>
				<?php foreach ($calif->actividades as $c): ?>
					<?php if ($c->user_id == $id_login): ?>
						<td><?=$c->calificacion?></td>
					<?php endif ?>
				<?php endforeach; ?>	

			<tr><th scope="col">Calificación final</th></tr>
			<td><?=$promedio?></td>
		</table>
	<?php else: ?>

		<h4 class="center">No estas asignado a este grupo</h4>
	<?php endif ?>
	
</div>