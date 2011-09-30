<?php
require_once 'PHPUnit/Framework.php';

require_once 'PPConnectionManager.php';

/**
 * Test class for PPConnectionManager.
 * 
 */
class PPConnectionManagerTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var PPConnectionManager
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object =  PPConnectionManager::getInstance();
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
		$this->assertTrue($instance instanceof PPConnectionManager);
    }

    /**
     * @test
     */
    public function testGetConnection()
    {
        $conn = $this->object->getConnection();
        $this->assertNotNull($conn);
        $this->assertTrue($conn instanceof PPHttpConnection);
        $this->assertEquals(get_class($conn), "PPHttpConnection");
    }
}
?>
