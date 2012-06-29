<?php
App::uses('AppController', 'Controller');
/**
 * ProductPictures Controller
 *
 * @property ProductPicture $ProductPicture
 */
class ProductPicturesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProductPicture->recursive = 0;
		$this->set('productPictures', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ProductPicture->id = $id;
		if (!$this->ProductPicture->exists()) {
			throw new NotFoundException(__('Invalid product picture'));
		}
		$this->set('productPicture', $this->ProductPicture->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProductPicture->create();
			if ($this->ProductPicture->save($this->request->data)) {
				$this->Session->setFlash(__('The product picture has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product picture could not be saved. Please, try again.'));
			}
		}
		$products = $this->ProductPicture->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ProductPicture->id = $id;
		if (!$this->ProductPicture->exists()) {
			throw new NotFoundException(__('Invalid product picture'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProductPicture->save($this->request->data)) {
				$this->Session->setFlash(__('The product picture has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product picture could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ProductPicture->read(null, $id);
		}
		$products = $this->ProductPicture->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->ProductPicture->id = $id;
		if (!$this->ProductPicture->exists()) {
			throw new NotFoundException(__('Invalid product picture'));
		}
		if ($this->ProductPicture->delete()) {
			$this->Session->setFlash(__('Product picture deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Product picture was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
