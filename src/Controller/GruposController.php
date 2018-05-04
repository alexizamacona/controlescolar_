<?php
namespace App\Controller;

use App\Controller\AppController;

    class GruposController extends AppController
    {
    	public function view($id){
    		$calif = $this->Grupos->get($id,[
    			'contain' => ['Actividades'=>['Users'], 'materias']]);
    		$this->set('calif', $calif);
    	}
    }