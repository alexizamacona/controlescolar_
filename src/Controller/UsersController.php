<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    public function initialize(){
        parent::initialize();
        $this->Auth->allow(['logout','registro','login','agregar']);
    }


    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Tu nombre de usuario o contraseña no son correctos');
        }
    }

    public function logout()
    {
        $this->Auth->logout();
        $this->redirect('/');
    }

    public function portadaestudiantes()
    {
        $yo=$this->Users->get($this->Auth->user('id'));
        $this->set(compact('yo'));
    }
    

    public function agregar()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('El Usuario ha sido registrado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El usuario no ha podido ser registrado. Por favor, intente de nuevo.'));
        }
        $this->set(compact('user'));
    }



}
