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
	public function testGetSpecificCredentialObject()
	{
		$cred = $this->object->getCredentialObject('jb-us-seller_api1.paypal.com');
		$this->assertNotNull($cred);
		$this->assertEquals('jb-us-seller_api1.paypal.com', $cred->getUsername());
		
		$cred = $this->object->getCredentialObject('platfo_1255170694_biz_api1.gmail.com');
		$this->assertNotNull($cred);
		$this->assertEquals('platfo_1255170694_biz_api1.gmail.com', $cred->getUsername());
		$this->assertStringEndsWith('cert_key.pem', $cred->getCertificatePath());		
	}
	
	/**
	 * @test
	 */
	public function testGetInvalidCredentialObject()
	{
		$this->setExpectedException('PPInvalidCredentialException');
		$cred = $this->object->getCredentialObject('invalid_biz_api1.gmail.com');
	}
		
	/**
	 * @test
	 */
	public function testGetDefaultCredentialObject()
	{
		$cred = $this->object->getCredentialObject();
		$this->assertEquals('jb-us-seller_api1.paypal.com', $cred->getUsername());
	}	
	
	/**
	 * @test
	 */
	public function testGetPlatformCredentialObject()
	{
		$cred = $this->object->getCredentialObject();
		$this->assertEquals('APP-80W284485P519543T', $cred->getApplicationId());
	}	
}
?>
