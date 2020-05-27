<?php

App::uses('AppController', 'Controller');

/**
 * Stores Controller
 *
 * @property Store $Store
 * @property PaginatorComponent $Paginator
 */
class StoresController extends AppController {

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
        
//        echo "<pre>";
//        print_r($_SESSION["usuarios"]["User"]);
//        exit();       

        $this->Store->recursive = 0;
        $this->set('stores', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->checkPermission(array("Administrador")); // agregado por steven

        if (!$this->Store->exists($id)) {
            throw new NotFoundException(__('Invalid store'));
        }
        $options = array('conditions' => array('Store.' . $this->Store->primaryKey => $id));
        $this->set('store', $this->Store->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {

        $this->checkPermission(array("Administrador")); // agregado por steven

        if ($this->request->is('post')) {
            $this->Store->create();
            $this->Store->set($this->request->data);
            if ($this->Store->validates()) {
                if ($this->Store->save($this->request->data, $validate = false)) {
                    $this->Flash->success(__('La Bodega ha sido creada'));
                    return $this->redirect(array('action' => 'index'));
                }
            } else {
                $this->Flash->error(__('El Bodega no fue creada'));
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

        if (!$this->Store->exists($id)) {
            throw new NotFoundException(__('La bodega no existe'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $this->Store->set($this->request->data);
            if ($this->Store->validates()) {
                if ($this->Store->save($this->request->data, $validate = false)) {
                    $this->Flash->success(__('La Bodega ha sido actualizada'));
                    return $this->redirect(array('action' => 'index'));
                }
            } else {
                $this->Flash->error(__('El Bodega no fue actualizada'));
            }
        } else {
            $options = array('conditions' => array('Store.' . $this->Store->primaryKey => $id));
            $this->request->data = $this->Store->find('first', $options);
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
        $this->Store->id = $id;
        if (!$this->Store->exists()) {
            throw new NotFoundException(__('Invalid store'));
        }
        $this->request->allowMethod('post', 'get');
        if ($this->Store->delete()) {
            $this->Flash->success(__('The store has been deleted.'));
        } else {
            $this->Flash->error(__('The store could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
