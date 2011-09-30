<?php
require_once 'PHPUnit/Framework.php';

require_once 'PPAPIService.php';

/**
 * Test class for PPAPIService.
 * 
 */
class PPAPIServiceTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var PPAPIService
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new PPAPIService;
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
    public function testSetServiceName()
    {
       $this->object->setServiceName('Invoice');
       $this->assertEquals('Invoice',$this->object->serviceName);
       $object = new PPAPIService('ServiceName');
        $this->assertEquals('ServiceName',$object->serviceName);
    }

    /**
     * @test
     */
    public function testMakeRequest()
    {
       
    }
}
?>
