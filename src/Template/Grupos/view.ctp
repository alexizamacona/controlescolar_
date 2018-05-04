<?php 
$promedio = 0;
$n = 0;
$mat=$calif->materias;
?>

<?php foreach ($calif->actividades as $c): ?>
	<?php if ($c->user_id == $id_login): ?>
		<?php $promedio = $promedio + ($c->calificacion*($c->porcentaje/100)); ?>
		<?php $n = $n+1 ?>
	<?php endif ?>
<?php endforeach; ?>

<div class="card-panel">
	
	<h5><?php echo $nombre_login.' '.$p_login.' '.$m_login ?></h5>
	<?php if ($n!=0): ?>
		<table class="responsive-table">
			<tr>
				<h6 class="col s12">
				<div class ="col s3">
					Grupo: <?= $calif->clave?>
				</div>
				<div class ="center col s3">
					Materia: <?php print_r($calif->Materias['name'])?>
				</div>
				<div class ="right col s3"> 
					Turno: <?=$calif->turno?>
				</div>
				<div></div>
				</h6>

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
			<?php if ($promedio >= 10): ?>
				<?php $promedio = 10 ?>
			<?php elseif($promedio <= 0): ?>
				<?php $promedio = 0 ?>
			<?php endif ?>
			<td><?=$promedio?></td>
		</table>
	<?php else: ?>

		<h4 class="center">No estas asignado a este grupo</h4>
	<?php endif ?>
	


</div>
<a href="/" class="waves-effect waves-light btn">Inicio</a>