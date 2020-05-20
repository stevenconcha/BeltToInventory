<?php 
App::import("Model", "Userrole");


class UsersController extends AppController 
{
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');
    public $uses = array('User', 'Country', 'State', 'City');
 
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add', 'logout','recuperarPass', 'nuevaclave');
        $this->Security->unlockedActions = array('recuperarPass');
    }
    

    public function index()
    {
        $this->checkPermission(array("Administrador"));
        $this->paginate = array(
            'conditions' => array('status' => '1'),
            'limit' => 3,
            'order' => array('id' => 'desc')
        );
        $users = $this->paginate('User');
        $this->set('users', $users);
    }

    public function view($id = null)
    {
        $this->checkPermission(array("Administrador"));
        $countries = $this->Country->find('all');
        $country_arr = array('' => '--Select one--');
        foreach ($countries as &$country) {
            $country_arr[$country['Country']['id']] = $country['Country']['country_name'];
        }
        unset($country);
        $this->set('countries', $country_arr);

        $states = $this->State->find('all');
        $state_arr = array('' => '--Select one--');
        foreach ($states as &$state) {
            $state_arr[$state['State']['id']] = $state['State']['state_name'];
        }
        unset($state);
        $this->set('states', $state_arr);

        $cities = $this->City->find('all');
        $city_arr = array('' => '--Select one--');
        foreach ($cities as &$city) {
            $city_arr[$city['City']['id']] = $city['City']['city_name'];
        }
        unset($city);
        $this->set('cities', $city_arr);

        if (!$id) {
            throw new NotFoundException(__('Invalid user'));
        }

        $user = $this->User->findById($id);
        if (!$user) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $user);
    }

    public function add()
    {   
        $this->checkPermission(array("Administrador")); // agregado por steven
        $countries = $this->Country->find('all');
        $country_arr = array('' => '--Select one--');
        foreach ($countries as &$country) {
            $country_arr[$country['Country']['id']] = $country['Country']['country_name'];
        }
        unset($country);
        $this->set('countries', $country_arr);
        if ($this->request->is('post')) {
            $this->User->create();
            $this->User->set($this->request->data);            
            if ($this->User->validates()) {
                if ($this->User->save($this->request->data, $validate=false)) {
                    $this->Flash->success(__("User has been saved successfully"));
                    return $this->redirect(array('action'=>'index'));
                }
                $this->Flash->error(__('Unable to add user'));
            } else {
                $errors = $this->User->validationErrors;
            }            
        }
    }

    public function edit($id = null)
    {
        $this->checkPermission(array("Administrador"));
        if (!$id) {
            throw new NotFoundException(__("Invalid user"));
        }

        $user = $this->User->findById($id);
        if (!$user) {
            throw new NotFoundException(__("Invalid user"));
        }

        $countries = $this->Country->find('all');
        $country_arr = array('' => '--Select one--');
        foreach ($countries as &$country) {
            $country_arr[$country['Country']['id']] = $country['Country']['country_name'];
        }
        unset($country);
        $this->set('countries', $country_arr);

        $states = $this->State->find('all');
        $state_arr = array('' => '--Select one--');
        foreach ($states as &$state) {
            $state_arr[$state['State']['id']] = $state['State']['state_name'];
        }
        unset($state);
        $this->set('states', $state_arr);

        $cities = $this->City->find('all');
        $city_arr = array('' => '--Select one--');
        foreach ($cities as &$city) {
            $city_arr[$city['City']['id']] = $city['City']['city_name'];
        }
        unset($city);
        $this->set('cities', $city_arr);

        if ($this->request->is(array('post', 'put'))) {
            $this->User->id = $id;
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('User has been updated successfully'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__("Unable to update user"));
        }

        if (!$this->request->data) {
            $this->request->data = $user;
        }
    }

    public function delete($id)
    {
      $this->checkPermission(array("Administrador"));
        if (!$this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        $this->User->id = $id;
        if ($this->User->saveField('status', 0)) {
            $this->Flash->success(__("User has been deleted successfully"));
        } else {
            $this->Flash->error(__("The user with id: %s could not be deletd", h($id)));
        }

        return $this->redirect(array('action' => 'index'));
    }

    public function getStates($country_id)
    {
        $states = $this->State->find('all', array('conditions'=>array('country_id =' => $country_id)));
        $state_arr = array();
        foreach ($states as &$state) {
            $state_arr[$state['State']['id']] = $state['State']['state_name'];
        }
        unset($state);
        echo json_encode($state_arr);
        exit;
    }
    
    public function getCity($state_id)
    {
        $cities = $this->City->find('all', array('conditions'=>array('state_id =' => $state_id)));
        $city_arr = array();
        foreach ($cities as &$city) {
            $city_arr[$city['City']['id']] = $city['City']['city_name'];
        }
        unset($city);
        arsort($city_arr);
        echo json_encode($city_arr);
        exit;
    }

 
    public function login() {

    if ($this->request->is('post')) {
                                  
        if ($this->Auth->login($this->request->data['User']['document'])) {

        //   echo "Entro ". $this->request->data['User']['pass'];
        //   echo "Entro2 ". AuthComponent::password($this->request->data['User']['pass']);
        //   450aea5ebad6dc562fcc28ac8d5f85272597c6a4 
        //   450aea5ebad6dc562fcc28ac8d5f85272597c6a4
        //   exit();  
              $this->User->recursive = 0;
                $document = $this->Auth->user();
                $user = $this->User->find("first", array("conditions" => array(
                        "User.document" => $document,
                        "User.pass" => AuthComponent::password($this->request->data['User']['pass'])
                )));



                if (count($user) < 1) {
                    $this->Session->destroy();
                    $this->Session->setFlash("Informacion de Usuario no valida");
                    $this->Flash->error(__("Informacion de Usuario no valida"));

                    $this->redirect($this->Auth->logout());
                }

                if ($user['User']['status'] == 0) {
                    $this->Session->destroy();
                    $this->Session->setFlash("Informacion de Usuario no valida");
                    $this->Flash->error(__("Informacion de Usuario no valida"));
                    $this->redirect($this->Auth->logout());
                }  
           
            $this->Session->write("usuarios", $user);
                $i = 1;
                $this->User->Usuariorole->recursive = 0;
                $rolesAsignados = $this->User->Usuariorole->find("all", array("fields" => array(
                        'Role.*', 'Usuariorole.*'), "conditions" => array(
                        "Usuariorole.usuario_id" => $user['User']['id'],
                        "Usuariorole.activo" => 1),
                ));

                if (empty($rolesAsignados)) {
                    $this->Session->destroy();
                    $this->redirect($this->Auth->logout());
                }
                    $lider = null;
                    $liderId = null;

                    foreach ($rolesAsignados as $rolAsignado) {
                    $roles[$i]['nombre'] = $rolAsignado['Role']['nombre'];
                    $roles[$i]['descripcion'] = $rolAsignado['Role']['descripcion'];
                    $roles[$i]['activo'] = $rolAsignado['Usuariorole']['activo'];
                    $roles[$i]['usuariorole'] = $rolAsignado['Usuariorole']['id'];
                    if (isset($rolAsignado['Usuariorole']['opcional'])) {
                        if ($rolAsignado['Usuariorole']['opcional'] != "" || $rolAsignado['Usuariorole']['opcional'] != null) {
                            $lider = explode(",", $rolAsignado['Usuariorole']['opcional']);
                            $liderId = $rolAsignado['Usuariorole']['id'];   
                        }
                    }
                    if ($rolAsignado['Role']['nombre'] == "Administrador") {
                        echo $rolAsignado['Role']['nombre'];
                        $lider = $rolAsignado['Usuariorole']['id'];
                    }
                    if ($rolAsignado['Role']['nombre'] == "Comprador") {
                        echo $rolAsignado['Role']['nombre'];
                        $lider = $rolAsignado['Usuariorole']['id'];
                    }
                    $i++;
                }

                if ($lider != null) {
                    $this->Session->write("lider", $lider);
                    $this->Session->write("liderId", $liderId);
                }
                
               
                $this->Session->write("roles", $roles);

 
           
                $this->redirect('/pages/home');
           
           //     $this->redirect('/roles/index');
             
              
        }
        $this->Session->setFlash(__('Informacion invalida, Intentar de nuevo'));
    }
}



  public function logout() {
        $this->Session->destroy();
        if (isset($_SERVER['HTTP_COOKIE'])) {
            $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
            foreach ($cookies as $cookie) {
                $parts = explode('=', $cookie);
                $name = trim($parts[0]);
                setcookie($name, '', time() - 1000);
                setcookie($name, '', time() - 1000, '/');
            }
        }
        $this->redirect($this->Auth->logout());
    }

 public function invalidRol() {
    $this->Flash->error(__("Rol invalido para ejecutar esta operación"));
   $this->redirect('/pages/home');
 }

 public function recuperarPass() {
        if ($this->request->is('post')) {
            $this->User->recursive = -1;
            $usuario = $this->User->find('all', [
                "conditions" => ["User.document" => $this->request->data['document']]
            ]);
            if (empty($usuario)) {
                $this->Flash->error(__("No existe un usuario con el numero de documento ingresado"));
                $this->Session->setFlash("No existe un usuario con el numero de documento ingresado");
            } else {
                $usuario = array_shift($usuario);
                App::import('Vendor', 'sendMail');
                $codigo = sendMail($usuario);
                if ($codigo) {
                    $this->User->id = $usuario['User']['id'];
                    $this->User->saveField("pass", $codigo);
                    $this->Flash->error(__("Se envió un correo electronico con los pasos para reestablecer su contraseña de ingreso"));
                    $this->Session->setFlash("Se envió un correo electronico con los pasos para reestablecer su contraseña de ingreso");
                } else {
                   $this->Flash->error(__("No fue posible enviar el correo electronico. Por favor intentelo mas tarde"));
                    $this->Session->setFlash("No fue posible enviar el correo electronico. Por favor intentelo mas tarde");
                }
            }
            $this->redirect("/users/login");
        }
    }


     public function nuevaclave($codigo) {
        if ($this->request->is('post')) {

            $this->User->recursive = -1;
            $usuario = $this->User->find("all", [
                "conditions" => ["User.pass" => AuthComponent::password($codigo)]
            ]);
  

           
            if (empty($usuario)) {
                $this->Session->setFlash("codigo de verificacion no valido");
            } else {
                if ($this->request->data['User']['pass'] == $this->request->data['User']['confirmacion']) {
                    $this->User->id = $usuario[0]['User']['id'];
                    $this->User->saveField('pass', $this->request->data['User']['pass']);
                 
                  //  $this->User->saveField('pass', "0");
                } else {
                    $this->Session->setFlash("las claves ingresadas no coinsiden. por favor vuelva a intertarlo");
                }
            }
            $this->redirect("/users/login");
        }
        $usuario = $this->User->find("all", [
            "conditions" => ["User.pass" => $codigo]
        ]);
        if (empty($usuario)) {
            $this->Session->setFlash("codigo de verificacion no valido");
        }
        $this->set("codigo", $codigo);
    }

}