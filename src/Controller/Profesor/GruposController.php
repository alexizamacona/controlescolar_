<?php
namespace App\Controller\Profesor;

use App\Controller\AppController;

class GruposController extends AppController
{
	public function view($id=null)
	{
		$grupo = $this->Grupos->get($id, [
			'contain' => ['Users', 'Materias']
		]);
		$alumnos=$this->Grupos->get($id, ['contain'=>['inscripciones' => ['users']]]);
		$this->set('grupo', $grupo);
		$this->set('alumnos', $alumnos);
	}
}