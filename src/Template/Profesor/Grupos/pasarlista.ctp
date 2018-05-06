<div class="card-panel">
	<h6>Lista de asistencia</h6>
	<ul class=>
		<?php foreach ($alumnos->inscripciones as $a): ?>
			<li>
				<br><div class=>
				<?=$a->user->nombre.' '.$a->user->apellido_paterno?>
					  <label class="right">
        <input type="checkbox" />
        <span>Asistio</span>
      </label>
				</div>
				<div class=><span>
				<?php endforeach ?>
			</div>
		</span></div>
	</li>
</ul>

<a href="/profesor" class="waves-effect waves-light btn">Inicio</a>
<a href=<?="/profesor/grupos/savelista/$alumnos->id"?> class="waves-effect waves-light btn right">Guardar</a>