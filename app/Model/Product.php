<?php

App::uses('AppModel', 'Model');

/**
 * Product Model
 *
 * @property Store $Store
 */
class Product extends AppModel {

    var $validate = array(
        'codigo' => array(
            'codigo_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'El código es requerido'
            ),
            'firstname_must_be_max' => array(
                'rule' => array('maxLength', 12),
                'message' => 'El campo código solo permite 12 caracteres.'
            )
        ),
        'nombre_prod' => array(
            'nombre_prod_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'El nombre del producto es requerido'
            ),
            'lastname_must_be_max' => array(
                'rule' => array('maxLength', 50),
                'message' => 'El nombre del producto solo permite 50 caracteres.'
            )
        ),
        'modelo' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'El modelo es requerido.'
            )
        ),
        'talla' => array(
            'talla_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'La talla es requerida'
            )
        ),
        'stock' => array(
            'gender_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'La cantidad es requerida'
            )
        ),
        'v_unitario' => array(
            'address_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'El precio es requerido'
            )
        ),
        'id_almacen' => array(
            'country_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'El almacen es requerido'
            )
        )
    );
    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Store' => array(
            'className' => 'Store',
            'foreignKey' => 'id_almacen',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

}
