<?php 
/**
 * A new authorization identification number. Character length
 * and limits: 19 single-byte characters 
 */
class DoReauthorizationResponseType  extends AbstractResponseType  
  {

	/**
	 * A new authorization identification number. Character length
	 * and limits: 19 single-byte characters 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $AuthorizationID;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var AuthorizationInfoType 	 
	 */ 
	public $AuthorizationInfo;

	/**
	 * Return msgsubid back to merchant
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $MsgSubID;


}
