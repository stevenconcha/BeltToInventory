<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    //public $components = array(); //'DebugKit.Toolbar'
/*
 public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'posts',
                'action' => 'index'
            ),
            'logoutRedirect' => array(
                'controller' => 'pages',
                'action' => 'display',
                'home'
            ),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
            )
        )
    );
    */


 public $components = array(
        'Session',
        'Auth' => array(
            "loginRedirect" => array("controller" => "pages", "action" => "display"),
            "logoutRedirect" => array("controller" => "pages", "action" => "login"),
            'loginAction' => array(
                'controller' => 'users',
                'action' => 'login'
            ),
            "authError" => "No tienes permisos para ingresar en esta pagina",
        ),
        'Security' => array(
            "csrfExpires" => '+1 hour',
            "csrfUseOnce" => false
        ),
    );

    public function isAuthorized() {
        return true;
    }

    public function checkPermission($keys) {
        $roles = $this->Session->read("roles");
        if ($keys == null || !is_array($keys)) {
            if($keys == "All" && count($roles) > 0){
                return;
            }else{
                $this->redirect(array("controller" => "users", "action" => "invalidRol"));
            }
        }
        for ($i = 0; $i < count($keys); $i++) {
            for ($j = 1; $j <= count($roles); $j++) {
                if ($roles[$j]['nombre'] == $keys[$i] & $roles[$j]['activo'] == 1) {
                    return;
                }
            }
        }
        $this->redirect(array("controller" => "users", "action" => "invalidRol"));
    }
	
    public function beforeFilter() {
        $this->Auth->allow('index', 'view');
    
    }


}
