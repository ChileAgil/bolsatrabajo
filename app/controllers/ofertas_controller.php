<?php
class OfertasController extends AppController {

	var $name = 'Ofertas';
    
    function beforeFilter() {
		parent::beforeFilter();
        $this->Auth->allow('index','view', 'add');
		if($this->Auth->user('tipo_usuario_id') > 2){
			$this->Auth->allow('*');
		}
		$this->Auth->authorize = 'controller';
    }

	function index() {
		$this->Oferta->recursive = 0;
		$nivelusuario = $this->Auth->user('tipo_usuario_id');
		$usuario_id = $this->Auth->user('usuario_id');
		$this->set(compact('nivelusuario','usuario_id'));
		$this->set('ofertas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid oferta', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('oferta', $this->Oferta->read(null, $id));
	}

	function add() {
		$usuario_id = $this->Auth->user('usuario_id');
		$tipo_usuario = $this->Auth->user('tipo_usuario_id');
		if($tipo_usuario < 2)
			$this->redirect(array('action' => 'index'));
		if (!empty($this->data)) {
			$this->Oferta->create();
			if ($this->Oferta->saveAll($this->data)) {
				$this->Session->setFlash(__('The oferta has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The oferta could not be saved. Please, try again.', true));
			}
		}
		
		$empresas = $this->Oferta->Empresa->find('list', array('fields'=>array('empresa_id','nombre_fantasia'), 'conditions'=>array(
			'usuario_id'=>$usuario_id)));
		if($tipo_usuario == "4"){
			$empresas = $this->Oferta->Empresa->find('list', array('fields'=>array('empresa_id','nombre_fantasia')));
		}
		if($tipo_usuario == "3"){
				$empresas = $this->Oferta->Empresa->find('list', array('fields'=>array('empresa_id','nombre_fantasia')));
		}
        $comunas = $this->Oferta->Comuna->find('list');
        $tipo_requerimientos = $this->Oferta->ReqAdicional->TipoRequerimiento->find('list');
		$this->set(compact('empresas'));
        $this->set(compact('comunas'));
		$this->set('tipo_usuario_id',$tipo_usuario);
        $this->set(compact('tipo_requerimientos'));
	}

	function edit($id = null) {
		$usuario_id = $this->Auth->user('usuario_id');
		$tipo_usuario = $this->Auth->user('tipo_usuario_id');
		if($tipo_usuario < 2)
			$this->redirect(array('action' => 'index'));
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid oferta', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Oferta->save($this->data)) {
				$this->Session->setFlash(__('The oferta has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The oferta could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Oferta->read(null, $id);
		}
			$empresas = $this->Oferta->Empresa->find('list', array('fields'=>array('empresa_id','nombre_fantasia'), 'conditions'=>array(
				'usuario_id'=>$usuario_id)));
			if($tipo_usuario == "4"){
			//	$empresas = $this->Oferta->Empresa->find('list', array('fields'=>array('empresa_id','nombre_fantasia')));
			}
	        $comunas = $this->Oferta->Comuna->find('list');
	        $tipo_requerimientos = $this->Oferta->ReqAdicional->TipoRequerimiento->find('list');
			//$this->set(compact('empresas'));
	        $this->set(compact('comunas'));
			$this->set('tipo_usuario_id',$tipo_usuario);
	        $this->set(compact('tipo_requerimientos'));
	
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for oferta', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Oferta->delete($id)) {
			$this->Session->setFlash(__('Oferta deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Oferta was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>