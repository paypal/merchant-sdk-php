<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;

/**
 * Type of Button to create.  Required Must be one of the
 * following: BUYNOW, CART, GIFTCERTIFICATE. SUBSCRIBE,
 * PAYMENTPLAN, AUTOBILLING, DONATE, VIEWCART or UNSUBSCRIBE
 */
class BMCreateButtonRequestType extends AbstractRequestType
{

    /**
     * Type of Button to create.  Required Must be one of the
     * following: BUYNOW, CART, GIFTCERTIFICATE. SUBSCRIBE,
     * PAYMENTPLAN, AUTOBILLING, DONATE, VIEWCART or UNSUBSCRIBE
     * @access    public
     * @namespace ns
     * @var string
     */
    public $ButtonType;

    /**
     * button code.  optional Must be one of the following: hosted,
     * encrypted or cleartext
     * @access    public
     * @namespace ns
     * @var string
     */
    public $ButtonCode;

    /**
     * Button sub type.  optional for button types buynow and cart
     * only Must Be either PRODUCTS or SERVICES
     * @access    public
     * @namespace ns
     * @var string
     */
    public $ButtonSubType;

    /**
     * Button Variable information  At least one required recurring
     * Character length and limitations: 63 single-byte
     * alphanumeric characters
     * @array
     * @access    public
     * @namespace ns
     * @var string
     */
    public $ButtonVar;

    /**
     *
     * @array
     * @access    public
     * @namespace ns
     * @var \PayPal\PayPalAPI\OptionDetailsType
     */
    public $OptionDetails;

    /**
     * Details of each option for the button.  Optional
     * @array
     * @access    public
     * @namespace ns
     * @var string
     */
    public $TextBox;

    /**
     * Button image to use.  Optional Must be one of: REG, SML, or
     * CC
     * @access    public
     * @namespace ns
     * @var string
     */
    public $ButtonImage;

    /**
     * Button URL for custom button image.  Optional Character
     * length and limitations: 127 single-byte alphanumeric
     * characters
     * @access    public
     * @namespace ns
     * @var string
     */
    public $ButtonImageURL;

    /**
     * Text to use on Buy Now Button.  Optional Must be either
     * BUYNOW or PAYNOW
     * @access    public
     * @namespace ns
     * @var string
     */
    public $BuyNowText;

    /**
     * Text to use on Subscribe button.  Optional Must be either
     * BUYNOW or SUBSCRIBE
     * @access    public
     * @namespace ns
     * @var string
     */
    public $SubscribeText;

    /**
     * Button Country.  Optional Must be valid ISO country code
     * @access    public
     * @namespace ns
     * @var string
     */
    public $ButtonCountry;

    /**
     * Button language code.  Optional Character length and
     * limitations: 3 single-byte alphanumeric characters
     * @access    public
     * @namespace ns
     * @var string
     */
    public $ButtonLanguage;

}
