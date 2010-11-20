<?php
class TipoUsuariosController extends AppController {

	var $name = 'TipoUsuarios';
	var $components = array('Auth');

	function index() {
		$this->TipoUsuario->recursive = 0;
		$this->set('tipoUsuarios', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid tipo usuario', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tipoUsuario', $this->TipoUsuario->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TipoUsuario->create();
			if ($this->TipoUsuario->save($this->data)) {
				$this->Session->setFlash(__('The tipo usuario has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo usuario could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid tipo usuario', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TipoUsuario->save($this->data)) {
				$this->Session->setFlash(__('The tipo usuario has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo usuario could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TipoUsuario->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for tipo usuario', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TipoUsuario->delete($id)) {
			$this->Session->setFlash(__('Tipo usuario deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tipo usuario was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>