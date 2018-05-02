

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


	<div class="row">

		<div class="card-panel col s12">
			<div class="row col offset-s1">
				<h4 class="center">Total de usuarios</h4>
				<div class="card-panel col s3 center">

					<h5>Total de alumnos</h5>
					<h5><?=$estudiante?></h5>
				</div>

				<div class="card-panel col s3 offset-s1 center">
					<h5>Total de profesores</h5>
					<h5><?=$profesor?></h5>
				</div>

				<div class="card-panel col s3 offset-s1 center">
					<h5>Total de directores</h5>
					<h5><?=$director?></h5>	
				</div>
				<div class="row">
					<div class="row col"><a href="/admin/carreras" class="btn">Carreras</a></div>
					<div class="row col"><a href="/admin/Grupos" class="btn">Grupos</a></div>
					<div class="row col"><a href="/admin/users" class="btn">Usuarios</a></div>
				</div>
			</div>

			<div id="canvas-container" style="width:50%;">
				<canvas id="chart" width="300" height="150"></canvas>
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