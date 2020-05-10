<?php
App::uses('Categori', 'Model');

/**
 * Categori Test Case
 */
class CategoriTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.categori'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Categori = ClassRegistry::init('Categori');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Categori);

		parent::tearDown();
	}

}
