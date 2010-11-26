<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $uses = array('User','Opcion','Informacion','Alternativa','Empresa');
	var $helpers = array('Html', 'Form');

	function index() {
		$this->User->recursive = 0;
		$this->set('usuarios', $this->paginate());
	}
    
	function beforeFilter() 
	{
		parent::beforeFilter();
        
        if($this->Auth->user('tipo_usuario_id') == null){
            $this->Auth->allow('registro_trabajador', 'registro_empleador', 'gracias_trabajadores','gracias_empresas','logout');
        }
	}
    
    function isAuthorized(){
        switch($this->Auth->user('tipo_usuario_id')){
            case '1':
            case '2':
                switch($this->action){
                    case 'edit':
                    case 'view':
                        if(isset($this->params['pass'][0])){ //Primer parametro para view o edit
                            if($this->params['pass'][0] == $this->Auth->user('usuario_id'))
                                return true;
                            else return false;
                        }
                        debug($this->params);
                        return true;
                    default:
                        return false;
                }
                break;
            case '3':
            case '4':
                return true;
        }
        
        return false;
    }

	function login() 
    {
        if (!empty($this->data)) {
            $email = $this->data['User']['email'];
            $user = $this->User->find('first', array('conditions' => array('email' => $email)));
            if($user['User']['activo'] == '0'){
                $this->showErrorMessage('Tu cuenta no est&aacute; activa. Debe ser activada por secretaria docente del DCC');
            }
        }
    } 

    function logout() 
    { 
        $this->Session->destroy(); 
        $this->showSuccessMessage('Te has deslogueado exitosamente'); 
        $this->redirect($this->Auth->logout()); 
    } 

	function view($id = null) {
		if (!$id)
            $id = $this->Auth->user('usuario_id');
		$this->set('usuario', $this->User->read(null, $id));
	}

	function add() {
		
		if (!empty($this->data)) {
			$existe = $this->User->find('first', array('fields'=>'email','conditions' => array('email' => $this->data['User']['email'])));
			if(!empty($existe)){
				$this->showErrorMessage(__('El email ya existe. Por favor utilice otro', true));
				$this->data['User']['password'] = '';
				$this->data['User']['email'] = '';
				$tipoUsuarios = $this->User->TipoUsuario->find('list', array('fields' => array('tipo_usuario_id','tipo_usuario')));
				$this->set(compact('tipoUsuarios'));
				return;
			}
			$this->User->create();
			if ( empty($existe) && $this->User->save($this->data)) {
				
				$this->showSuccessMessage(__('Su registro se ha efectuado con éxito', true));
				$this->redirect(array('action' => 'index'));
			} else {
			//	$this->data['User']['password'] = '';
				$this->showErrorMessage(__('No se ha podido registrar por favor revise los campos marcados en rojo.', true));
			}
		}
		$tipoUsuarios = $this->User->TipoUsuario->find('list', array('fields' => array('tipo_usuario_id','tipo_usuario')));
		$this->set(compact('tipoUsuarios'));

	}
	function registro_trabajador() {
		if (!empty($this->data)) {
			$opciones_elegidas = split(",",$this->data['User']['valores_lista']);

			$existe = $this->User->find('first', array('fields'=>'email','conditions' => array('email' => $this->data['User']['email'])));
			if(!empty($existe)){
				$this->showErrorMessage(__('El email ya existe. Por favor utilice otro', true));
				$this->data['User']['password'] = '';
				$this->data['User']['email'] = '';
				$opciones = $this->Opcion->find('all', array('conditions'=>array('Opcion.tipo_usuario_id'=>2)));
				$this->set(compact('opciones'));
				return;
			}
			$this->User->create();
			$this->data['User']['tipo_usuario_id'] = 1;
            $this->data['User']['activo'] = 1; //Los trabajadores siempre comienzan en estado activo
            
			if (empty($existe) && $this->User->save($this->data)){ 
				$this->User->save($this->data); 
				foreach($this->data['Info'] as $info){
					if(!empty($info['Informacion']['referencia']) && !empty($info['Informacion']['descripcion'])){
						$this->Informacion->create();
						$info['Informacion']['usuario_id'] = $this->User->field('usuario_id');
						$this->Informacion->save($info);
					}
				}
				for($i = 0; $i<count($opciones_elegidas); $i++){
					$this->Alternativa->create();
					$alternativas['Alternativa']['usuario_id'] = $this->User->field('usuario_id');
					$j = $i+1;
					$alternativas['Alternativa']['opcion_id'] = $opciones_elegidas[$i];
					$alternativas['Alternativa']['lugar'] = $j;
					$this->Alternativa->save($alternativas);
				}
				
				$this->showSuccessMessage(__('Su registro se ha efectuado con éxito', true));
				$this->redirect(array('controller'=>'users','action' => 'gracias_trabajadores'));
				return;

			} else {
				$this->data['User']['password'] = '';
				$this->showErrorMessage(__('No se ha podido registrar por favor revise los campos marcados en rojo.', true));
			}
		}
		$opciones = $this->Opcion->find('all', array('conditions'=>array('Opcion.tipo_usuario_id'=>1)));
		$this->set(compact('opciones'));
	}
    
	function registro_empleador() {
		if (!empty($this->data)) {
			$opciones_elegidas = split(",",$this->data['User']['valores_lista']);

			$existe = $this->User->find('first', array('fields'=>'email','conditions' => array('email' => $this->data['User']['email'])));
			if(!empty($existe)){
				$this->showErrorMessage(__('El email ya existe. Por favor utilice otro', true));
				$this->data['User']['password'] = '';
				$this->data['User']['email'] = '';
				$opciones = $this->Opcion->find('all', array('conditions'=>array('Opcion.tipo_usuario_id'=>2)));
				$this->set(compact('opciones'));
				return;
			}
			$this->User->create();
			$this->data['User']['tipo_usuario_id'] = 2;
			$this->data['User']['activo'] = 0; // Los empleadores siempre comienzan inactivos (Sandra debe autorizarlos)
            
			$this->User->set($this->data);
			$this->Empresa->create();
			$this->Empresa->set($this->data);
			
            if (empty($existe) && $this->Empresa->validates()){
                if($this->User->validates()){
                    $this->User->save();
                    $this->data['Empresa']['usuario_id'] = $this->User->getLastInsertID();
                    $this->Empresa->set($this->data);
                    $this->Empresa->save();
                    foreach($this->data['Info'] as $info){
                        if(!empty($info['Informacion']['referencia']) && !empty($info['Informacion']['descripcion'])){
                            $this->Informacion->create();
                            $info['Informacion']['usuario_id'] = $this->User->field('usuario_id');
                            $this->Informacion->save($info);
                        }
                    }
                    
                    for($i = 0; $i<count($opciones_elegidas); $i++){
                        $this->Alternativa->create();
                        $alternativas['Alternativa']['usuario_id'] = $this->User->field('usuario_id');
                        $j = $i+1;
                        $alternativas['Alternativa']['opcion_id'] = $opciones_elegidas[$i];
                        $alternativas['Alternativa']['lugar'] = $j;
                        $this->Alternativa->save($alternativas);
                    }
                    
                    $this->showSuccessMessage(__('Su registro se ha efectuado con éxito', true));
                    $this->redirect(array('controller'=>'users','action' => 'gracias_empresas'));
                    return;
                }
			} else {
				$this->data['User']['password'] = '';
				$this->showErrorMessage(__('No se ha podido registrar por favor revise los campos marcados en rojo.', true));
			}
		}
		$opciones = $this->Opcion->find('all', array('conditions'=>array('Opcion.tipo_usuario_id'=>2)));
		$this->set(compact('opciones'));
	}
    
	function gracias_empresas(){
		
	}
	function gracias_trabajadores(){
		
	}
    
	function edit($id = null) {
        $id = $this->Auth->user('usuario_id');
			
		if (!$id && empty($this->data)) {
			$this->showErrorMessage(__('Invalid usuario', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			
			if ($this->User->save($this->data)) {
				$this->showSuccessMessage(__('Sus datos han sido modificados con éxito', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->showErrorMessage(__('Sus datos no pudieron ser modificados por favor intente nuevamente', true));
			}
		}
		if (empty($this->data)) {
		
			$this->data = $this->User->read(null, $id);
			if(!empty($this->data['User']['password'])) $this->data['User']['password']  = $this->Auth->password($this->data['User']['password']);
			//debug($this->data);
		}
		$tipoUsuarios = $this->User->TipoUsuario->find('list', array('fields' => array('tipo_usuario_id','tipo_usuario')));
		$this->set(compact('tipoUsuarios'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->showErrorMessage(__('Invalid id for usuario', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->showSuccessMessage(__('Usuario deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->showErrorMessage(__('Usuario was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
    
    function empresas_pendientes(){
        $empresas = $this->User->find('all', array('conditions' => array('Empresa.validada' => 0)));
        $this->set(compact('empresas'));
    }
    
    function detalles_empresa($empresa_id = null){
        if($empresa_id){
            $empresa = $this->User->Empresa->find('first', array('conditions' => array('Empresa.empresa_id' => $empresa_id)));
            $this->set('empresa', $empresa);
        }
    }
    
    function aceptar_empresa($usuario_responsable_id = null){
        if($usuario_responsable_id){
            //$this->Empresa->empresa_id = $usuario_responsable_id;
			$datos['empresa_id'] = $usuario_responsable_id;
			$datos['validada'] = 1;
            if($this->Empresa->save($datos)){
				//$this->Empresa->saveField('validada',1)){
                $this->showSuccessMessage(__('Empresa aceptada', true));
                $this->redirect(array('action' => 'empresas_pendientes'));
            }
        }
        $this->showErrorMessage(__('Ocurrió un error al aceptar la empresa', true));
        $this->redirect(array('action' => 'empresas_pendientes'));
    }
    
    function rechazar_empresa($usuario_responsable_id = null){
        if($usuario_responsable_id){
            /**
             * Debemos borrar los usuarios rechazados por secretaria docente?
             *
            if($this->User->Empresa->deleteAll(array('Empresa.usuario_id' => $usuario_responsable_id))){
                if($this->User->delete($usuario_responsable_id, false)){
                    $this->showSuccessMessage(__('Empresa rechazada', true));
                    $this->redirect(array('action' => 'empresas_pendientes'));
                }
            }
            */
        }
        $this->showErrorMessage(__('Ocurrio un error al rechazar la empresa', true));
        $this->redirect(array('action' => 'empresas_pendientes'));
    }
}
?>
