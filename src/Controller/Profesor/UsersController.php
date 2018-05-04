<?php
namespace App\Controller\Profesor;

use App\Controller\AppController;


class UsersController extends AppController
{
    /****************************************************/
    public function index()
    {
        $users = $this->paginate($this->Users);
        
        
        $this->set(compact('users'));
        
    }
    /****************************************************/
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Grupos'=>['Materias'=>'Carreras'], 'Inscripciones' =>['Grupos'=>['Materias'=>'Carreras']]]
        ]);

        $this->set('user', $user);
    }
    /****************************************************/
    public function portadadelprofesor()
    {   
        $yo=$this->Users->get($this->Auth->user('id'));
        $profesor=$this->Users->get($yo->id,['contain'=>['Grupos']]);
        $profesor=$this->Users->get($this->Auth->user('id'),['contain'=>['Grupos']]);
        $this->set(compact('yo','profesor'));
    }
    /****************************************************/
    
}
