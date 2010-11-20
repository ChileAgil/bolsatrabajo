<?php
class ReqAdicional extends AppModel{
    var $name = 'ReqAdicional';
    var $useTable = 'req_adicionales';
    var $primaryKey = 'req_adicional_id';
    
    var $belongsTo = array(
        'TipoRequerimiento' => array(
            'className' => 'TipoRequerimiento',
            'foreignKey' => 'tipo_id'
        ),
        'Oferta' => array(
            'className' => 'Oferta',
            'foreignKey' => 'oferta_id'
        )
    );
}
?>
