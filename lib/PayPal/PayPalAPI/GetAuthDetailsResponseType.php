<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractResponseType;
use PayPal\EBLBaseComponents\GetAuthDetailsResponseDetailsType;

class GetAuthDetailsResponseType
  extends AbstractResponseType
{
    /**
     * @access    public
     * @namespace ebl
     * @var GetAuthDetailsResponseDetailsType
     */
    public $GetAuthDetailsResponseDetails;
}
