<?php

App::import('AppHelper', 'view/Helper');

class MenuHelper extends AppHelper {

    public $helpers = array("Html","Informacion");
    
    
  function Administracion() {
        if ($this->Informacion->Authorized(array("Administrador"), true)) {
            echo "entre";
            exit();
            $html = '
             <li>' . $this->Html->link('<i class="fa fa-circle-o"></i> Agregar Usuario', '/users/add') . '</li>
              <li>' . $this->Html->link('<i class="fa fa-circle-o"></i> Gestionar Usuarios', '/users/add') . '</li>
            ';
        }else{
            $html = "";
        }
        return $html;
    }

    
}

?>
