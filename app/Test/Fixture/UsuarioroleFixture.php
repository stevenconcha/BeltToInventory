<?php
/**
 * Usuariorole Fixture
 */
class UsuarioroleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'role_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true, 'key' => 'index'),
		'usuario_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'activo' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'opcional' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_roles_has_usuarios_roles' => array('column' => 'role_id', 'unique' => 0),
			'fk_roles_has_usuarios_usuarios1' => array('column' => 'usuario_id', 'unique' => 0),
			'role_id' => array('column' => 'role_id', 'unique' => 0),
			'usuario_id' => array('column' => 'usuario_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'role_id' => 1,
			'usuario_id' => 1,
			'activo' => 1,
			'opcional' => 'Lorem ipsum dolor sit amet'
		),
	);

}
