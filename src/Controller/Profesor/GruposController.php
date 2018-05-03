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
			$this->set('grupo', $grupo);
		}
	}