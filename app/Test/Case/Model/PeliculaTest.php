<?php
App::uses('Pelicula', 'Model');

/**
 * Pelicula Test Case
 */
class PeliculaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pelicula'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Pelicula = ClassRegistry::init('Pelicula');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Pelicula);

		parent::tearDown();
	}

}
