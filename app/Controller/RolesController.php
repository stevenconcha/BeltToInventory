<?php
App::uses('AppController', 'Controller');
/**
 * Roles Controller
 *
 * @property Role $Role
 * @property PaginatorComponent $Paginator
 */
class RolesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash');
	public $helpers = array('Html', 'Form', 'Flash');
  

/**
 * index method
 *
 * @return void
 */
/*
	public function index() {
		$this->checkPermission(array("Administrador", "Comprador")); // agregado por steven
		$this->Role->recursive = 0;
		$this->set('roles', $this->Paginator->paginate());
	}
*/

 public function index()
    {
        $this->checkPermission(array("Administrador", "Comprador"));
        $this->paginate = array(
            'limit' => 3,
            'order' => array('id' => 'desc')
        );
        $roles = $this->paginate('Role');
        $this->set('roles', $roles);
    }
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
	   $this->checkPermission(array("Administrador", "Comprador")); // agregado por steven
		if (!$this->Role->exists($id)) {
			throw new NotFoundException(__('Rol invalido'));
		}
		$options = array('conditions' => array('Role.' . $this->Role->primaryKey => $id));
		$this->set('role', $this->Role->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->checkPermission(array("Administrador")); // agregado por steven
		if ($this->request->is('post')) {
			$this->Role->create();
			if ($this->Role->save($this->request->data)) {
				$this->Flash->success(__('El rol ha sido guardado satisfactoriamente'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('El rol no se ha podido registrar sactisfactoriamente.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->checkPermission(array("Administrador")); // agregado por steven
		if (!$this->Role->exists($id)) {
			throw new NotFoundException(__('Invalid role'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Role->save($this->request->data)) {
			//	$this->Flash->success(__('The role has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('El rol no se ha podido editar correctamente.'));
			}
		} else {
			$options = array('conditions' => array('Role.' . $this->Role->primaryKey => $id));
			$this->request->data = $this->Role->find('first', $options);
		}
	}


	/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
   public function delete($id)
    {
      $this->checkPermission(array("Administrador"));
        if (!$this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
     
        $this->Role->id = $id;
        if ($this->Role->delete()) {
            $this->Flash->success(__("Se ha eliminado el Rol satisfactoriamente"));
        } else {
            $this->Flash->error(__("el rol con el id: %s no se puede eliminar", h($id)));
        }

        return $this->redirect(array('action' => 'index'));
    }
}
