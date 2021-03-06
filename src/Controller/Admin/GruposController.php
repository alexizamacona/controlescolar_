<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

class GruposController extends AppController
{
	public function add($id_materia=null)
	{
		$grupo = $this->Grupos->newEntity();
		if ($this->request->is('post')) {
			$grupo = $this->Grupos->patchEntity($grupo, $this->request->getData());
			if ($this->Grupos->save($grupo)) {
				$this->Flash->success(__('El grupo ha sido guardado'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Problemas al guardar el grupo, intentelo nuevamente.'));
		}

		$users    = $this->Grupos->Users->find('list')->where(['Users.rol'=>'profesor']);
		$materias = $this->Grupos->Materias->find('list');

		$this->set(compact("grupo"));
		$this->set(compact("materias"));
		$this->set(compact("users"));
		$this->set(compact("id_materia"));
	}
	/****************************************************/
	public function view($id=null)
	{
		$grupo = $this->Grupos->get($id, [
			'contain' => ['Users', 'Materias']
			]);
		$this->set('grupo', $grupo);
	}
	/****************************************************/
	public function index(){
		$grupos = $this->Grupos->find()->contain(['Materias','Users']);


		$this->set(compact('grupos'));
	}
	/****************************************************/
	public function edit($id = null){
		$grupo= $this->Grupos->get($id, [
			'contain' => []
			]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$grupo = $this->Grupos->patchEntity($grupo, $this->request->getData());
			if ($this->Grupos->save($grupo)) {
				$this->Flash->success(__('El grupo ha sido modificado exitosamente.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('El grupo no ha podido ser modificado. Por favor intenta de nuevo.'));
		}
		$users    = $this->Grupos->Users->find('list')->where(['Users.rol'=>'profesor']);
		$materias = $this->Grupos->Materias->find('list');

		$this->set(compact('grupo'));
		$this->set(compact('materias'));
		$this->set(compact('users'));
	}
	/****************************************************/
	Public function lista($id){
		$grupo = $this->Grupos->get($id, [
			'contain' => [
				'Users', 
				'Materias', 
				
					'Inscripciones'=>'Users'
				
			]
			]);
		$this->set('grupo', $grupo);
	}
}
