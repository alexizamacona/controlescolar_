<?php
namespace App\Controller\Director;

use App\Controller\AppController;

/**
* 
*/
class CarrerasController extends AppController
{
	public function view($id=null){
		$carreras = $this->Carreras->get($id,['contain'=>['Materias'=>['Grupos'=>'Users']]]);
		$this->set(compact('carreras'));
		
	}
}
?>