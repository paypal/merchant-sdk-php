<?php
require_once 'PHPUnit/Framework.php';

require_once 'exceptions/PPMissingCredentialException.php';

/**
 * Test class for PPMissingCredentialException.
 * 
 */
class PPMissingCredentialExceptionTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var PPMissingCredentialException
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new PPMissingCredentialException;
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
    public function testErrorMessage()
    {
       $msg = $this->object->errorMessage();
      $this->assertContains('Error on line 23', $msg);
    }
}
?>
