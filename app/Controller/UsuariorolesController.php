<?php
App::uses('AppController', 'Controller');
/**
 * Usuarioroles Controller
 *
 * @property Usuariorole $Usuariorole
 * @property PaginatorComponent $Paginator
 */
class UsuariorolesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Usuariorole->recursive = 0;
		$this->set('usuarioroles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Usuariorole->exists($id)) {
			throw new NotFoundException(__('Invalid usuariorole'));
		}
		$options = array('conditions' => array('Usuariorole.' . $this->Usuariorole->primaryKey => $id));
		$this->set('usuariorole', $this->Usuariorole->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Usuariorole->create();
			if ($this->Usuariorole->save($this->request->data)) {
				$this->Flash->success(__('The usuariorole has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The usuariorole could not be saved. Please, try again.'));
			}
		}
		$roles = $this->Usuariorole->Role->find('list');
		$usuarios = $this->Usuariorole->Usuario->find('list');
		$this->set(compact('roles', 'usuarios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Usuariorole->exists($id)) {
			throw new NotFoundException(__('Invalid usuariorole'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Usuariorole->save($this->request->data)) {
				$this->Flash->success(__('The usuariorole has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The usuariorole could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Usuariorole.' . $this->Usuariorole->primaryKey => $id));
			$this->request->data = $this->Usuariorole->find('first', $options);
		}
		$roles = $this->Usuariorole->Role->find('list');
		$usuarios = $this->Usuariorole->Usuario->find('list');
		$this->set(compact('roles', 'usuarios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Usuariorole->id = $id;
		if (!$this->Usuariorole->exists()) {
			throw new NotFoundException(__('Invalid usuariorole'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Usuariorole->delete()) {
			$this->Flash->success(__('The usuariorole has been deleted.'));
		} else {
			$this->Flash->error(__('The usuariorole could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
