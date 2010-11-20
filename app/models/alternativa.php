<?php
class Alternativa extends AppModel {
	var $name = 'Alternativa';
	var $primaryKey = 'alternativa_id';
	var $validate = array(
		'lugar' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'usuario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Opcion' => array(
			'className' => 'Opcion',
			'foreignKey' => 'opcion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>