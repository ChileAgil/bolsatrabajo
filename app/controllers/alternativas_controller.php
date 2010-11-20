<?php
class AlternativasController extends AppController {

	var $name = 'Alternativas';

	function index() {
		$this->Alternativa->recursive = 0;
		$this->set('alternativas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid alternativa', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('alternativa', $this->Alternativa->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Alternativa->create();
			if ($this->Alternativa->save($this->data)) {
				$this->Session->setFlash(__('The alternativa has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The alternativa could not be saved. Please, try again.', true));
			}
		}
		$usuarios = $this->Alternativa->Usuario->find('list');
		$opciones = $this->Alternativa->Opcion->find('list');
		$this->set(compact('usuarios', 'opciones'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid alternativa', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Alternativa->save($this->data)) {
				$this->Session->setFlash(__('The alternativa has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The alternativa could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Alternativa->read(null, $id);
		}
		$usuarios = $this->Alternativa->Usuario->find('list');
		$opciones = $this->Alternativa->Opcion->find('list');
		$this->set(compact('usuarios', 'opciones'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for alternativa', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Alternativa->delete($id)) {
			$this->Session->setFlash(__('Alternativa deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Alternativa was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>