<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
class MateriasController extends AppController
{	
	public function view($id=null)
	{
		$materias = $this->Materias->get($id, [
			'contain' => ['Carreras','Grupos'=>['Users']]
			]);
		$this->set('materia', $materias);
		$this->set('maestro',$user);
		
	}
	/********************************************************/
	public function add($id=null) {
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
		$this->set(compact('id'));
	}
	/********************************************************/
	public function index(){
		$materias = $this->Materias->find()
		->contain(['Carreras'])
		->order(['Carreras.name','Materias.grado','Materias.name']);
		$carreras = TableRegistry::get('Carreras')->find();
		$this->set(compact("carreras"));
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