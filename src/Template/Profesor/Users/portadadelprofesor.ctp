<h4>Bienvenido profesor <?= $profesor->nombre_completo?></h4>
<div class="card-panel">
	<h6>Clave de grupos asignados</h6>


	<?php
	$grupos=$profesor->grupos;
	foreach ($grupos as $grupo){
		echo $grupo->clave;}
		?>
<a class="waves-effect waves-light btn " href=<?="/profesor/grupos"?>><i class="material-icons left">edit</i>Grupos </a>
	</div>