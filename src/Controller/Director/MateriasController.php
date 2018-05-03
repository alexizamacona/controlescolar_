<?php
<<<<<<< HEAD
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
=======
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
>>>>>>> d32e993206aba1d875986af491f05597558e8b02
