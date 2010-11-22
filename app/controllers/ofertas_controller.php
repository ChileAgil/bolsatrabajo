<?php
class OfertasController extends AppController {

	var $name = 'Ofertas';
    
    function beforeFilter() {
		parent::beforeFilter();
        
        $this->Auth->allow('index');
		if($this->Auth->user('tipo_usuario_id') > 2){
			$this->Auth->allow('*');
		}
    }
    
    function isAuthorized(){
        switch($this->Auth->user('tipo_usuario_id')){
            case '1': //An student can only view
                switch($this->action){
                    case 'view':
                        return true;
                    default:
                        return false;
                }
            case '2': //An employer can view and add. Also can and edit its own offers
                switch($this->action){
                    case 'view':
                    case 'add':
                        return true;
                    case 'edit':
                        if(isset($this->params['pass'][0])){ //Primer parametro para edit
                            $oferta_id = $this->params['pass'][0];
                            $oferta = $this->Oferta->read(null, $oferta_id);
                            
                            if($oferta['Empresa']['usuario_id'] == $this->Auth->user('usuario_id'))
                                return true;
                            else return false;
                        }
                        debug($this->params);
                        return true;
                    default:
                        return false;
                }
            case '3':
            case '4':
                return true;
        }
        
        return false;
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
			$this->showErrorMessage(__('Invalid oferta', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('oferta', $this->Oferta->read(null, $id));
	}

	function add() {
		$usuario_id = $this->Auth->user('usuario_id');
		$tipo_usuario = $this->Auth->user('tipo_usuario_id');

		if (!empty($this->data)) {
			$this->Oferta->create();
			if ($this->Oferta->saveAll($this->data)) {
				$this->showSuccessMessage(__('The oferta has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->showErrorMessage(__('The oferta could not be saved. Please, try again.', true));
			}
		}
		
		$empresas = $this->Oferta->Empresa->find('list', array('fields'=>array('empresa_id','nombre_fantasia'), 'conditions'=>array(
			'usuario_id'=>$usuario_id)));
		if($tipo_usuario == "3" || $tipo_usuario == "4"){
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

		if (!$id && empty($this->data)) {
			$this->showErrorMessage(__('Invalid oferta', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Oferta->save($this->data)) {
				$this->showSuccessMessage(__('The oferta has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->showErrorMessage(__('The oferta could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Oferta->read(null, $id);
		}
        
        $empresas = $this->Oferta->Empresa->find('list', array('fields'=>array('empresa_id','nombre_fantasia'), 'conditions'=>array(
            'usuario_id'=>$usuario_id)));
        if($tipo_usuario == "3" || $tipo_usuario == "4"){
            $empresas = $this->Oferta->Empresa->find('list', array('fields'=>array('empresa_id','nombre_fantasia')));
        }
        $comunas = $this->Oferta->Comuna->find('list');
        $tipo_requerimientos = $this->Oferta->ReqAdicional->TipoRequerimiento->find('list');
        $this->set(compact('empresas'));
        $this->set(compact('comunas'));
        $this->set('tipo_usuario_id',$tipo_usuario);
        $this->set(compact('tipo_requerimientos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->showErrorMessage(__('Invalid id for oferta', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Oferta->delete($id)) {
			$this->showSuccessMessage(__('Oferta deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->showErrorMessage(__('Oferta was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>