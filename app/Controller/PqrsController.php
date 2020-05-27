<?php

App::uses('AppController', 'Controller');
date_default_timezone_set('America/Bogota');

/**
 * Pqrs Controller
 *
 * @property Pqr $Pqr
 * @property PaginatorComponent $Paginator
 */
class PqrsController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Paginator', 'Flash');

//    public $uses = array('User', 'Country', 'State', 'City');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $roles = $_SESSION["roles"];
        $rol = "";
        foreach ($roles as $key => $value) {
            if ($value["nombre"] == "Comprador") {
                $rol = $value["nombre"];
            }
        }
        $this->Pqr->recursive = 0;
        if ($rol == "Comprador") {

            $options = array('conditions' => array('pqr.documento' => $_SESSION["usuarios"]["User"]["document"]));
            $pqrs = $this->set('pqrs', $this->Pqr->find('all', $options));
            $this->set('pqrs', $this->Paginator->paginate($pqrs));
            $this->set('rol', $rol);
        } else {
            $pqrs = $this->Paginator->paginate();
            $this->set('pqrs', $pqrs);
            $this->set('rol', $rol);
        }
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Pqr->exists($id)) {
            throw new NotFoundException(__('Invalid pqr'));
        }
        $options = array('conditions' => array('pqr.' . $this->Pqr->primaryKey => $id));
        $this->set('pqr', $this->Pqr->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {

        $user = $_SESSION["usuarios"]['User'];
        $fecha_solicitud = date('Y-m-d H:i:s');
        $tipopqr = array('' => '--Seleccione--', 'Solicitud' => 'Solicitud',
            'Petición' => 'Petición', 'Queja' => 'Queja', 'Reclamo' => 'Reclamo');
        $this->set('tipopqr', $tipopqr);
        $this->set('documento', $user['document']);
        $this->set('direccion', $user['address']);
        $this->set('fecha_solicitud', $fecha_solicitud);
        $this->set('nombre_completo', $user['firstname'] . " " . $user['lastname']);

        if ($this->request->is('post')) {
            $this->Pqr->create();
            if ($this->Pqr->save($this->request->data)) {
                $this->Flash->success(__('La PQR se registro con exito.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('No se pudo registrar la PQR. Por favor, intente nuevamente.'));
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
        $user = $_SESSION["usuarios"]['User'];
        $fecha_mod = date('Y-m-d H:i:s');
        $tipopqr = array('' => '--Seleccione--', 'Solicitud' => 'Solicitud',
            'Petición' => 'Petición', 'Queja' => 'Queja', 'Reclamo' => 'Reclamo');

        $estados = array('' => '--Seleccione--', 'Rechazada' => 'Rechazada',
            'Aceptada' => 'Aceptada', 'En proceso' => 'En proceso', 'Finalizada' => 'Finalizada');

        $this->set('tipopqr', $tipopqr);
        $this->set('estados', $estados);
        $this->set('documento', $user['document']);
        $this->set('direccion', $user['address']);
        $this->set('fecha_mod', $fecha_mod);
        $this->set('nombre_completo', $user['firstname'] . " " . $user['lastname']);


        if (!$this->Pqr->exists($id)) {
            throw new NotFoundException(__('La prq no existe'));
        }


        if ($this->request->is(array('post', 'put'))) {
            if ($this->Pqr->save($this->request->data)) {
                $this->Flash->success(__('Pqr Actualizada.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('No se pudo actualizar la Pqr, intente nuevamente.'));
            }
        } else {
            $options = array('conditions' => array('Pqr.' . $this->Pqr->primaryKey => $id));
            $this->request->data = $this->Pqr->find('first', $options);
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
        $this->Pqr->id = $id;
        if (!$this->Pqr->exists()) {
            throw new NotFoundException(__('La prq no existe'));
        }
        $this->request->allowMethod('post', 'get');
        if ($this->Pqr->delete()) {
            $this->Flash->success(__('La Pqr fue eliminada.'));
        } else {
            $this->Flash->error(__('Ocurrio un error al eliminar la Prq, por favor intente nuevamente.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
