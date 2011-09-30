<?php
require_once 'PHPUnit/Framework.php';
require_once 'PPConfigManager.php';
require_once 'PPObjectTransformer.php';
require_once 'exceptions/PPTransformerException.php';

/**
 * Test class for PPObjectTransformer.
 * 
 */
class PPObjectTransformerTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var PPObjectTransformer
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new PPObjectTransformer;
    
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
    public function testToString()
    {
       $testObj = new RequesEnvelope('en_US');
       $testObj->detailLevel = "ReturnAll";
       $ret = $this->object->toString($testObj);
       $this->assertEquals("detailLevel=ReturnAll&errorLanguage=en_US",$ret );
       $this->setExpectedException('PPTransformerException');
       $failtest = new PPObjectTransformer;
       $failtest->toString('');
    }
}
class RequesEnvelope {
	/**
	 * @access public
	 * @var DetailLevelCode
	 */
	public $detailLevel;
	/**
	 * @access public
	 * @var string
	 */
	public $errorLanguage;

	public function __construct($errorLanguage = null) {
		$this->errorLanguage  = $errorLanguage;
	}

	public function toNVPString($prefix='') { 
		$str = '';
		$delim = '';
		if( $this->detailLevel != null ) {
			$str .= $delim .  $prefix . 'detailLevel=' . urlencode($this->detailLevel);
			$delim = '&';
		}
		if( $this->errorLanguage != null ) {
			$str .= $delim .  $prefix . 'errorLanguage=' . urlencode($this->errorLanguage);
			$delim = '&';
		}

		return $str;
	}

}

?>
