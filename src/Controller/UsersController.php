<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class UsersController extends AppController
{

    public function initialize(){
        parent::initialize();
        $this->Auth->allow(['logout','registro','login','agregar']);
    }
    /****************************************************/
    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                if($user['rol']!='estudiante'){
                    return $this->redirect($this->Auth->redirectUrl("/$user[rol]"));
                }
                else{
                    return $this->redirect($this->Auth->redirectUrl("/"));
                }
            }
            $this->Flash->error('Tu nombre de usuario o contraseña no son correctos');
        }
    }
    /****************************************************/
    public function logout()
    {
        $this->Auth->logout();
        $this->redirect('/');
    }
    /****************************************************/
    public function portadaestudiantes()
    {
     $yo=$this->Users->get($this->Auth->user('id'),['contain'=>['Grupos'=>'Materias']]);
     $yo=$this->Users->get($this->Auth->user('id'),['contain'=>['Inscripciones'=>['Grupos'=>['Materias']]]]);    
     $this->set(compact('yo'));
     $Inscripciones = TableRegistry::get('Inscripciones')->find()->where(['Inscripciones.user_id'=>$this->Auth->user('id')])->contain(['Grupos'=>['Materias']])->order(['Materias.grado']);
        $this->set(compact('Inscripciones'));
     
 }
 /****************************************************/
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
/****************************************************/
public function lista(){


}




}
