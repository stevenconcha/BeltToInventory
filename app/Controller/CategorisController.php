<?php
App::uses('AppController', 'Controller');
/**
 * Categoris Controller
 *
 * @property Categori $Categori
 * @property PaginatorComponent $Paginator
 */
class CategorisController extends AppController {

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
		$this->Categori->recursive = 0;
		$this->set('categoris', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Categori->exists($id)) {
			throw new NotFoundException(__('Invalid categori'));
		}
		$options = array('conditions' => array('Categori.' . $this->Categori->primaryKey => $id));
		$this->set('categori', $this->Categori->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Categori->create();
			if ($this->Categori->save($this->request->data)) {
				$this->Flash->success(__('The categori has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The categori could not be saved. Please, try again.'));
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
		if (!$this->Categori->exists($id)) {
			throw new NotFoundException(__('Invalid categori'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Categori->save($this->request->data)) {
				$this->Flash->success(__('The categori has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The categori could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Categori.' . $this->Categori->primaryKey => $id));
			$this->request->data = $this->Categori->find('first', $options);
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
		$this->Categori->id = $id;
		if (!$this->Categori->exists()) {
			throw new NotFoundException(__('Invalid categori'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Categori->delete()) {
			$this->Flash->success(__('The categori has been deleted.'));
		} else {
			$this->Flash->error(__('The categori could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
