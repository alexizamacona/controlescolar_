<?php
namespace App\Controller\Profesor;

use App\Controller\AppController;

class GruposController extends AppController
{
	public function view($id=null)
	{
		$grupo = $this->Grupos->get($id, [
			'contain' => ['inscripciones'=>['Users'], 'Materias','Actividades','Users']
			]);

		$this->set('grupo', $grupo);
	}
	public function index()
	{

	}

	public function lista($id)
	{
		$grupo = $this->Grupos->get($id, [
			'contain' => ['Users', 'Materias','Inscripciones'=>'Users']
			])->toArray();
		$this->set('grupo', $grupo);

		$alumnos=$this->Grupos->get($id, ['contain'=>['inscripciones' => ['users']]]);
		$this->set('grupo', $grupo);
		$this->set('alumnos', $alumnos);
	}
	public function asistencia($id)
	{
		$asistencias = $this->Grupos->get($id, [
			'contain' => ['Inscripciones'=>['Users'=>['Asistencias'=>'Horarios'],'Grupos']]]);
		$this->set(compact('asistencias'));
	}
}