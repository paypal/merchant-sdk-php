<?php

require_once 'ipn/PPIPNMessage.php';

/**
 * Test class for PPIPNMessage.
 *
 */
class PPIPNMessageTest extends PHPUnit_Framework_TestCase {
	/**
	 * @test
	 */
	
	public function passGoodIPN() {
		
	}
	
	
	/**
	 * @test
	 */
	
	public function failOnBadIPN() {
		$ipn = new PPIPNMessage();
		$this->assertEquals(false, $ipn->validate());
	}
	
	
	/**
	 * @test
	 */
	
	public function processIPNWithArrayElements() {
		$ipnData = 'transaction[0].id=6WM123443434&transaction[0].status=Completed&transaction[1].id=2F12129812A1&transaction[1].status=Pending';
		$ipn = new PPIPNMessage($ipnData);
		
		$rawData = $ipn->getRawData();
		$this->assertEquals(4, count($rawData));
		$this->assertEquals('6WM123443434', $rawData['transaction[0].id']);
	}
	
	/**
	 * @test
	 */	
	public function processIPNWithSpecialCharacters() {
		$ipnData = "description=Jake's store";
		
		ini_set('get_magic_quotes_gpc', true);
		$ipn = new PPIPNMessage($ipnData);
		$rawData = $ipn->getRawData();		
		$this->assertEquals('description', "Jake's store");
		
		ini_set('get_magic_quotes_gpc', false);
		$ipn = new PPIPNMessage($ipnData);
		$rawData = $ipn->getRawData();
		$this->assertEquals('description', "Jake's store");
		$this->assertEquals('description', "Jake's store");
	}
	
}