<?php
class Empresa extends AppModel {
	var $name = 'Empresa';
	var $useTable = 'empresas';
	var $primaryKey = 'empresa_id';
    
    var $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'usuario_id',
            'dependent' => true
        )
    );
    
	var $validate = array(
		'nombre_fantasia' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'El nombre de la empresa no puede ser vacío',
				'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'razon_social' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'La razón social no puede ser vacía',
				'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'rut' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'El rut no puede ser vacío',
				'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'El rut debe contener sólo números',
				'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'guion' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'El guion no puede ser vacío',
				'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'maxlength' => array(
				'rule' => array('maxlength',1),
				'message' => 'El guión debe contener tener sólo 1 número o K',
				'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

}
?>