<?php 
/**
 * 
 */
class BillOutstandingAmountReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var BillOutstandingAmountRequestType 	 
	 */ 
	public $BillOutstandingAmountRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:BillOutstandingAmountReq>';
			if($this->BillOutstandingAmountRequest != NULL)
			{
		   		$str .= '<ns:BillOutstandingAmountRequest>';
				$str .= $this->BillOutstandingAmountRequest->toXMLString();
				$str .= '</ns:BillOutstandingAmountRequest>';
			}
			$str .= '</ns:BillOutstandingAmountReq>';
			return $str;
	}
  
 
}
