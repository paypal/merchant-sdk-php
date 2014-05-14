<?php 
/**
 * 
 */
class RefundTransactionReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var RefundTransactionRequestType 	 
	 */ 
	public $RefundTransactionRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:RefundTransactionReq>';
			if($this->RefundTransactionRequest != NULL)
			{
		   		$str .= '<ns:RefundTransactionRequest>';
				$str .= $this->RefundTransactionRequest->toXMLString();
				$str .= '</ns:RefundTransactionRequest>';
			}
			$str .= '</ns:RefundTransactionReq>';
			return $str;
	}
  
 
}
