<?php
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;
/**
 * Details of Risk Filter.
 */
class RiskFilterListType
   extends PPXmlMessage{

	/**
	 *
	 * @access public
	 * @namespace ebl
	 * @var \PayPal\EBLBaseComponents\RiskFilterDetailsType[]
	 */
	public $Filters;


}
