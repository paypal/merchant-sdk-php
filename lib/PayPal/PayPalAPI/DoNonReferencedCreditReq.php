<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\;
/**
 * 
 */
class DoNonReferencedCreditReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\\DoNonReferencedCreditRequestType	 
	 */ 
	public $DoNonReferencedCreditRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:DoNonReferencedCreditReq>';
			if($this->DoNonReferencedCreditRequest != NULL)
			{
		   		$str .= '<ns:DoNonReferencedCreditRequest>';
				$str .= $this->DoNonReferencedCreditRequest->toXMLString();
				$str .= '</ns:DoNonReferencedCreditRequest>';
			}
			$str .= '</ns:DoNonReferencedCreditReq>';
			return $str;
	}
   
}
