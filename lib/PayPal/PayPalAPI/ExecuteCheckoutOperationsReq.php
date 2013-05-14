<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\;
/**
 * 
 */
class ExecuteCheckoutOperationsReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\\ExecuteCheckoutOperationsRequestType	 
	 */ 
	public $ExecuteCheckoutOperationsRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:ExecuteCheckoutOperationsReq>';
			if($this->ExecuteCheckoutOperationsRequest != NULL)
			{
		   		$str .= '<ns:ExecuteCheckoutOperationsRequest>';
				$str .= $this->ExecuteCheckoutOperationsRequest->toXMLString();
				$str .= '</ns:ExecuteCheckoutOperationsRequest>';
			}
			$str .= '</ns:ExecuteCheckoutOperationsReq>';
			return $str;
	}
   
}
