<h4>PROFESOR</h4>
<div class="card-panel">
<h6>Calve de grupos asignados</h6>


<?php
	$grupos=$profesor->grupos;
	foreach ($grupos as $grupo){
			echo $grupo->clave;}
?>
</div>