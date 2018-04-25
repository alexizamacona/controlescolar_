<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
class CarrerasController extends AppController
{
    public function index(){
        $carreras = $this->Carreras->find()->contain(['Periodos']);       
        $this->set(compact('carreras'));
    }
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
        $carrera = $this->Carreras->get($id,['contain'=>['Periodos']]);
        $this->set('carrera', $carrera);
    }
    
    public function edit($id = null)
    {
        $carrera = $this->Carreras->get($id);
        $periodos = $this->Carreras->Periodos->find("list");
        if ($this->request->is(['patch', 'post', 'put'])) {
            $carrera = $this->Carreras->patchEntity($carrera, $this->request->getData());
            if ($this->Carreras->save($carrera)) {
                $this->Flash->success(__('Carrera actualizada'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Error al actualizar la carrera'));
        }
        $this->set(compact('carrera','periodos'));
    }
};
