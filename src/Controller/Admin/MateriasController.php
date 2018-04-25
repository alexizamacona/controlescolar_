<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

class MateriasController extends AppController
{	
	public function view($id)
	{
		$materias = $this ->Materias->get($id, [
			'contain' => ['Carreras','Grupos']
			]);
		$this->set('materia', $materias);
		
	}
	/********************************************************/

	public function add() {
		$materia = $this->Materias->newEntity();
		if ($this->request->is('post')) {
			$materia = $this->Materias->patchEntity($materia, $this->request->getData());
			if ($this->Materias->save($materia)) {
				$this->Flash->success(__('The materia has been saved.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The materia could not be saved. Please, try again.'));
		}
		$carreras = $this->Materias->Carreras->find('list');
		$this->set(compact('materia', 'carreras'));
	}

	/********************************************************/

	public function index(){
		$materias = $this->Materias->find()
		->contain(['Carreras'])
		->order(['Carreras.name','Materias.grado','Materias.name']);

		$this->set(compact("materias"));
	}

	/********************************************************/
	public function edit($id=null){
		$materia = $this->Materias->get($id);
        $this->set('materia',$materia);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $materia = $this->Materias->patchEntity($materia, $this->request->getData());
            if ($this->Materias->save($materia)) {
                $this->Flash->success(__('la materia ha sido modificada exitosamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('la materia no pudo ser modificada. Por favor intenta de nuevo.'));
        }
        $carreras = $this->Materias->Carreras->find('list');
		$this->set(compact('materia', 'carreras'));
	}
};  	