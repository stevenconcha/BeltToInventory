<?php

App::uses('AppController', 'Controller');

/**
 * Usuarios Controller
 *
 * @property Usuario $Usuario
 * @property PaginatorComponent $Paginator
 */
class ErrorController extends AppController {
    
    public function invalidRol(){
        $this->layout = 'login';
    }
    
    public function invalidPermission(){
        $this->layout = 'login';
    }
    
    public function invalidAccess(){
        $this->layout = 'login';
    }

}