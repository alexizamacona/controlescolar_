<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

class GruposController extends AppController
{
	public function add()
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
  }
  public function view($id=null)
     {
        $grupo = $this->Grupos->get($id);

        $this->set('grupo', $grupo);
    }

}
