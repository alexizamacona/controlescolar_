<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->LoadComponent('Auth',[
            'loginAction'=>[
                'controller'=>'Users',
                'action'=>'login',
                'prefix'=>false,
            ],'authorize'=>'Controller'
        ]);

        $this->Auth->allow(['login','logout','registrar']);

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
<<<<<<< HEAD
        $this->set('roldeusuario',$this->Auth->user("rol"));
        $this->set('nombredeusuario',$this->Auth->user("nombre"));
=======
        $this->set('roldeusuario',$this->Auth->user("rol") );
        $this->set('id_login', $this->Auth->user("id"));
        $this->set('nombre_login',$this->Auth->user("nombre"));
        $this->set('p_login',$this->Auth->user("apellido_paterno"));
        $this->set('m_login',$this->Auth->user("apellido_materno"));    
    }

    public function isAuthorized($user=null){
        if (!$this->request->getParam('prefix')) {
            return true;
        }

        // Only admins can access admin functions
        if ($this->request->getParam('prefix') === 'admin') {
            return (bool)($user['rol'] === 'admin');
        }
        if ($this->request->getParam('prefix') === 'director') {
            return (bool)($user['rol'] === 'director' OR $user['rol'] === 'admin');
        }
        if ($this->request->getParam('prefix') === 'profesor') {
            return (bool)($user['rol'] === 'profesor' OR $user['rol'] === 'admin' OR $user['rol'] === 'director');
        }
        // Default deny
        return false;
>>>>>>> abbb3244afae51b7dab57d84ef8f669b4c12a2eb
    }


}
