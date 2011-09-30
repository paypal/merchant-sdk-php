<?php
require_once 'PHPUnit/Framework.php';

require_once 'exceptions/PPConnectionException.php';

/**
 * Test class for PPConnectionException.
 * 
 */
class PPConnectionExceptionTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var PPConnectionException
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new PPConnectionException('http://testURL', 'test message');
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
    public function testGetUrl()
    {
    	$this->assertEquals('http://testURL',$this->object->getUrl());
    }
    /**
     * @test
     */
 public function testPPConnectionException()
    {
    	$this->setExpectedException('PPConnectionException');
    	throw new PPConnectionException('http://testURL','Test msg PPConnectionException');
    	
    }
}
?>
