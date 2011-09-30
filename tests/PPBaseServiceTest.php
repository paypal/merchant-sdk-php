<?php
require_once 'PHPUnit/Framework.php';

require_once 'PPBaseService.php';

/**
 * Test class for PPBaseService.
 * 
 */
class PPBaseServiceTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var PPBaseService
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new PPBaseService('serviceName');
        $this->object->setAccessToken('sampletoken');
        $this->object->setTokenSecret('sampleSrcret');
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
    public function testGetServiceName()
    {
        $this->assertEquals('serviceName',$this->object->getServiceName() );
        $this->assertEquals('sampletoken',$this->object->getAccessToken() );
        $this->assertEquals('sampleSrcret',$this->object->getTokenSecret() );
    }
    
   
}
?>
