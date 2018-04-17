<?php
namespace App\Controller\Admin;

use App\Controller\AppController;


class UsersController extends AppController
{
    public function index()
    {
        $users = $this->paginate($this->Users);
        
        
        $this->set(compact('users'));
        
    }

    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Grupos'=>['Materias'=>'Carreras'], 'Inscripciones']
        ]);

        $this->set('user', $user);
    }


     public function registrar()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('El Usuario ha sido registrado exitosamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El usuario no ha podido ser registrado. Por favor, intente de nuevo.'));
        }
        $this->set(compact('user'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('El usuario ha sido eliminado exitosamente.'));
        } else {
            $this->Flash->error(__('El usuario no ha podido ser borrado. Por favor intenta otra vez.'));
        }

        return $this->redirect(['action' => 'index']);
    }


}
