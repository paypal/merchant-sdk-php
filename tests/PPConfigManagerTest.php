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
	}

	
	
	/**
	 * @test
	 */
	public function testGetInstance()
	{
		$instance = $this->object->getInstance();
		$this->assertTrue($instance instanceof PPConfigManager);
		
	}

	/**
	 * @test
	 */
	public function testGet()
	{
		$ret = $this->object->get('acct1');
		$this->assertContains('platfo_1255077030_biz_api1.gmail.com', $ret);
		$this->assertArrayHasKey('acct1.UserName', $ret);
		$this->assertTrue(sizeof($ret) == 4);
		$ret = $this->object->get('acct1.UserName');
		$this->assertEquals('platfo_1255077030_biz_api1.gmail.com', $ret);
		$ret = $this->object->get("acct");
		$this->assertEquals(sizeof($ret), 9);
		
	}

	/**
	 * @test
	 */
	public function testGetIniPrefix()
	{
		$ret = $this->object->getIniPrefix();
		$this->assertContains('acct1', $ret);
		$this->assertEquals(sizeof($ret), 2);
		$ret = $this->object->getIniPrefix('platfo_1255077030_biz_api1.gmail.com');
		$this->assertEquals('acct1', $ret);
		
		
	}
	

}
?>
