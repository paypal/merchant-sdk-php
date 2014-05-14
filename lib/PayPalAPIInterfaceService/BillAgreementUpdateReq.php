<?php 
/**
 * 
 */
class BillAgreementUpdateReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var BAUpdateRequestType 	 
	 */ 
	public $BAUpdateRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:BillAgreementUpdateReq>';
			if($this->BAUpdateRequest != NULL)
			{
		   		$str .= '<ns:BAUpdateRequest>';
				$str .= $this->BAUpdateRequest->toXMLString();
				$str .= '</ns:BAUpdateRequest>';
			}
			$str .= '</ns:BillAgreementUpdateReq>';
			return $str;
	}
  
 
}
