<?php
require_once 'PHPUnit/Framework.php';
require_once 'PPSignatureCredential.php';


/**
 * Test class for PPSignatureCredential.
 * 
 */
class PPSignatureCredentialTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var PPSignatureCredential
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new PPSignatureCredential("platfo_1255077030_biz_api1.gmail.com", "1255077037","Abg0gYcQyxQvnf2HDJkKtA-p6pqhA1k-KTYE0Gcy1diujFio4io5Vqjf", "APP-80W284485P519543T");
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
    public function testValidateSignature()
    {
       $this->setExpectedException('PPMissingCredentialException');
	 $credSignature = new PPSignatureCredential("platfo_1255077030_biz_api1.gmail.com", "1255077037","", "APP-80W284485P519543T");
	  $credSignature->validate();
    }
/**
     * @test
     */
    public function testValidateUsername()
    {
       $this->setExpectedException('PPMissingCredentialException');
	 $credUsername = new PPSignatureCredential("", "1255077037","Abg0gYcQyxQvnf2HDJkKtA-p6pqhA1k-KTYE0Gcy1diujFio4io5Vqjf", "APP-80W284485P519543T");
	  $credUsername->validate();
    }
/**
     * @test
     */
    public function testValidatepwd()
    {
       $this->setExpectedException('PPMissingCredentialException');
	 $credpwd = new PPSignatureCredential("platfo_1255077030_biz_api1.gmail.com", "","Abg0gYcQyxQvnf2HDJkKtA-p6pqhA1k-KTYE0Gcy1diujFio4io5Vqjf", "APP-80W284485P519543T");
	  $credpwd->validate();
    }
/**
     * @test
     */
    public function testValidateAppId()
    {
       $this->setExpectedException('PPMissingCredentialException');
	 $credAppId = new PPSignatureCredential("platfo_1255077030_biz_api1.gmail.com", "1255077037","Abg0gYcQyxQvnf2HDJkKtA-p6pqhA1k-KTYE0Gcy1diujFio4io5Vqjf", "");
	  $credAppId->validate();
    }
    /**
     * @test
     */
    public function testGetSignature()
    {
         $this->assertEquals('Abg0gYcQyxQvnf2HDJkKtA-p6pqhA1k-KTYE0Gcy1diujFio4io5Vqjf', $this->object->getSignature());
    }
    /**
     * @test
     */
    public function testGetUserName()
    {
    	$this->assertEquals('platfo_1255077030_biz_api1.gmail.com', $this->object->getUserName());
    }
    /**
     * @test
     */
    public function testGetPassword()
    {
    	$this->assertEquals('1255077037', $this->object->getPassword());
    }
    /**
     * @test
     */
    public function testGetAppId()
    {
    	$this->assertEquals('APP-80W284485P519543T', $this->object->getApplicationId());
    }
    
    
}
?>
