<h4>Bienvenido profesor <?= $profesor->nombre_completo?></h4>
<div class="card-panel">
	<h6>Clave de grupos asignados</h6>


	<?php
	$grupos=$profesor->grupos;
	foreach ($grupos as $grupo){
		echo $grupo->clave;}
		?>
	</div>