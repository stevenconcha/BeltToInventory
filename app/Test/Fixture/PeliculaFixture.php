<?php
/**
 * Pelicula Fixture
 */
class PeliculaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'titulo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'resumen' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'codigo_categoria' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'minutos_duracion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'identificacion_actor' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'anno_estreno' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'foto' => array('type' => 'binary', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'codigo_categoria' => array('column' => 'codigo_categoria', 'unique' => 0),
			'identificacion_actor' => array('column' => 'identificacion_actor', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'titulo' => 'Lorem ipsum dolor sit amet',
			'resumen' => 'Lorem ipsum dolor sit amet',
			'codigo_categoria' => 1,
			'minutos_duracion' => 'Lorem ipsum dolor sit amet',
			'identificacion_actor' => 1,
			'anno_estreno' => 1,
			'foto' => 'Lorem ipsum dolor sit amet'
		),
	);

}
