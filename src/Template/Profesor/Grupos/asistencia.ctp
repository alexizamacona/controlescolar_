<div class="card-panel">
		<h6>Lista de asistencia</h6>
		<ul class="collapsible popout">
	<?php foreach ($asistencias->inscripciones as $a): ?>
			<li>
				<div class="collapsible-header"><?=$a->user->nombre.' '.$a->user->apellido_paterno?></div>
				<div class="collapsible-body"><span>
					<table>
						<thead>
							<tr>

								<th>Grupo</th>
								<th>Día</th>
								<th>Asistio</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<?php foreach ($a->user->asistencias as $as): ?>

									<td><?=$a->grupo->clave?></td>
									<td><?=$as->horario->dia?></td>
									<?php if ($as->valor == 1): ?>
										<td>Sí</td>
									<?php else: ?>
										<td>No</td>
									<?php endif ?>
								<?php endforeach ?>
							</tr>

						</tbody>
					</table>
				<?php endforeach ?>
			</div>
		</span></div>
	</li>
</ul>

<a href="/profesor" class="waves-effect waves-light btn">Inicio</a>
<script>
	$(document).ready(function(){
		$('.collapsible').collapsible();
	});
</script>