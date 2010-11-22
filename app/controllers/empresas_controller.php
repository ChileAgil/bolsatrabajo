<?php
class EmpresasController extends AppController {

	var $name = 'Empresas';

    function beforeFilter() 
	{
		parent::beforeFilter();
        
        $this->Auth->deny('add','edit','delete');
	}
    
	function index() {
		$this->Empresa->recursive = 0;
		$this->set('empresas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid empresa', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('empresa', $this->Empresa->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Empresa->create();
			if ($this->Empresa->save($this->data)) {
				$this->Session->setFlash(__('The empresa has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The empresa could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Empresa->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid empresa', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Empresa->save($this->data)) {
				$this->Session->setFlash(__('The empresa has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The empresa could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Empresa->read(null, $id);
		}
		$users = $this->Empresa->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for empresa', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Empresa->delete($id)) {
			$this->Session->setFlash(__('Empresa deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Empresa was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>