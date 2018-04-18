<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

class MateriasController extends AppController
{
<<<<<<< HEAD
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



	public function index()
	{
		$materias = ($this->Materias->find());

		$this->set(compact('materias'));
	}
  public function view()
  {
  	 $materias = $this ->Materias->get($id, [
            'contain' => ['name', 'carrera_id', 'grado','creditos']
        ]);

        $this->set('materia', $materias);
   }
};  
=======

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

};
>>>>>>> 5525fefd099da5ae9874d46a1d29840c905c565a
