<?php
class OpcionesController extends AppController {

	var $name = 'Opciones';

	function index() {
		$this->Opcion->recursive = 0;
		$this->set('opciones', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid opcion', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('opcion', $this->Opcion->read(null, $id));
	}

	function add() {
	
		if (!empty($this->data)) {
			
			$this->Opcion->create();
			if ($this->Opcion->save($this->data)) {
				$this->Session->setFlash(__('The opcion has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The opcion could not be saved. Please, try again.', true));
			}
		}
		//$tipoUsuarios = $this->Opcion->TipoUsuario->find('list');
	//	$this->Opcion->TipoUsuario->recursive = -1;
		$tipoUsuarios = $this->Opcion->TipoUsuario->find('list', array('fields' => array('tipo_usuario_id','tipo_usuario')));
		$this->set(compact('tipoUsuarios'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid opcion', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Opcion->save($this->data)) {
				$this->Session->setFlash(__('The opcion has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The opcion could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Opcion->read(null, $id);
		}
		$tipoUsuarios = $this->Opcion->TipoUsuario->find('list');
		$this->set(compact('tipoUsuarios'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for opcion', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Opcion->delete($id)) {
			$this->Session->setFlash(__('Opcion deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Opcion was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>