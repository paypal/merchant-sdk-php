<?php

namespace PayPal\Merchant\API;

use PayPal\Merchant\EBLBaseComponents\AbstractResponseType;

/**
 *
 */
class BMButtonSearchResponseType
  extends AbstractResponseType
{

    /**
     *
     * @array
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\ButtonSearchResultType
     */
    public $ButtonSearchResult;

}
