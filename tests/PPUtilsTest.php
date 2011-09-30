<?php
require_once 'PHPUnit/Framework.php';

require_once 'PPUtils.php';

/**
 * Test class for PPUtils.
 * 
 */
class PPUtilsTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var PPUtils
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new PPUtils;
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
    public function testNvpToMap()
    {
       $arr = $this->object->nvpToMap('requestEnvelope.detailLevel=ReturnAll&requestEnvelope.errorLanguage=en_US&invoice.merchantEmail=jb-us-seller1@paypal.com&invoice.payerEmail=jbui-us-personal1@paypal.com&invoice.items[0].name=product1&invoice.items[0].quantity=10.0&invoice.items[0].unitPrice=1.2&invoice.currencyCode=USD&invoice.paymentTerms=DueOnReceipt');
       $this->assertArrayHasKey('requestEnvelope.detailLevel', $arr);
       $this->assertArrayHasKey('requestEnvelope.errorLanguage', $arr);
       $this->assertEquals(is_array($arr),true);
    }

    /**
     * @test
     */
    public function testArray_match_key()
    {
       $arr = array('key1' => 'somevalue', 'key2' => 'someothervalue');
		$this->assertEquals(PPUtils::array_match_key($arr, "key"), true);
		$arr = unserialize('a:10:{s:26:"responseEnvelope.timestamp";s:35:"2011-04-19T04%3A32%3A29.469-07%3A00";s:20:"responseEnvelope.ack";s:7:"Failure";s:30:"responseEnvelope.correlationId";s:13:"c2514f258ddf1";s:22:"responseEnvelope.build";s:7:"1829457";s:16:"error(0).errorId";s:6:"580027";s:15:"error(0).domain";s:8:"PLATFORM";s:17:"error(0).severity";s:5:"Error";s:17:"error(0).category";s:11:"Application";s:16:"error(0).message";s:44:"Prohibited+request+parameter%3A+businessInfo";s:21:"error(0).parameter(0)";s:12:"businessInfo";}');
		$this->assertEquals(PPUtils::array_match_key($arr, "error(0)."), true);
    }

    /**
     * @test
     */
    public function testGetLocalIPAddress()
    {
        $ip = $this->object->getLocalIPAddress();
        //$this->assertEquals('127.0.0.1',$ip);
    }

    /**
     * @test
     */
    public function testGetRequestSource()
    {
       $version =  $this->object->getRequestSource();
       $this->assertEquals('PHP_Invoice_SDK_0.6',$version);
    }
}
?>
