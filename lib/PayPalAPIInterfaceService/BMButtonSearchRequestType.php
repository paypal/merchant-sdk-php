<?php 
/**
 * The earliest transaction date at which to start the search.
 * No wildcards are allowed. Required 
 */
class BMButtonSearchRequestType  extends AbstractRequestType  
  {

	/**
	 * The earliest transaction date at which to start the search.
	 * No wildcards are allowed. Required 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var dateTime 	 
	 */ 
	public $StartDate;

	/**
	 * The latest transaction date to be included in the search
	 * Optional 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var dateTime 	 
	 */ 
	public $EndDate;


  
 
}
