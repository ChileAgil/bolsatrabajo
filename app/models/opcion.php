<?php
class Opcion extends AppModel {
	var $name = 'Opcion';
	var $primaryKey = 'opcion_id';
	var $validate = array(
		'opcion' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'La opcion no puede ser vacia',
				'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'TipoUsuario' => array(
			'className' => 'TipoUsuario',
			'foreignKey' => 'tipo_usuario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>