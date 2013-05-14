<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\;
/**
 * Thes are filters that could result in accept/deny/pending
 * action. 
 */
class FMFDetailsType  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\RiskFilterListType	 
	 */ 
	public $AcceptFilters;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\RiskFilterListType	 
	 */ 
	public $PendingFilters;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\RiskFilterListType	 
	 */ 
	public $DenyFilters;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\RiskFilterListType	 
	 */ 
	public $ReportFilters;


}
