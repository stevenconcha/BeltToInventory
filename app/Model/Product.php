<?php
App::uses('AppModel', 'Model');
/**
 * Product Model
 *
 * @property Store $Store
 */
class Product extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

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
