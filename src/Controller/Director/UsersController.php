<?php
namespace App\Controller\Director;

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
            'contain' => ['Grupos'=>['Materias'=>'Carreras'], 'Inscripciones' =>['Grupos'=>['Materias'=>'Carreras']]]
        ]);

        $this->set('user', $user);
    }

    public function portadadeldirector(){
        $yo=$this -> Users->get($this->Auth->user('id'));
        $this->set('yo',$yo);
        $Carreras=$this->Users->Grupos->Materias->Carreras->find('all',array('order'=>'name'));
        $this->set('Carreras',$Carreras);


    }
}
