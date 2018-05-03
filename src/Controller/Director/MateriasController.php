<?php
    namespace App\Controller\Director;

    use App\Controller\AppController;

    class MateriasController extends AppController
    {
    	public function view($id)
    	{
    		$materias = $this ->Materias->get($id, [
    			'contain' => ['Carreras','Grupos']
    			]);
    		$user = $this->Materias->Grupos->Users->find()->toArray();
    		$this->set('materia', $materias);
    		$this->set('maestro',$user);

    	}
    }
namespace App\Controller\Director;

use App\Controller\AppController;

class MateriasController extends AppController
{
	public function view ($id = null){
		$materias = $this ->Materias->get($id, [
			'contain' => ['Carreras','Grupos']
			]);
		$user = $this->Materias->Grupos->Users->find()->toArray();
		$this->set('materia', $materias);
		$this->set('maestro',$user);
	}
}