<?php

require_once 'PPCredentialManager.php';

/**
 * Test class for PPCredentialManager.
 *
 */
class PPCredentialManagerTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var PPCredentialManager
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = PPCredentialManager::getInstance();
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
		$this->assertTrue($instance instanceof PPCredentialManager);

	}

	/**
	 * @test
	 */
	public function testGetCredentialObject()
	{
		$IPPCredential = $this->object->getCredentialObject('platfo_1255077030_biz_api1.gmail.com');
		$this->assertNotNull($IPPCredential);
		$IPPCredential = $this->object->getCredentialObject('suarumugam-biz_api1.paypal.com');
		$this->assertNotNull($IPPCredential);
		$this->assertEquals('suarumugam-biz_api1.paypal.com', $IPPCredential->getUsername());
		$this->assertEquals('config/cert_key.pem', $IPPCredential->getCertificatePath());
		$IPPCredential = $this->object->getCredentialObject('suarumugam-biz_api1.paypal.com');
		$this->assertNotNull($IPPCredential->getUserName());
		$IPPCredential = $this->object->getCredentialObject();
		$this->assertEquals('platfo_1255077030_biz_api1.gmail.com', $IPPCredential->getUsername());
		$this->setExpectedException('PPInvalidCredentialException');
		$IPPCredential = $this->object->getCredentialObject('invalid_biz_api1.gmail.com');


	}

	 
}
?>
