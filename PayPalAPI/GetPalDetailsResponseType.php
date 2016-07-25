<?php

namespace PayPal\Merchant\PayPalAPI;

use PayPal\Merchant\EBLBaseComponents\AbstractResponseType;

/**
 *
 */
class GetPalDetailsResponseType
  extends AbstractResponseType
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var string
     */
    public $Pal;

    /**
     *
     * @access    public
     * @namespace ns
     * @var string
     */
    public $Locale;

}
