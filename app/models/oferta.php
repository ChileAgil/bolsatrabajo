<?php
class Oferta extends AppModel{
    var $name = 'Oferta';
    var $useTable = 'ofertas';
    var $primaryKey = 'oferta_id';
    var $displayField = 'titulo';
    
    var $belongsTo = array(
        'Empresa' => array(
            'className' => 'Empresa',
            'foreignKey' => 'empresa_id'
        ),
        'Comuna' => array(
            'className' => 'Comuna',
            'foreignKey' => 'comuna_id'
        )
    );
    
    var $hasMany = array(
        'ReqAdicional' => array(
            'className' => 'ReqAdicional',
            'foreignKey' => 'oferta_id'
        )
    );
    
    var $validate = array(
        'titulo' => array(
            'rule' => array('between', 8, 128),
            'required' => true,
            'message' => 'El titulo debe contener entre 8 y 128 caracteres'
        ),
        'cargo' => array(
            'rule' => array('between', 8, 128),
            'required' => true,
            'message' => 'El cargo debe contener entre 8 y 128 caracteres'
        ),
        'descripcion' => array(
            'rule' => 'notEmpty',
            'required' => true,
            'message' => 'Debe escribir una descripcion de la oferta laboral'
        ),
        'sueldo' => array(
            'rule' => 'numeric',
            'required' => false,
            'allowEmpty' => true,
            'message' => 'El sueldo debe ser expresado solo en numeros'
        )
    );
}
?>