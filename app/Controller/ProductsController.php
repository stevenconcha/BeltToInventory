<?php

App::uses('AppController', 'Controller', 'Store');
date_default_timezone_set('America/Bogota');

/**
 * Products Controller
 *
 * @property Product $Product
 * @property PaginatorComponent $Paginator
 */
class ProductsController extends AppController {

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
        $this->Product->recursive = 0;
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
        if (!$this->Product->exists($id)) {
            throw new NotFoundException(__('Invalid product'));
        }


        /* $options = array('conditions' => array('Store.id' => "1"));
          $productos = $this->Product->Store->find('first', $options);
          print_r($productos);
          exit; */


        $options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
        $product = $this->Product->find('first', $options);
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
        $almacenes = $this->Product->Store->find('all');
        $almacen_arr = array('' => '--Select one--');
        foreach ($almacenes as &$almacen) {
            $almacen_arr[$almacen['Store']['id']] = $almacen['Store']['nombre'];
        }
        unset($almacen);
        $this->set('almacenes', $almacen_arr);
        $now = date('Y-m-d H:i:s');

        $this->set('fecha_actual', $now);
        $this->set('create_by', $_SESSION['usuarios']['User']['id']);

        if ($this->request->is('post')) {
            $this->Product->create();
            $this->Product->set($this->request->data);
            if ($this->Product->validates()) {
                if ($this->Product->save($this->request->data, $validate = false)) {
                    $this->Flash->error(__('El Producto ha sido creado'));
                    return $this->redirect(array('action' => 'index'));
                }
            } else {
               $this->Flash->error(__('El Producto no fue creado'));
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
        $almacenes = $this->Product->Store->find('all');
        $almacen_arr = array('' => '--Select one--');
        foreach ($almacenes as &$almacen) {
            $almacen_arr[$almacen['Store']['id']] = $almacen['Store']['nombre'];
        }
        unset($almacen);
        $this->set('almacenes', $almacen_arr);
        $now = date('Y-m-d H:i:s');

        $this->set('fecha_actual', $now);
        $this->set('create_by', $_SESSION['usuarios']['User']['id']);

        if (!$this->Product->exists($id)) {
            throw new NotFoundException(__('Invalid product'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Product->save($this->request->data)) {
                $this->Flash->success(__('El producto ha sido actualizado.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('No se pudo actualizar el producto. Por favor intente nuevamente.'));
            }
        } else {
            $options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
            $this->request->data = $this->Product->find('first', $options);
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
        $this->Product->id = $id;
        if (!$this->Product->exists()) {
            throw new NotFoundException(__('Producto In valido'));
        }
        $this->request->allowMethod('post', 'get');
        if ($this->Product->delete()) {
            $this->Flash->success(__('El producto fue eliminado.'));
        } else {
            $this->Flash->error(__('No se pudo eliminar el producto. Por favor, intente otra vez..!'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
