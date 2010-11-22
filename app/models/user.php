<?php
class User extends AppModel {
	var $name = 'User';
	var $useTable = 'usuarios';
	var $primaryKey = 'usuario_id';
    
    var $hasOne = array(
        'Empresa' => array(
            'className' => 'Empresa',
            'foreignKey' => 'usuario_id',
            'dependent' => false
        )
    );

	var $belongsTo = array(
		'TipoUsuario' => array(
			'className' => 'TipoUsuario',
			'foreignKey' => 'tipo_usuario_id',
            'dependent' => false
		)
	);

	var $hasMany = array(
		'Alternativa' => array(
			'className' => 'Alternativa',
			'foreignKey' => 'usuario_id',
			'dependent' => false
		),
		'Informacion' => array(
			'className' => 'Informacion',
			'foreignKey' => 'usuario_id',
			'dependent' => false
		)
	);

	
	var $validate = array(
		'nombre' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Debe ingresar su nombre',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'apellido' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Debe ingresar su apellido',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Debe ingresar una dirección de email válida',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fecha_nacimiento' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Debe ingresar su fecha de nacimiento',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'password' => array(
				'rule' => array('notempty'),
				'message' => 'El campo contraseña no puede ser vacio',
				//'allowEmpty' => false,
				//'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
?>