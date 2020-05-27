<?php
App::uses('AppModel', 'Model');
/**
 * Pqr Model
 *
 */
class Pqr extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
    
    var $validate = array(
        'tipo' => array(
            'tipo_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'El tipo de PQR es requerido'
            )
        ),
        'telefono' => array(
            'telefono_prod_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'El telefono es requerido'
            )
        ),
        'descripcion' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'La descripcion es requerida.'
            )
        ),
        'estado' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'El estado es requerido.'
            )
        )
    );
    
	
}
