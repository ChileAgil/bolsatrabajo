<?php
class BienvenidaController extends AppController{
	
	var $uses = array();
	function beforeFilter() 
	{ 
		//	$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
	//		$this->Auth->loginRedirect = array('controller' => 'bienvenida', 'action' => 'index', 'home');
			$this->Auth->allow('index', 'acerca');
	//		$this->Auth->authorize = 'controller';
	//		$this->Auth->fields= array('username'=>'email', 'password'=>'password');
			//$this->Auth->allow('*');
	
	       // $this->__validateLoginStatus(); 
	}
	function index(){
		
	}
	function acerca(){
		
	}
}

?>