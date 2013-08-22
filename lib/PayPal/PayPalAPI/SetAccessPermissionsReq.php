<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\PPXmlMessage;
/**
 * 
 */
class SetAccessPermissionsReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\PayPalAPI\SetAccessPermissionsRequestType	 
	 */ 
	public $SetAccessPermissionsRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:SetAccessPermissionsReq>';
			if($this->SetAccessPermissionsRequest != NULL)
			{
		   		$str .= '<ns:SetAccessPermissionsRequest>';
				$str .= $this->SetAccessPermissionsRequest->toXMLString();
				$str .= '</ns:SetAccessPermissionsRequest>';
			}
			$str .= '</ns:SetAccessPermissionsReq>';
			return $str;
	}
    
}
