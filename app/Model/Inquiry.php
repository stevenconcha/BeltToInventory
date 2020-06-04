<?php

App::uses('AppModel', 'Model');

/**
 * Inquiry Model
 *
 * @property User $User
 */
class Inquiry extends AppModel {

    // The Associations below have been created with all possible keys, those that are not needed can be removed
    var $validate = array(
        'p1' => array(
            'p1_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'La pregunta 1 es requerida'
            )
        ),
        'p2' => array(
            'p2_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'La pregunta 2 es requerida'
            )
        ),
        'p3' => array(
            'p3_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'La pregunta 3 es requerida'
            )
        ),
        'p4' => array(
            'p4_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'La pregunta 4 es requerida'
            )
        ),
        'p5' => array(
            'p5_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'La pregunta 5 es requerida'
            )
        ),
        'p6' => array(
            'p6_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'La pregunta 6 es requerida'
            )
        ),
        'p7' => array(
            'p7_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'La pregunta 7 es requerida'
            )
        ),
        'p8' => array(
            'p8_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'La pregunta 8 es requerida'
            )
        ),'p9' => array(
            'p9_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'La pregunta 9 es requerida'
            )
        )
    );

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'id_usuario',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

}
