<h3>Lista de Asistencia</h3>
<h5>Nombre de la matería</h5>
<td><?= $grupo['materia']['name']?></td>
<h5>Nombre del profesor</h5>
<td><?= $grupo['user']['nombre'] ?></td>
<h5>Grado</h5>
<td><?= $grupo['materia']['grado'] ?></td>
<h5>Clave</h5>
<td><?= $grupo['clave'] ?></td>
<h5>Nombre del estudiante</h5>
<?php foreach ($grupo['inscripciones'] as $i): ?>
	<?php echo $i['user']['apellido_paterno']; ?>
<?php endforeach; ?>
