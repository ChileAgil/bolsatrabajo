<?php
class InformacionesController extends AppController {

	var $name = 'Informaciones';

	function index() {
		$this->Informacion->recursive = 0;
		$this->set('informaciones', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid informacion', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('informacion', $this->Informacion->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Informacion->create();
			if ($this->Informacion->save($this->data)) {
				$this->Session->setFlash(__('The informacion has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The informacion could not be saved. Please, try again.', true));
			}
		}
		$usuarios = $this->Informacion->Usuario->find('list');
		$this->set(compact('usuarios'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid informacion', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Informacion->save($this->data)) {
				$this->Session->setFlash(__('The informacion has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The informacion could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Informacion->read(null, $id);
		}
		$usuarios = $this->Informacion->Usuario->find('list');
		$this->set(compact('usuarios'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for informacion', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Informacion->delete($id)) {
			$this->Session->setFlash(__('Informacion deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Informacion was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>