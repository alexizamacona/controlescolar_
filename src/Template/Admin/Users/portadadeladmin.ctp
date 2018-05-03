<?php 
$estudiante = 0;
$profesor = 0;
$director = 0;

foreach($users as $user):
	if($user->rol == 'estudiante' or $user->rol == 'Estudiante'):
		$estudiante = $estudiante + 1;

	elseif($user->rol == 'profesor' or $user->rol == 'Profesor'):
		$profesor = $profesor + 1;

	elseif($user->rol == 'Director' or $user->rol == 'director'):
		$director = $director + 1;
	endif;

endforeach;

?>

<div class="card">
	<div class="card-content">
		<div class="card-title">Total de usuarios</div>
		<div class="row">
			<div class="col s4">
				<div class="card-panel">
					<h5 class="center">Total de alumnos</h5>
					<h5 class="center"><?=$estudiante?></h5>
				</div>
			</div>
			<div class="col s4">
				<div class="card-panel">
					<h5 class="center">Total de profesores</h5>
					<h5 class="center"><?=$profesor?></h5>
				</div>
			</div>
			<div class="col s4">
				<div class="card-panel">
					<h5 class="center">Total de directores</h5>
					<h5 class="center"><?=$director?></h5>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col s4">
				<a href="/admin/carreras" class="btn btn-large" style="display: block;">Carreras</a>
			</div>
			<div class="col s4">
				<a href="/admin/Grupos" class="btn btn-large" style="display: block;">Grupos</a>
			</div>
			<div class="col s4">
				<a href="/admin/users" class="btn btn-large" style="display: block;">Usuarios</a>
			</div>
		</div>
		<div class="row">
			<div class="col s4 offset-s4">
				<canvas id="chart" width="100%"></canvas>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		var datos = {
			type: "pie",
			data : {
				datasets :[{
					data : [
					<?= $estudiante?>,
					<?= $profesor?>,
					<?= $director?>,

					],
					backgroundColor: [
					"#ff1744",
					"#ffff00",
					"#1e88e5",
					],
				}],
				labels : [
				"Estudiantes",
				"Profesores",
				"Directores",
				]
			},
			options : {
				responsive : true,
			}
		};

		var grafica = document.getElementById('chart').getContext('2d');
		window.pie = new Chart(grafica, datos);

	});
</script>