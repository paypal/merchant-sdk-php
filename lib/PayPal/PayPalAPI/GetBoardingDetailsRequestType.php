<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;

/**
 * A unique token returned by the EnterBoarding API call that
 * identifies this boarding session. RequiredCharacter length
 * and limitations: 64 alphanumeric characters. The token has
 * the following format:OB-61characterstring
 */
class GetBoardingDetailsRequestType extends AbstractRequestType
{

    /**
     * A unique token returned by the EnterBoarding API call that
     * identifies this boarding session. RequiredCharacter length
     * and limitations: 64 alphanumeric characters. The token has
     * the following format:OB-61characterstring
     * @access    public
     * @namespace ns
     * @var string
     */
    public $Token;

    /**
     * Constructor with arguments
     */
    public function __construct($Token = null)
    {
        $this->Token = $Token;
    }

}
