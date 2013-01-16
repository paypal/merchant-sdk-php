<?php
require_once 'PPConfigManager.php';

/**
 * Test class for PPConfigManager.
 *
 */
class PPConfigManagerTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var PPConfigManager
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = PPConfigManager::getInstance();
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{
		PPConfigManager::_unsetInstance();
	}

	/**
	 * @test
	 */
	public function testGetInstance()
	{
		$instance = PPConfigManager::getInstance();
		$this->assertTrue($instance instanceof PPConfigManager, 'Incorrect object type has been returned');
		$this->assertTrue($instance === PPConfigManager::getInstance(), 'A different instance of the singleton has been returned');
	}

	/**
	 * @test
	 */
	public function testGet()
	{
		$ret = $this->object->get('acct1');
		$this->assertContains('jb-us-seller_api1.paypal.com', $ret);
		$this->assertArrayHasKey('acct1.UserName', $ret);
		$this->assertTrue(sizeof($ret) == 5);
		
		$ret = $this->object->get('acct1.UserName');
		$this->assertEquals('jb-us-seller_api1.paypal.com', $ret);
		$ret = $this->object->get("acct");
		$this->assertEquals(sizeof($ret), 8);

	}

	/**
	 * @test
	 */
	public function testGetIniPrefix()
	{
		$ret = $this->object->getIniPrefix();
		$this->assertContains('acct1', $ret);
		$this->assertEquals(sizeof($ret), 2);
		
		$ret = $this->object->getIniPrefix('jb-us-seller_api1.paypal.com');
		$this->assertEquals('acct1', $ret);
	}

	public function testSetConfig()
	{
		PPConfigManager::_unsetInstance();
		PPConfigManager::setConfiguration(
			array(
				'foo' => 'bar',
				'bar' => 'baz',
			)
		);
		$object = PPConfigManager::getInstance();

		$this->assertEquals('baz', $object->get('bar'));
	}

	public function testSetConfigFails()
	{
		// Singleton has been created
		$object = PPConfigManager::getInstance();

		$this->setExpectedException('PPConfigurationException');

		// This should fail due to configuration already beeing loaded
		PPConfigManager::setConfiguration(
			array(
				'foo' => 'bar',
				'bar' => 'baz',
			)
		);
	}
}
