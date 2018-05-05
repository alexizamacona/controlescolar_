<!DOCTYPE html>
<html>
<head>
	<title>Lista de Alumnos</title>
	<style>
		table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
 }
	</style>
</head>
<body>
	<?php foreach ($grupo['inscripciones'] as $i):?>
		<table border="1px solid black" >
			<tbody>
				<td><?=$i['user']['nombre']?></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tbody>
		</table>
	<?php endforeach?>	
</body>
</html>