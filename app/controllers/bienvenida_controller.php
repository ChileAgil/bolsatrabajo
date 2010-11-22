<?php
class BienvenidaController extends AppController{
	
	var $uses = array();
    
	function beforeFilter(){
        parent::beforeFilter();
        $this->Auth->allow('index', 'acerca');
	}
	function index(){
		
	}
	function acerca(){
		
	}
}

?>