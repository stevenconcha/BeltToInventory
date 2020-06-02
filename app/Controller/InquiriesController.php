<?php

App::uses('AppController', 'Controller', 'User');
date_default_timezone_set('America/Bogota');

/**
 * Inquiries Controller
 *
 * @property Inquiry $Inquiry
 * @property PaginatorComponent $Paginator
 */
class InquiriesController extends AppController {

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
        $this->Inquiry->recursive = 0;

        $dataPreguntas = array();
        $totalElements = $this->Inquiry->query('SELECT count(id) total FROM inquiries');
        $dataPreguntas['totalElements'] = $totalElements;
        for ($index = 1; $index <= 11; $index++) {
            $data = $this->Inquiry->query('SELECT p' . $index . ', count(p' . $index . ') total FROM inquiries GROUP by p' . $index . ' order by 1');
            $dataPreguntas['dataP' . $index] = $data;
        }
        $this->set('data', $dataPreguntas);
        $this->set('inquiries', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Inquiry->exists($id)) {
            throw new NotFoundException(__('Invalid inquiry'));
        }
        $options = array('conditions' => array('Inquiry.' . $this->Inquiry->primaryKey => $id));
        $this->set('inquiry', $this->Inquiry->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {


        $now = date('Y-m-d H:i:s');
        $this->set('fecha', $now);
        $this->set('user', $_SESSION['usuarios']['User']['id']);


        if ($this->request->is('post')) {
            $this->Inquiry->create();
            $this->Inquiry->set($this->request->data);
            if ($this->Inquiry->validates()) {
                if ($this->Inquiry->save($this->request->data, $validate = true)) {
                    $this->Flash->success(__('El Producto ha sido creado'));
                    return $this->redirect(array('action' => 'add'));
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
        if (!$this->Inquiry->exists($id)) {
            throw new NotFoundException(__('Invalid inquiry'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Inquiry->save($this->request->data)) {
                $this->Flash->success(__('The inquiry has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The inquiry could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Inquiry.' . $this->Inquiry->primaryKey => $id));
            $this->request->data = $this->Inquiry->find('first', $options);
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
        $this->Inquiry->id = $id;
        if (!$this->Inquiry->exists()) {
            throw new NotFoundException(__('Invalid inquiry'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Inquiry->delete()) {
            $this->Flash->success(__('The inquiry has been deleted.'));
        } else {
            $this->Flash->error(__('The inquiry could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
