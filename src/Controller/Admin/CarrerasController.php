<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
class CarrerasController extends AppController
{
    public function index(){
        $carreras = $this->Carreras->find()->contain(['Periodos']); 
        $carreras= $this->paginate($this->Carreras);      
        $this->set(compact('carreras'));
    }

    public function add()
    {
        $periodos = $this->Carreras->Periodos->find("list");
        $carrera = $this->Carreras->newEntity();
        if ($this->request->is('post')) {
            $carrera = $this->Carreras->patchEntity($carrera, $this->request->getData());
            if ($this->Carreras->save($carrera)) {
                $this->Flash->success(__('La carrera ha sido guardada'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Problemas al guardar la carrera, intentelo nuevamente.'));
        }
        $carreras = $this->Carreras->find()->contain(['Periodos']); 
        $this->set(compact("carrera"));
        $this->set(compact("periodos"));
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
=======
	public function index(){
		$carreras = $this->Carreras->find()->contain(['Periodos']);       
		$this->set(compact('carreras'));
	}
/****************************************************/
	public function add()
	{
		$periodos = $this->Carreras->Periodos->find("list");
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
		$this->set(compact("periodos"));
	}
/****************************************************/
	public function view($id=null)
	{
		$carrera = $this->Carreras->get($id,['contain'=>['Periodos']]);
		$this->set('carrera', $carrera);
	}
/****************************************************/
	public function edit($id = null)
	{
		$carrera = $this->Carreras->get($id);
		$periodos = $this->Carreras->Periodos->find("list");
		if ($this->request->is(['patch', 'post', 'put'])) {
			$carrera = $this->Carreras->patchEntity($carrera, $this->request->getData());
			if ($this->Carreras->save($carrera)) {
				$this->Flash->success(__('Carrera actualizada'));
>>>>>>> dd45872fca2effbf8da96d7a28911c8ce00eeb12

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Error al actualizar la carrera'));
		}
		$this->set(compact('carrera','periodos'));
	}
};
