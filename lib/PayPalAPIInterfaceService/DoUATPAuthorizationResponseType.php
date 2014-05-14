<?php 
/**
 * Auth Authorization Code. 
 */
class DoUATPAuthorizationResponseType  extends DoAuthorizationResponseType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var UATPDetailsType 	 
	 */ 
	public $UATPDetails;

	/**
	 * Auth Authorization Code. 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $AuthorizationCode;

	/**
	 * Invoice ID. A pass through. 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $InvoiceID;

	/**
	 * Unique id for each API request to prevent duplicate
	 * payments. Optional Character length and limits: 38
	 * single-byte characters maximum. 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $MsgSubID;


}
