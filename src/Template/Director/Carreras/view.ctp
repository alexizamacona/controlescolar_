<h3><?=$carreras->name?></h3>
<?php foreach ($carreras->materias as $materia): ?>
	<div class="card-panel col s12">
	<h3><a href=<?="/director/materias/view/$materia->id"?>><?=$materia->name?></a></h3>
	<div class="col s6">Grupo</div>
	<div class="col s6">Maestro</div>
	<?php foreach($materia->grupos as $grupo):?>
		<div class="col s6">
			<?=$grupo->clave?>
			<hr>
		</div>
		<div class="col s6">
			<a href=<?="/director/users/view/$grupo->user_id"?>><?=$grupo->user->nombre?></a>
			<hr>
		</div>
	<?php endforeach; ?>
	</div>
<?php endforeach; ?>