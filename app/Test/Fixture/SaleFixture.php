<?php
/**
 * Sale Fixture
 */
class SaleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'id_usuario' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'unsigned' => false),
		'id_product' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'cantidad' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'valor_unitario' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'iva' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'total' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fecha_venta' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'id' => 1,
			'id_usuario' => 1,
			'id_product' => 1,
			'cantidad' => 1,
			'valor_unitario' => 1,
			'iva' => 1,
			'total' => 1,
			'fecha_venta' => '2020-06-02 00:41:04'
		),
	);

}
