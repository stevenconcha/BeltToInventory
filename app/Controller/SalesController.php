<?php
App::uses('AppController', 'Controller', 'Store');
date_default_timezone_set('America/Bogota');
/**
 * Sales Controller
 *
 * @property Sale $Sale
 * @property PaginatorComponent $Paginator
 */
class SalesController extends AppController {

/**
 * Components
 *
 * @var array
 */
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Paginator', 'Flash');

/**
 * index method
 *
 * @return void
 */
	public function index() {
	$this->checkPermission(array("Administrador")); // agregado por steven

		$this->Sale->recursive = 0;
		$this->set('products', $this->Paginator->paginate());
	}




  
    

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */


    public function view($id = null) {
        if (!$this->Sale->exists($id)) {
            throw new NotFoundException(__('Invalid product'));
        }
        /* $options = array('conditions' => array('Store.id' => "1"));
          $productos = $this->Product->Store->find('first', $options);
          print_r($productos);
          exit; */
        $options = array('conditions' => array('Sale.' . $this->Sale->primaryKey => $id));
        $product = $this->Sale->find('first', $options);
//        echo "<pre>";
//        print_r($product);
//        exit();
        $this->set('products', $product);
    }


/**
 * add method
 *
 * @return void
 */
	public function add() {
	   $this->checkPermission(array("Administrador")); // agregado por steven
        $almacenes = $this->Sale->Product->find('all');
       
        $almacen_arr = array('' => '--Select one--');
        foreach ($almacenes as &$almacen) {
            $almacen_arr[$almacen['Product']['id']] = $almacen['Product']['nombre_prod'];
        }
      
        unset($almacen);
       
       // $usuarios = $this->Sale->User->find('all');

       $usuarios =  $this->Sale->User->Usuariorole->find("all", array("fields" => array(
                        'User.*'), "conditions" => array(
                         "Usuariorole.role_id" => 3, 
                        "Usuariorole.activo" => 1),
                ));
      

        $user_arr = array('' => '--Select one--');
        foreach ($usuarios as &$user) {
            $user_arr[$user['User']['id']] = $user['User']['document']." - ".$user['User']['firstname'];
        }

        unset($user);


        $this->set('almacenes', $almacen_arr);
        $this->set('users', $user_arr);
        $now = date('Y-m-d H:i:s');

        $this->set('fecha_actual', $now);
        $this->set('create_by', $_SESSION['usuarios']['User']['id']);

		if ($this->request->is('post')) {
			$this->Sale->create();
			if ($this->Sale->save($this->request->data)) {
				$this->Flash->success(__('La venta ha sido registrada con exito.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('No se ha podido registrar la venta'));
			}
		}
	}




   public function edit($id = null) {

        $this->checkPermission(array("Administrador")); // agregado por steven
        $almacenes = $this->Sale->Product->find('all');
       
        $almacen_arr = array('' => '--Select one--');
        foreach ($almacenes as &$almacen) {
            $almacen_arr[$almacen['Product']['id']] = $almacen['Product']['nombre_prod'];
        }
      
        unset($almacen);

        $usuarios =  $this->Sale->User->Usuariorole->find("all", array("fields" => array(
                        'User.*'), "conditions" => array(
                         "Usuariorole.role_id" => 3, 
                        "Usuariorole.activo" => 1),
                ));
      

        $user_arr = array('' => '--Select one--');
        foreach ($usuarios as &$user) {
            $user_arr[$user['User']['id']] = $user['User']['document']." - ".$user['User']['firstname'];
        }

        unset($user);


        $this->set('almacenes', $almacen_arr);
        $this->set('users', $user_arr);

        $now = date('Y-m-d H:i:s');

        $this->set('fecha_actual', $now);
        $this->set('create_by', $_SESSION['usuarios']['User']['id']);

       if (!$this->Sale->exists($id)) {
			throw new NotFoundException(__('Venta invalida'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sale->save($this->request->data)) {
				$this->Flash->success(__('La venta ha sido editada.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('No se pudo editar la venta.'));
			}
		} else {
			$options = array('conditions' => array('Sale.' . $this->Sale->primaryKey => $id));
			$this->request->data = $this->Sale->find('first', $options);
		}
    }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit1($id = null) {
		if (!$this->Sale->exists($id)) {
			throw new NotFoundException(__('Invalid sale'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sale->save($this->request->data)) {
				$this->Flash->success(__('The sale has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The sale could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Sale.' . $this->Sale->primaryKey => $id));
			$this->request->data = $this->Sale->find('first', $options);
		}
	}






/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
	   $this->checkPermission(array("Administrador")); // agregado por steven

		$this->Sale->id = $id;
		if (!$this->Sale->exists()) {
			throw new NotFoundException(__('Venta invalida'));
		}
	//	$this->request->allowMethod('post', 'delete');
		if ($this->Sale->delete()) {
			$this->Flash->success(__('La venta ha sido eliminada.'));
		} else {
			$this->Flash->error(__('La venta no ha podido ser elimianda, por favor intentelo mas tarde.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
