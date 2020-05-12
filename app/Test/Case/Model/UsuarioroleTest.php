<?php
App::uses('Usuariorole', 'Model');

/**
 * Usuariorole Test Case
 */
class UsuarioroleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.usuariorole',
		'app.role',
		'app.usuario'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Usuariorole = ClassRegistry::init('Usuariorole');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Usuariorole);

		parent::tearDown();
	}

}
