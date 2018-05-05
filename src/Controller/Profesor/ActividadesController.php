<?php
namespace App\Controller\Profesor;

use App\Controller\AppController;


class ActividadesController extends AppController{
	public function crear($id_grupo = null){

		$actividad = $this->Actividades->newEntity();
		if ($this->request->is('post')) {
			$actividad = $this->Actividades->patchEntity($actividad, $this->request->getData());
			if ($this->Actividades->save($actividad)) {
				$this->Flash->success(__('La actividad ha sido registrada exitosamente.'));

				return $this->redirect(['/profesor']);
			}
			$this->Flash->error(__('La actividad no ha podido ser registrada. Por favor, intente de nuevo.'));
			debug($actividad);
		}
		$grupos = $this->Actividades->Grupos->find('list');

		$this->set(compact('actividad','grupos','id_grupo'));
	}
}