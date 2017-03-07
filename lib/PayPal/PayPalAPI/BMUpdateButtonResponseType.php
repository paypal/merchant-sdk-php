<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractResponseType;

/**
 *
 */
class BMUpdateButtonResponseType extends AbstractResponseType
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var string
     */
    public $Website;

    /**
     *
     * @access    public
     * @namespace ns
     * @var string
     */
    public $Email;

    /**
     *
     * @access    public
     * @namespace ns
     * @var string
     */
    public $Mobile;

    /**
     *
     * @access    public
     * @namespace ns
     * @var string
     */
    public $HostedButtonID;

}
