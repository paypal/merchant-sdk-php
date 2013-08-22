<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\PPXmlMessage;
/**
 * 
 */
class ManageRecurringPaymentsProfileStatusReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\PayPalAPI\ManageRecurringPaymentsProfileStatusRequestType	 
	 */ 
	public $ManageRecurringPaymentsProfileStatusRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:ManageRecurringPaymentsProfileStatusReq>';
			if($this->ManageRecurringPaymentsProfileStatusRequest != NULL)
			{
		   		$str .= '<ns:ManageRecurringPaymentsProfileStatusRequest>';
				$str .= $this->ManageRecurringPaymentsProfileStatusRequest->toXMLString();
				$str .= '</ns:ManageRecurringPaymentsProfileStatusRequest>';
			}
			$str .= '</ns:ManageRecurringPaymentsProfileStatusReq>';
			return $str;
	}
    
}
