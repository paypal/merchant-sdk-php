<?php 
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
	 
	 	 	 	 
	 * @var RiskFilterListType 	 
	 */ 
	public $AcceptFilters;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var RiskFilterListType 	 
	 */ 
	public $PendingFilters;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var RiskFilterListType 	 
	 */ 
	public $DenyFilters;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var RiskFilterListType 	 
	 */ 
	public $ReportFilters;


}
