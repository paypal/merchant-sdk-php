<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\PPXmlMessage;
/**
 * 
 */
class ManagePendingTransactionStatusReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\PayPalAPI\ManagePendingTransactionStatusRequestType	 
	 */ 
	public $ManagePendingTransactionStatusRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:ManagePendingTransactionStatusReq>';
			if($this->ManagePendingTransactionStatusRequest != NULL)
			{
		   		$str .= '<ns:ManagePendingTransactionStatusRequest>';
				$str .= $this->ManagePendingTransactionStatusRequest->toXMLString();
				$str .= '</ns:ManagePendingTransactionStatusRequest>';
			}
			$str .= '</ns:ManagePendingTransactionStatusReq>';
			return $str;
	}
    
}
