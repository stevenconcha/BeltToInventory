<?php

App::uses('AppModel', 'Model');

/**
 * Store Model
 *
 * @property Product $Product
 */
class Store extends AppModel {

    var $validate = array(
        'nombre' => array(
            'nombre_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'La descripción es requerida'
            )
        ),
        'direccion' => array(
            'direccion_prod_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'La dirección es requerida'
            )
        ),
        'telefono' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'El teléfono es requerido.'
            )
        )
    );


    // The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'Product' => array(
            'className' => 'Product',
            'foreignKey' => 'id_almacen',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );

}
