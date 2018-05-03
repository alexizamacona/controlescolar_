<style>
	.peque td{
		padding: 3px;
	}
</style>
<h2>Login</h2>

<div class="card-panel">
	<?=$this->Form->create()?>
	<?=$this->Form->control("username")?>
	<?=$this->Form->control("password")?>
	<?=$this->Form->button("Entrar",["class"=>"btn green"])?>
	<?=$this->Form->end()?>
</div>

<div class="row">
	<div class="col s6 offset-s3">
		<div class="card-panel yellow">
			<h5>Usuarios de prueba:</h5>
			<table class="peque">
				<tr>
					<th>username</th>
					<th>password</th>
				</tr>
				<tr>
					<td>administrador</td>
					<td>administrador</td>
				</tr>
				<tr>
					<td>director</td>
					<td>director</td>
				</tr>
				<tr>
					<td>profesor</td>
					<td>profesor</td>
				</tr>
				<tr>
					<td>estudiante</td>
					<td>estudiante</td>
				</tr>
			</table>
		</div>
	</div>
</div>