<?php
namespace App\Controller\Profesor;

use App\Controller\AppController;

class GruposController extends AppController
{
	public function view($id=null)
	{
		$grupo = $this->Grupos->get($id, [
			'contain' => ['inscripciones'=>['Users'], 'Materias','Actividades','Users']
			]);

		$this->set('grupo', $grupo);
	}
	public function index()
	{
		$uid = $this->Auth->user('id');
		$grupos = $this->Grupos->find()->where(['user_id'=>$uid])->contain(['Materias']);
		$this->set(compact('grupos'));
	}

	public function lista($id)
	{
		$grupo = $this->Grupos->get($id, [
			'contain' => ['Users', 'Materias','Inscripciones'=>'Users']
			])->toArray();
		$this->set('grupo', $grupo);

		$alumnos=$this->Grupos->get($id, ['contain'=>['inscripciones' => ['users']]]);
		$this->set('grupo', $grupo);
		$this->set('alumnos', $alumnos);
	}
	public function asistencia($id)
	{
		$asistencias = $this->Grupos->get($id, [
			'contain' => ['Inscripciones'=>['Users'=>['Asistencias'=>'Horarios'],'Grupos']]]);
		$this->set(compact('asistencias'));
	}
	public function pasarlista($id=null)
	{
		$alumnos = $this->Grupos->get($id, [
			'contain' => ['Inscripciones'=>['Users'=>['Asistencias'=>'Horarios'],'Grupos']]]);
		$this->set(compact('alumnos'));

	}

	public function savelista($idgrupo=null,$alumnos=null){
		
	}
}