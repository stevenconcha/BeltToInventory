<?php 
App::import("Model", "Userrole");


class UsersController extends AppController 
{
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');
    public $uses = array('User', 'Country', 'State', 'City');
 
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add', 'logout');
    }
    

    public function index()
    {
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

    /**
     * login method
     */
    /*
    public function login() {
        if ($this->Session->read('user')) {
            $this->redirect('/users/index');
        }

        if ($this->request->is("post")) {
            if ($this->Auth->login($this->request->data['User']['document'])) {
                $this->User->recursive = 0;
                $document = $this->Auth->user();
                $user = $this->User->find("first", array("conditions" => array(
                        "User.document" => $document,
                        "User.pass" => AuthComponent::password($this->request->data['User']['pass'])
                )));

                if (count($user) < 1) {
                    $this->Session->destroy();
                    $this->Session->setFlash("Informacion de Usuario no valida");
                    $this->redirect($this->Auth->logout());
                }

                if ($user['User']['status'] == 0) {
                    $this->Session->destroy();
                    $this->Session->setFlash("Informacion de User no valida");
                    $this->redirect($this->Auth->logout());
                }
                $i = 1;
                $this->User->Userrole->recursive = 0;
                $rolesAsignados = $this->User->Userrole->find("all", array("fields" => array(
                        'Role.*', 'Userrole.*'), "conditions" => array(
                        "Userrole.User_id" => $user['User']['id'],
                        "Userrole.activo" => 1),
                ));
                if (empty($rolesAsignados)) {
                    $this->Session->destroy();
                    $this->redirect($this->Auth->logout());
                }
                $lider = null;
                $liderId = null;
                $instructor = null;

                foreach ($rolesAsignados as $rolAsignado) {
                    $roles[$i]['nombre'] = $rolAsignado['Role']['nombre'];
                    $roles[$i]['descripcion'] = $rolAsignado['Role']['descripcion'];
                    $roles[$i]['activo'] = $rolAsignado['Userrole']['activo'];
                    $roles[$i]['Userrole'] = $rolAsignado['Userrole']['id'];
                    if (isset($rolAsignado['Userrole']['opcional'])) {
                        if ($rolAsignado['Userrole']['opcional'] != "" || $rolAsignado['Userrole']['opcional'] != null) {
                            $lider = explode(",", $rolAsignado['Userrole']['opcional']);
                            $liderId = $rolAsignado['Userrole']['id'];
                        }
                    }
                    if ($rolAsignado['Role']['nombre'] == "Instructor") {
                        echo $rolAsignado['Role']['nombre'];
                        $instructor = $rolAsignado['Userrole']['id'];
                    }
                    $i++;
                }
                if ($lider != null) {
                    $this->Session->write("lider", $lider);
                    $this->Session->write("liderId", $liderId);
                }
                if ($instructor != null) {
                    $this->User->Userrole->Userarea->recursive = -1;
                    $areas = $this->User->Userrole->Userarea->find("all", array(
                        "conditions" => array("Userarea.Userrole_id" => $instructor)
                    ));
                    foreach ($areas as $value) {
                        $area[] = $value['Userarea']['area_id'];
                    }

                    if (isset($area)) {
                        $this->Session->write('areas', $area);
                    }
                    $this->Session->write("instructor", $instructor);
                }
                $this->Session->write("user", $user);
                $this->Session->write("roles", $roles);

                $this->redirect('/pages/home');
            } else {
                $this->Session->setFlash("Informacion de User no valida");
            }
        }
    }
    */
    public function login() {

    if ($this->request->is('post')) {
                                  
        if ($this->Auth->login($this->request->data['User']['document'])) {

  // echo "Entro".$this->request->data['User']['pass'];
   // echo "Entro2 ".AuthComponent::password($this->request->data['User']['pass']);
  //    exit();  
              $this->User->recursive = 0;
                $document = $this->Auth->user();
                $user = $this->User->find("first", array("conditions" => array(
                        "User.document" => $document,
                        "User.pass" => AuthComponent::password($this->request->data['User']['pass'])
                )));
                 

                if (count($user) < 1) {
                    $this->Session->destroy();
                    $this->Session->setFlash("Informacion de Usuario no valida");
                    $this->redirect($this->Auth->logout());
                }

                if ($user['User']['status'] == 0) {
                    $this->Session->destroy();
                    $this->Session->setFlash("Informacion de Usuario no valida");
                    $this->redirect($this->Auth->logout());
                }  
           
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
                    $i++;
                }

                if ($lider != null) {
                    $this->Session->write("lider", $lider);
                    $this->Session->write("liderId", $liderId);
                }
                
                $this->Session->write("user", $user);
                $this->Session->write("roles", $roles);

                $this->redirect('/users/index');
        }
        $this->Session->setFlash(__('Informacion invalida, Intentar de nuevo'));
    }
}

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

}