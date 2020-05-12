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
        $this->layout = 'default';
    }
    
    public function invalidPermission(){
        $this->layout = 'default';
    }
    
    public function invalidAccess(){
        $this->layout = 'default';
    }

}