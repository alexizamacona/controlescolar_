<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

class CarrerasController extends AppController
{
	public function add()
	{
        $carrera = $this->Carreras->newEntity();
        if ($this->request->is('post')) {
            $carrera = $this->Carreras->patchEntity($carrera, $this->request->getData());
            if ($this->Carreras->save($carrera)) {
                $this->Flash->success(__('La carrera ha sido guardada'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Problemas al guardar la carrera, intentelo nuevamente.'));
        }
        $this->set(compact("carrera"));
    }
    public function view($id=null)
    {
        $carrera = $this->Carreras->get($id);
        $this->set('carrera', $carrera);
    }
};
