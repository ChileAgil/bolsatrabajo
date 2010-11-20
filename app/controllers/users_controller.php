<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $uses = array('User','Opcion','Informacion','Alternativa','Empresa');
	var $helpers = array('Html', 'Form');
//	var $components = array('Auth','Session');
	function index() {
		$this->User->recursive = 0;
		//debug($this->Session->read('Usuario'));
		$this->set('usuarios', $this->paginate());
	}
	function beforeFilter() 
	{ 
		parent::beforeFilter();
		
			if ($this->Auth->user('tipo_usuario_id') == "3"){
			
				$this->Auth->allow('*');
				
			}
			if($this->Auth->user('usuario_id') != null && $this->Auth->user('tipo_usuario_id') != "3"){
			
				$this->Auth->allow('edit','registro_trabajador', 'registro_empleador', 'gracias_trabajadores','gracias_empresas','logout');
			
			}
			if($this->Auth->user('tipo_usuario_id') == null){
				$this->Auth->allow('registro_trabajador', 'registro_empleador', 'gracias_trabajadores','gracias_empresas','logout');
		//$this->Auth->allow('*');
		}
			$this->Auth->authorize = 'controller';
	}

	function login() 
    { 
	

    } 

    function logout() 
    { 
        $this->Session->destroy(); 
        $this->Session->setFlash('Te has deslogueado exitosamente'); 
        $this->redirect('login'); 
    } 




	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid usuario', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('usuario', $this->User->read(null, $id));
	}

	function add() {
		
		if (!empty($this->data)) {
			$existe = $this->User->find('first', array('fields'=>'email','conditions' => array('email' => $this->data['User']['email'])));
			if(!empty($existe)){
				$this->Session->setFlash(__('El email ya existe. Por favor utilice otro', true));
				$this->data['User']['password'] = '';
				$this->data['User']['email'] = '';
				$tipoUsuarios = $this->User->TipoUsuario->find('list', array('fields' => array('tipo_usuario_id','tipo_usuario')));
				$this->set(compact('tipoUsuarios'));
				return;
			}
			$this->User->create();
			if ( empty($existe) && $this->User->save($this->data)) {
				
				$this->Session->setFlash(__('Su registro se ha efectuado con éxito', true));
				$this->redirect(array('action' => 'index'));
			} else {
			//	$this->data['User']['password'] = '';
				$this->Session->setFlash(__('No se ha podido registrar por favor revise los campos marcados en rojo.', true));
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
				$this->Session->setFlash(__('El email ya existe. Por favor utilice otro', true));
				$this->data['User']['password'] = '';
				$this->data['User']['email'] = '';
				$opciones = $this->Opcion->find('all', array('conditions'=>array('Opcion.tipo_usuario_id'=>2)));
				$this->set(compact('opciones'));
				$tipoUsuarios = $this->User->TipoUsuario->find('list', array('fields' => array('tipo_usuario_id','tipo_usuario')));
				$this->set(compact('tipoUsuarios'));
				return;
			}
			$this->User->create();
			$this->data['User']['tipo_usuario_id'] = 1;
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
				
				$this->Session->setFlash(__('Su registro se ha efectuado con éxito', true));
				$this->redirect(array('controller'=>'users','action' => 'gracias_trabajadores'));
				return;

			} else {
				$this->data['User']['password'] = '';
				$this->Session->setFlash(__('No se ha podido registrar por favor revise los campos marcados en rojo.', true));
			}
		}
		$opciones = $this->Opcion->find('all', array('conditions'=>array('Opcion.tipo_usuario_id'=>1)));
		$this->set(compact('opciones'));
		$tipoUsuarios = $this->User->TipoUsuario->find('list', array('fields' => array('tipo_usuario_id','tipo_usuario')));
		$this->set(compact('tipoUsuarios'));
	}
	function registro_empleador() {

		if (!empty($this->data)) {
			$opciones_elegidas = split(",",$this->data['User']['valores_lista']);

			$existe = $this->User->find('first', array('fields'=>'email','conditions' => array('email' => $this->data['User']['email'])));
			if(!empty($existe)){
				$this->Session->setFlash(__('El email ya existe. Por favor utilice otro', true));
				$this->data['User']['password'] = '';
				$this->data['User']['email'] = '';
				$opciones = $this->Opcion->find('all', array('conditions'=>array('Opcion.tipo_usuario_id'=>2)));
				$this->set(compact('opciones'));
				$tipoUsuarios = $this->User->TipoUsuario->find('list', array('fields' => array('tipo_usuario_id','tipo_usuario')));
				$this->set(compact('tipoUsuarios'));
				return;
			}
			$this->User->create();
			$this->data['User']['tipo_usuario_id'] = 2;
			
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
				
				$this->Session->setFlash(__('Su registro se ha efectuado con éxito', true));
				$this->redirect(array('controller'=>'users','action' => 'gracias_empresas'));
				return;
			}
			} else {
				$this->data['User']['password'] = '';
				$this->Session->setFlash(__('No se ha podido registrar por favor revise los campos marcados en rojo.', true));
			}
		}
		$opciones = $this->Opcion->find('all', array('conditions'=>array('Opcion.tipo_usuario_id'=>2)));
		$this->set(compact('opciones'));
		$tipoUsuarios = $this->User->TipoUsuario->find('list', array('fields' => array('tipo_usuario_id','tipo_usuario')));
		$this->set(compact('tipoUsuarios'));

	}
	function gracias_empresas(){
		
	}
	function gracias_trabajadores(){
		
	}
	function edit($id = null) {
		//	$this->Session->setFlash(debug($this->Auth->user()), true);
			$id = $this->Auth->user('usuario_id');
			
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid usuario', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('Sus datos han sido modificados con éxito', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Sus datos no pudieron ser modificados por favor intente nuevamente', true));
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
			$this->Session->setFlash(__('Invalid id for usuario', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('Usuario deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Usuario was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
