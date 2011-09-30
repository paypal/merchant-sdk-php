<?php
require_once 'PHPUnit/Framework.php';

require_once 'exceptions/PPConfigurationException.php';

/**
 * Test class for PPConfigurationException.
 * 
 */
class PPConfigurationExceptionTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var PPConfigurationException
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new PPConfigurationException('Test PPConfigurationException');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }
    public function testPPConfigurationException()
    {
    	$this->setExpectedException('PPConfigurationException');
    	throw new PPConfigurationException('Test PPConfigurationException');
    	
    }
}
?>
