<?php
/**
 * Producto Fixture
 */
class ProductoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_producto' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nombre_prod' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'talla' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'stock' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'v_unitario' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'iva' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'id_almacen' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'create_by' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'create_at' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'update_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'update_at' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_producto', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id_producto' => 1,
			'codigo' => 'Lorem ipsum dolor ',
			'nombre_prod' => 'Lorem ipsum dolor sit amet',
			'talla' => 1,
			'stock' => 1,
			'v_unitario' => 1,
			'iva' => 1,
			'id_almacen' => 1,
			'create_by' => 1,
			'create_at' => '2020-05-12 21:03:23',
			'update_by' => 1,
			'update_at' => '2020-05-12 21:03:23'
		),
	);

}
