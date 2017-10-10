<?php
namespace PayPal\Service;

use PayPal\Common\PPApiContext;
use PayPal\Core\PPBaseService;
use PayPal\Core\PPUtils;
use PayPal\Handler\PPMerchantServiceHandler;
use PayPal\PayPalAPI\AddressVerifyReq;
use PayPal\PayPalAPI\AddressVerifyResponseType;
use PayPal\PayPalAPI\BAUpdateResponseType;
use PayPal\PayPalAPI\BillAgreementUpdateReq;
use PayPal\PayPalAPI\BillOutstandingAmountReq;
use PayPal\PayPalAPI\BillOutstandingAmountResponseType;
use PayPal\PayPalAPI\BillUserReq;
use PayPal\PayPalAPI\BillUserResponseType;
use PayPal\PayPalAPI\CancelRecoupReq;
use PayPal\PayPalAPI\CancelRecoupResponseType;
use PayPal\PayPalAPI\CompleteRecoupReq;
use PayPal\PayPalAPI\CompleteRecoupResponseType;
use PayPal\PayPalAPI\CreateBillingAgreementReq;
use PayPal\PayPalAPI\CreateBillingAgreementResponseType;
use PayPal\PayPalAPI\CreateMobilePaymentReq;
use PayPal\PayPalAPI\CreateMobilePaymentResponseType;
use PayPal\PayPalAPI\CreateRecurringPaymentsProfileReq;
use PayPal\PayPalAPI\CreateRecurringPaymentsProfileResponseType;
use PayPal\PayPalAPI\DoAuthorizationReq;
use PayPal\PayPalAPI\DoAuthorizationResponseType;
use PayPal\PayPalAPI\DoCancelReq;
use PayPal\PayPalAPI\DoCancelResponseType;
use PayPal\PayPalAPI\DoCaptureReq;
use PayPal\PayPalAPI\DoCaptureResponseType;
use PayPal\PayPalAPI\DoDirectPaymentReq;
use PayPal\PayPalAPI\DoDirectPaymentResponseType;
use PayPal\PayPalAPI\DoExpressCheckoutPaymentReq;
use PayPal\PayPalAPI\DoExpressCheckoutPaymentResponseType;
use PayPal\PayPalAPI\DoMobileCheckoutPaymentReq;
use PayPal\PayPalAPI\DoMobileCheckoutPaymentResponseType;
use PayPal\PayPalAPI\DoNonReferencedCreditReq;
use PayPal\PayPalAPI\DoNonReferencedCreditResponseType;
use PayPal\PayPalAPI\DoReauthorizationReq;
use PayPal\PayPalAPI\DoReauthorizationResponseType;
use PayPal\PayPalAPI\DoReferenceTransactionReq;
use PayPal\PayPalAPI\DoReferenceTransactionResponseType;
use PayPal\PayPalAPI\DoUATPAuthorizationReq;
use PayPal\PayPalAPI\DoUATPAuthorizationResponseType;
use PayPal\PayPalAPI\DoUATPExpressCheckoutPaymentReq;
use PayPal\PayPalAPI\DoUATPExpressCheckoutPaymentResponseType;
use PayPal\PayPalAPI\DoVoidReq;
use PayPal\PayPalAPI\DoVoidResponseType;
use PayPal\PayPalAPI\EnterBoardingReq;
use PayPal\PayPalAPI\EnterBoardingResponseType;
use PayPal\PayPalAPI\ExecuteCheckoutOperationsReq;
use PayPal\PayPalAPI\ExecuteCheckoutOperationsResponseType;
use PayPal\PayPalAPI\ExternalRememberMeOptOutReq;
use PayPal\PayPalAPI\ExternalRememberMeOptOutResponseType;
use PayPal\PayPalAPI\GetAccessPermissionDetailsReq;
use PayPal\PayPalAPI\GetAccessPermissionDetailsResponseType;
use PayPal\PayPalAPI\GetAuthDetailsReq;
use PayPal\PayPalAPI\GetAuthDetailsResponseType;
use PayPal\PayPalAPI\GetBalanceReq;
use PayPal\PayPalAPI\GetBalanceResponseType;
use PayPal\PayPalAPI\GetBillingAgreementCustomerDetailsReq;
use PayPal\PayPalAPI\GetBillingAgreementCustomerDetailsResponseType;
use PayPal\PayPalAPI\GetBoardingDetailsReq;
use PayPal\PayPalAPI\GetBoardingDetailsResponseType;
use PayPal\PayPalAPI\GetExpressCheckoutDetailsReq;
use PayPal\PayPalAPI\GetExpressCheckoutDetailsResponseType;
use PayPal\PayPalAPI\GetIncentiveEvaluationReq;
use PayPal\PayPalAPI\GetIncentiveEvaluationResponseType;
use PayPal\PayPalAPI\GetMobileStatusReq;
use PayPal\PayPalAPI\GetMobileStatusResponseType;
use PayPal\PayPalAPI\GetPalDetailsReq;
use PayPal\PayPalAPI\GetPalDetailsResponseType;
use PayPal\PayPalAPI\GetRecurringPaymentsProfileDetailsReq;
use PayPal\PayPalAPI\GetRecurringPaymentsProfileDetailsResponseType;
use PayPal\PayPalAPI\GetTransactionDetailsReq;
use PayPal\PayPalAPI\GetTransactionDetailsResponseType;
use PayPal\PayPalAPI\InitiateRecoupReq;
use PayPal\PayPalAPI\InitiateRecoupResponseType;
use PayPal\PayPalAPI\ManagePendingTransactionStatusReq;
use PayPal\PayPalAPI\ManagePendingTransactionStatusResponseType;
use PayPal\PayPalAPI\ManageRecurringPaymentsProfileStatusReq;
use PayPal\PayPalAPI\ManageRecurringPaymentsProfileStatusResponseType;
use PayPal\PayPalAPI\MassPayReq;
use PayPal\PayPalAPI\MassPayResponseType;
use PayPal\PayPalAPI\RefundTransactionReq;
use PayPal\PayPalAPI\RefundTransactionResponseType;
use PayPal\PayPalAPI\ReverseTransactionReq;
use PayPal\PayPalAPI\ReverseTransactionResponseType;
use PayPal\PayPalAPI\SetAccessPermissionsReq;
use PayPal\PayPalAPI\SetAccessPermissionsResponseType;
use PayPal\PayPalAPI\SetAuthFlowParamReq;
use PayPal\PayPalAPI\SetAuthFlowParamResponseType;
use PayPal\PayPalAPI\SetCustomerBillingAgreementReq;
use PayPal\PayPalAPI\SetCustomerBillingAgreementResponseType;
use PayPal\PayPalAPI\SetExpressCheckoutReq;
use PayPal\PayPalAPI\SetExpressCheckoutResponseType;
use PayPal\PayPalAPI\SetMobileCheckoutReq;
use PayPal\PayPalAPI\SetMobileCheckoutResponseType;
use PayPal\PayPalAPI\TransactionSearchReq;
use PayPal\PayPalAPI\TransactionSearchResponseType;
use PayPal\PayPalAPI\UpdateAccessPermissionsReq;
use PayPal\PayPalAPI\UpdateAccessPermissionsResponseType;
use PayPal\PayPalAPI\UpdateAuthorizationReq;
use PayPal\PayPalAPI\UpdateAuthorizationResponseType;
use PayPal\PayPalAPI\UpdateRecurringPaymentsProfileReq;
use PayPal\PayPalAPI\UpdateRecurringPaymentsProfileResponseType;

/**
 * AUTO GENERATED code for PayPalAPIInterfaceService
 */
class PayPalAPIInterfaceServiceService
    extends PPBaseService
{

    // Service Version
    private static $SERVICE_VERSION = "204.0";

    // Service Name
    private static $SERVICE_NAME = "PayPalAPIInterfaceService";

    // SDK Name
    protected static $SDK_NAME = "merchant-php-sdk";

    // SDK Version
    protected static $SDK_VERSION = "3.12.0";

    /**
     * @param $config - Dynamic config map. This takes the higher precedence if config file is also present.
     *
     */
    public function __construct($config = null)
    {
        parent::__construct(self::$SERVICE_NAME, 'SOAP', $config);
    }

    private function setStandardParams($request)
    {
        if ($request->Version == null) {
            $request->Version = self::$SERVICE_VERSION;
        }
    }

    /**
     * Service Call: RefundTransaction
     *
     * @param RefundTransactionReq $refundTransactionReq
     * @param mixed                $apiCredential - Optional API credential - can either be
     *                                            a username configured in sdk_config.ini or a ICredential object
     *                                            created dynamically
     *
     * @return \PayPal\PayPalAPI\RefundTransactionResponseType
     * @throws \Exception
     */
    public function RefundTransaction($refundTransactionReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($refundTransactionReq->RefundTransactionRequest);
        $ret  = new RefundTransactionResponseType();
        $resp = $this->call('PayPalAPI', 'RefundTransaction', $refundTransactionReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: InitiateRecoup
     *
     * @param InitiateRecoupReq $initiateRecoupReq
     * @param mixed             $apiCredential - Optional API credential - can either be
     *                                         a username configured in sdk_config.ini or a ICredential object
     *                                         created dynamically
     *
     * @return \PayPal\PayPalAPI\InitiateRecoupResponseType
     * @throws \Exception
     */
    public function InitiateRecoup($initiateRecoupReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($initiateRecoupReq->InitiateRecoupRequest);
        $ret  = new InitiateRecoupResponseType();
        $resp = $this->call('PayPalAPI', 'InitiateRecoup', $initiateRecoupReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: CompleteRecoup
     *
     * @param CompleteRecoupReq $completeRecoupReq
     * @param mixed             $apiCredential - Optional API credential - can either be
     *                                         a username configured in sdk_config.ini or a ICredential object
     *                                         created dynamically
     *
     * @return \PayPal\PayPalAPI\CompleteRecoupResponseType
     * @throws \Exception
     */
    public function CompleteRecoup($completeRecoupReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($completeRecoupReq->CompleteRecoupRequest);
        $ret  = new CompleteRecoupResponseType();
        $resp = $this->call('PayPalAPI', 'CompleteRecoup', $completeRecoupReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: CancelRecoup
     *
     * @param CancelRecoupReq $cancelRecoupReq
     * @param mixed           $apiCredential - Optional API credential - can either be
     *                                       a username configured in sdk_config.ini or a ICredential object
     *                                       created dynamically
     *
     * @return \PayPal\PayPalAPI\CancelRecoupResponseType
     * @throws \Exception
     */
    public function CancelRecoup($cancelRecoupReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($cancelRecoupReq->CancelRecoupRequest);
        $ret  = new CancelRecoupResponseType();
        $resp = $this->call('PayPalAPI', 'CancelRecoup', $cancelRecoupReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: GetTransactionDetails
     *
     * @param GetTransactionDetailsReq $getTransactionDetailsReq
     * @param mixed                    $apiCredential - Optional API credential - can either be
     *                                                a username configured in sdk_config.ini or a ICredential object
     *                                                created dynamically
     *
     * @return \PayPal\PayPalAPI\GetTransactionDetailsResponseType
     * @throws \Exception
     */
    public function GetTransactionDetails($getTransactionDetailsReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($getTransactionDetailsReq->GetTransactionDetailsRequest);
        $ret  = new GetTransactionDetailsResponseType();
        $resp = $this->call('PayPalAPI', 'GetTransactionDetails', $getTransactionDetailsReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: BillUser
     *
     * @param BillUserReq $billUserReq
     * @param mixed       $apiCredential - Optional API credential - can either be
     *                                   a username configured in sdk_config.ini or a ICredential object
     *                                   created dynamically
     *
     * @return \PayPal\PayPalAPI\BillUserResponseType
     * @throws \Exception
     */
    public function BillUser($billUserReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($billUserReq->BillUserRequest);
        $ret  = new BillUserResponseType();
        $resp = $this->call('PayPalAPI', 'BillUser', $billUserReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: TransactionSearch
     *
     * @param TransactionSearchReq $transactionSearchReq
     * @param mixed                $apiCredential - Optional API credential - can either be
     *                                            a username configured in sdk_config.ini or a ICredential object
     *                                            created dynamically
     *
     * @return \PayPal\PayPalAPI\TransactionSearchResponseType
     * @throws \Exception
     */
    public function TransactionSearch($transactionSearchReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($transactionSearchReq->TransactionSearchRequest);
        $ret  = new TransactionSearchResponseType();
        $resp = $this->call('PayPalAPI', 'TransactionSearch', $transactionSearchReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: MassPay
     *
     * @param MassPayReq $massPayReq
     * @param mixed      $apiCredential - Optional API credential - can either be
     *                                  a username configured in sdk_config.ini or a ICredential object
     *                                  created dynamically
     *
     * @return \PayPal\PayPalAPI\MassPayResponseType
     * @throws \Exception
     */
    public function MassPay($massPayReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($massPayReq->MassPayRequest);
        $ret  = new MassPayResponseType();
        $resp = $this->call('PayPalAPI', 'MassPay', $massPayReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: BillAgreementUpdate
     *
     * @param BillAgreementUpdateReq $billAgreementUpdateReq
     * @param mixed                  $apiCredential - Optional API credential - can either be
     *                                              a username configured in sdk_config.ini or a ICredential object
     *                                              created dynamically
     *
     * @return \PayPal\PayPalAPI\BAUpdateResponseType
     * @throws \Exception
     */
    public function BillAgreementUpdate($billAgreementUpdateReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($billAgreementUpdateReq->BAUpdateRequest);
        $ret  = new BAUpdateResponseType();
        $resp = $this->call('PayPalAPI', 'BillAgreementUpdate', $billAgreementUpdateReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: AddressVerify
     *
     * @param AddressVerifyReq $addressVerifyReq
     * @param mixed            $apiCredential - Optional API credential - can either be
     *                                        a username configured in sdk_config.ini or a ICredential object
     *                                        created dynamically
     *
     * @return \PayPal\PayPalAPI\AddressVerifyResponseType
     * @throws \Exception
     */
    public function AddressVerify($addressVerifyReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($addressVerifyReq->AddressVerifyRequest);
        $ret  = new AddressVerifyResponseType();
        $resp = $this->call('PayPalAPI', 'AddressVerify', $addressVerifyReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: EnterBoarding
     *
     * @param EnterBoardingReq $enterBoardingReq
     * @param mixed            $apiCredential - Optional API credential - can either be
     *                                        a username configured in sdk_config.ini or a ICredential object
     *                                        created dynamically
     *
     * @return \PayPal\PayPalAPI\EnterBoardingResponseType
     * @throws \Exception
     */
    public function EnterBoarding($enterBoardingReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($enterBoardingReq->EnterBoardingRequest);
        $ret  = new EnterBoardingResponseType();
        $resp = $this->call('PayPalAPI', 'EnterBoarding', $enterBoardingReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: GetBoardingDetails
     *
     * @param GetBoardingDetailsReq $getBoardingDetailsReq
     * @param mixed                 $apiCredential - Optional API credential - can either be
     *                                             a username configured in sdk_config.ini or a ICredential object
     *                                             created dynamically
     *
     * @return \PayPal\PayPalAPI\GetBoardingDetailsResponseType
     * @throws \Exception
     */
    public function GetBoardingDetails($getBoardingDetailsReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($getBoardingDetailsReq->GetBoardingDetailsRequest);
        $ret  = new GetBoardingDetailsResponseType();
        $resp = $this->call('PayPalAPI', 'GetBoardingDetails', $getBoardingDetailsReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: CreateMobilePayment
     *
     * @param CreateMobilePaymentReq $createMobilePaymentReq
     * @param mixed                  $apiCredential - Optional API credential - can either be
     *                                              a username configured in sdk_config.ini or a ICredential object
     *                                              created dynamically
     *
     * @return \PayPal\PayPalAPI\CreateMobilePaymentResponseType
     * @throws \Exception
     */
    public function CreateMobilePayment($createMobilePaymentReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($createMobilePaymentReq->CreateMobilePaymentRequest);
        $ret  = new CreateMobilePaymentResponseType();
        $resp = $this->call('PayPalAPI', 'CreateMobilePayment', $createMobilePaymentReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: GetMobileStatus
     *
     * @param GetMobileStatusReq $getMobileStatusReq
     * @param mixed              $apiCredential - Optional API credential - can either be
     *                                          a username configured in sdk_config.ini or a ICredential object
     *                                          created dynamically
     *
     * @return \PayPal\PayPalAPI\GetMobileStatusResponseType
     * @throws \Exception
     */
    public function GetMobileStatus($getMobileStatusReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($getMobileStatusReq->GetMobileStatusRequest);
        $ret  = new GetMobileStatusResponseType();
        $resp = $this->call('PayPalAPI', 'GetMobileStatus', $getMobileStatusReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: SetMobileCheckout
     *
     * @param SetMobileCheckoutReq $setMobileCheckoutReq
     * @param mixed                $apiCredential - Optional API credential - can either be
     *                                            a username configured in sdk_config.ini or a ICredential object
     *                                            created dynamically
     *
     * @return \PayPal\PayPalAPI\SetMobileCheckoutResponseType
     * @throws \Exception
     */
    public function SetMobileCheckout($setMobileCheckoutReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($setMobileCheckoutReq->SetMobileCheckoutRequest);
        $ret  = new SetMobileCheckoutResponseType();
        $resp = $this->call('PayPalAPI', 'SetMobileCheckout', $setMobileCheckoutReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: DoMobileCheckoutPayment
     *
     * @param DoMobileCheckoutPaymentReq $doMobileCheckoutPaymentReq
     * @param mixed                      $apiCredential - Optional API credential - can either be
     *                                                  a username configured in sdk_config.ini or a ICredential object
     *                                                  created dynamically
     *
     * @return \PayPal\PayPalAPI\DoMobileCheckoutPaymentResponseType
     * @throws \Exception
     */
    public function DoMobileCheckoutPayment($doMobileCheckoutPaymentReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($doMobileCheckoutPaymentReq->DoMobileCheckoutPaymentRequest);
        $ret  = new DoMobileCheckoutPaymentResponseType();
        $resp = $this->call('PayPalAPI', 'DoMobileCheckoutPayment', $doMobileCheckoutPaymentReq, $apiContext,
            $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: GetBalance
     *
     * @param GetBalanceReq $getBalanceReq
     * @param mixed         $apiCredential - Optional API credential - can either be
     *                                     a username configured in sdk_config.ini or a ICredential object
     *                                     created dynamically
     *
     * @return \PayPal\PayPalAPI\GetBalanceResponseType
     * @throws \Exception
     */
    public function GetBalance($getBalanceReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($getBalanceReq->GetBalanceRequest);
        $ret  = new GetBalanceResponseType();
        $resp = $this->call('PayPalAPI', 'GetBalance', $getBalanceReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: GetPalDetails
     *
     * @param GetPalDetailsReq $getPalDetailsReq
     * @param mixed            $apiCredential - Optional API credential - can either be
     *                                        a username configured in sdk_config.ini or a ICredential object
     *                                        created dynamically
     *
     * @return \PayPal\PayPalAPI\GetPalDetailsResponseType
     * @throws \Exception
     */
    public function GetPalDetails($getPalDetailsReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($getPalDetailsReq->GetPalDetailsRequest);
        $ret  = new GetPalDetailsResponseType();
        $resp = $this->call('PayPalAPI', 'GetPalDetails', $getPalDetailsReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: DoExpressCheckoutPayment
     *
     * @param DoExpressCheckoutPaymentReq $doExpressCheckoutPaymentReq
     * @param mixed                       $apiCredential - Optional API credential - can either be
     *                                                   a username configured in sdk_config.ini or a ICredential object
     *                                                   created dynamically
     *
     * @return \PayPal\PayPalAPI\DoExpressCheckoutPaymentResponseType
     * @throws \Exception
     */
    public function DoExpressCheckoutPayment($doExpressCheckoutPaymentReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($doExpressCheckoutPaymentReq->DoExpressCheckoutPaymentRequest);
        $ret  = new DoExpressCheckoutPaymentResponseType();
        $resp = $this->call('PayPalAPIAA', 'DoExpressCheckoutPayment', $doExpressCheckoutPaymentReq, $apiContext,
            $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: DoUATPExpressCheckoutPayment
     *
     * @param DoUATPExpressCheckoutPaymentReq $doUATPExpressCheckoutPaymentReq
     * @param mixed                           $apiCredential - Optional API credential - can either be
     *                                                       a username configured in sdk_config.ini or a ICredential object
     *                                                       created dynamically
     *
     * @return \PayPal\PayPalAPI\DoUATPExpressCheckoutPaymentResponseType
     * @throws \Exception
     */
    public function DoUATPExpressCheckoutPayment($doUATPExpressCheckoutPaymentReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($doUATPExpressCheckoutPaymentReq->DoUATPExpressCheckoutPaymentRequest);
        $ret  = new DoUATPExpressCheckoutPaymentResponseType();
        $resp = $this->call('PayPalAPIAA', 'DoUATPExpressCheckoutPayment', $doUATPExpressCheckoutPaymentReq,
            $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: SetAuthFlowParam
     *
     * @param SetAuthFlowParamReq $setAuthFlowParamReq
     * @param mixed               $apiCredential - Optional API credential - can either be
     *                                           a username configured in sdk_config.ini or a ICredential object
     *                                           created dynamically
     *
     * @return \PayPal\PayPalAPI\SetAuthFlowParamResponseType
     * @throws \Exception
     */
    public function SetAuthFlowParam($setAuthFlowParamReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($setAuthFlowParamReq->SetAuthFlowParamRequest);
        $ret  = new SetAuthFlowParamResponseType();
        $resp = $this->call('PayPalAPIAA', 'SetAuthFlowParam', $setAuthFlowParamReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: GetAuthDetails
     *
     * @param GetAuthDetailsReq $getAuthDetailsReq
     * @param mixed             $apiCredential - Optional API credential - can either be
     *                                         a username configured in sdk_config.ini or a ICredential object
     *                                         created dynamically
     *
     * @return \PayPal\PayPalAPI\GetAuthDetailsResponseType
     * @throws \Exception
     */
    public function GetAuthDetails($getAuthDetailsReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($getAuthDetailsReq->GetAuthDetailsRequest);
        $ret  = new GetAuthDetailsResponseType();
        $resp = $this->call('PayPalAPIAA', 'GetAuthDetails', $getAuthDetailsReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: SetAccessPermissions
     *
     * @param SetAccessPermissionsReq $setAccessPermissionsReq
     * @param mixed                   $apiCredential - Optional API credential - can either be
     *                                               a username configured in sdk_config.ini or a ICredential object
     *                                               created dynamically
     *
     * @return \PayPal\PayPalAPI\SetAccessPermissionsResponseType
     * @throws \Exception
     */
    public function SetAccessPermissions($setAccessPermissionsReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($setAccessPermissionsReq->SetAccessPermissionsRequest);
        $ret  = new SetAccessPermissionsResponseType();
        $resp = $this->call('PayPalAPIAA', 'SetAccessPermissions', $setAccessPermissionsReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: UpdateAccessPermissions
     *
     * @param UpdateAccessPermissionsReq $updateAccessPermissionsReq
     * @param mixed                      $apiCredential - Optional API credential - can either be
     *                                                  a username configured in sdk_config.ini or a ICredential object
     *                                                  created dynamically
     *
     * @return \PayPal\PayPalAPI\UpdateAccessPermissionsResponseType
     * @throws \Exception
     */
    public function UpdateAccessPermissions($updateAccessPermissionsReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($updateAccessPermissionsReq->UpdateAccessPermissionsRequest);
        $ret  = new UpdateAccessPermissionsResponseType();
        $resp = $this->call('PayPalAPIAA', 'UpdateAccessPermissions', $updateAccessPermissionsReq, $apiContext,
            $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: GetAccessPermissionDetails
     *
     * @param GetAccessPermissionDetailsReq $getAccessPermissionDetailsReq
     * @param mixed                         $apiCredential - Optional API credential - can either be
     *                                                     a username configured in sdk_config.ini or a ICredential object
     *                                                     created dynamically
     *
     * @return \PayPal\PayPalAPI\GetAccessPermissionDetailsResponseType
     * @throws \Exception
     */
    public function GetAccessPermissionDetails($getAccessPermissionDetailsReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($getAccessPermissionDetailsReq->GetAccessPermissionDetailsRequest);
        $ret  = new GetAccessPermissionDetailsResponseType();
        $resp = $this->call('PayPalAPIAA', 'GetAccessPermissionDetails', $getAccessPermissionDetailsReq, $apiContext,
            $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: GetIncentiveEvaluation
     *
     * @param GetIncentiveEvaluationReq $getIncentiveEvaluationReq
     * @param mixed                     $apiCredential - Optional API credential - can either be
     *                                                 a username configured in sdk_config.ini or a ICredential object
     *                                                 created dynamically
     *
     * @return \PayPal\PayPalAPI\GetIncentiveEvaluationResponseType
     * @throws \Exception
     */
    public function GetIncentiveEvaluation($getIncentiveEvaluationReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($getIncentiveEvaluationReq->GetIncentiveEvaluationRequest);
        $ret  = new GetIncentiveEvaluationResponseType();
        $resp = $this->call('PayPalAPIAA', 'GetIncentiveEvaluation', $getIncentiveEvaluationReq, $apiContext,
            $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: SetExpressCheckout
     *
     * @param SetExpressCheckoutReq $setExpressCheckoutReq
     * @param mixed                 $apiCredential - Optional API credential - can either be
     *                                             a username configured in sdk_config.ini or a ICredential object
     *                                             created dynamically
     *
     * @return \PayPal\PayPalAPI\SetExpressCheckoutResponseType
     * @throws \Exception
     */
    public function SetExpressCheckout($setExpressCheckoutReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($setExpressCheckoutReq->SetExpressCheckoutRequest);
        $ret  = new SetExpressCheckoutResponseType();
        $resp = $this->call('PayPalAPIAA', 'SetExpressCheckout', $setExpressCheckoutReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: ExecuteCheckoutOperations
     *
     * @param ExecuteCheckoutOperationsReq $executeCheckoutOperationsReq
     * @param mixed                        $apiCredential - Optional API credential - can either be
     *                                                    a username configured in sdk_config.ini or a ICredential object
     *                                                    created dynamically
     *
     * @return \PayPal\PayPalAPI\ExecuteCheckoutOperationsResponseType
     * @throws \Exception
     */
    public function ExecuteCheckoutOperations($executeCheckoutOperationsReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($executeCheckoutOperationsReq->ExecuteCheckoutOperationsRequest);
        $ret  = new ExecuteCheckoutOperationsResponseType();
        $resp = $this->call('PayPalAPIAA', 'ExecuteCheckoutOperations', $executeCheckoutOperationsReq, $apiContext,
            $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: GetExpressCheckoutDetails
     *
     * @param GetExpressCheckoutDetailsReq $getExpressCheckoutDetailsReq
     * @param mixed                        $apiCredential - Optional API credential - can either be
     *                                                    a username configured in sdk_config.ini or a ICredential object
     *                                                    created dynamically
     *
     * @return \PayPal\PayPalAPI\GetExpressCheckoutDetailsResponseType
     * @throws \Exception
     */
    public function GetExpressCheckoutDetails($getExpressCheckoutDetailsReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($getExpressCheckoutDetailsReq->GetExpressCheckoutDetailsRequest);
        $ret  = new GetExpressCheckoutDetailsResponseType();
        $resp = $this->call('PayPalAPIAA', 'GetExpressCheckoutDetails', $getExpressCheckoutDetailsReq, $apiContext,
            $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: DoDirectPayment
     *
     * @param DoDirectPaymentReq $doDirectPaymentReq
     * @param mixed              $apiCredential - Optional API credential - can either be
     *                                          a username configured in sdk_config.ini or a ICredential object
     *                                          created dynamically
     *
     * @return \PayPal\PayPalAPI\DoDirectPaymentResponseType
     * @throws \Exception
     */
    public function DoDirectPayment($doDirectPaymentReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($doDirectPaymentReq->DoDirectPaymentRequest);
        $ret  = new DoDirectPaymentResponseType();
        $resp = $this->call('PayPalAPIAA', 'DoDirectPayment', $doDirectPaymentReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: ManagePendingTransactionStatus
     *
     * @param ManagePendingTransactionStatusReq $managePendingTransactionStatusReq
     * @param mixed                             $apiCredential - Optional API credential - can either be
     *                                                         a username configured in sdk_config.ini or a ICredential object
     *                                                         created dynamically
     *
     * @return \PayPal\PayPalAPI\ManagePendingTransactionStatusResponseType
     * @throws \Exception
     */
    public function ManagePendingTransactionStatus($managePendingTransactionStatusReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($managePendingTransactionStatusReq->ManagePendingTransactionStatusRequest);
        $ret  = new ManagePendingTransactionStatusResponseType();
        $resp = $this->call('PayPalAPIAA', 'ManagePendingTransactionStatus', $managePendingTransactionStatusReq,
            $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: DoCancel
     *
     * @param DoCancelReq $doCancelReq
     * @param mixed       $apiCredential - Optional API credential - can either be
     *                                   a username configured in sdk_config.ini or a ICredential object
     *                                   created dynamically
     *
     * @return \PayPal\PayPalAPI\DoCancelResponseType
     * @throws \Exception
     */
    public function DoCancel($doCancelReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($doCancelReq->DoCancelRequest);
        $ret  = new DoCancelResponseType();
        $resp = $this->call('PayPalAPIAA', 'DoCancel', $doCancelReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: DoCapture
     *
     * @param DoCaptureReq $doCaptureReq
     * @param mixed        $apiCredential - Optional API credential - can either be
     *                                    a username configured in sdk_config.ini or a ICredential object
     *                                    created dynamically
     *
     * @return \PayPal\PayPalAPI\DoCaptureResponseType
     * @throws \Exception
     */
    public function DoCapture($doCaptureReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($doCaptureReq->DoCaptureRequest);
        $ret  = new DoCaptureResponseType();
        $resp = $this->call('PayPalAPIAA', 'DoCapture', $doCaptureReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: DoReauthorization
     *
     * @param DoReauthorizationReq $doReauthorizationReq
     * @param mixed                $apiCredential - Optional API credential - can either be
     *                                            a username configured in sdk_config.ini or a ICredential object
     *                                            created dynamically
     *
     * @return \PayPal\PayPalAPI\DoReauthorizationResponseType
     * @throws \Exception
     */
    public function DoReauthorization($doReauthorizationReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($doReauthorizationReq->DoReauthorizationRequest);
        $ret  = new DoReauthorizationResponseType();
        $resp = $this->call('PayPalAPIAA', 'DoReauthorization', $doReauthorizationReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: DoVoid
     *
     * @param DoVoidReq $doVoidReq
     * @param mixed     $apiCredential - Optional API credential - can either be
     *                                 a username configured in sdk_config.ini or a ICredential object
     *                                 created dynamically
     *
     * @return \PayPal\PayPalAPI\DoVoidResponseType
     * @throws \Exception
     */
    public function DoVoid($doVoidReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($doVoidReq->DoVoidRequest);
        $ret  = new DoVoidResponseType();
        $resp = $this->call('PayPalAPIAA', 'DoVoid', $doVoidReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: DoAuthorization
     *
     * @param DoAuthorizationReq $doAuthorizationReq
     * @param mixed              $apiCredential - Optional API credential - can either be
     *                                          a username configured in sdk_config.ini or a ICredential object
     *                                          created dynamically
     *
     * @return \PayPal\PayPalAPI\DoAuthorizationResponseType
     * @throws \Exception
     */
    public function DoAuthorization($doAuthorizationReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($doAuthorizationReq->DoAuthorizationRequest);
        $ret  = new DoAuthorizationResponseType();
        $resp = $this->call('PayPalAPIAA', 'DoAuthorization', $doAuthorizationReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: UpdateAuthorization
     *
     * @param UpdateAuthorizationReq $updateAuthorizationReq
     * @param mixed                  $apiCredential - Optional API credential - can either be
     *                                              a username configured in sdk_config.ini or a ICredential object
     *                                              created dynamically
     *
     * @return \PayPal\PayPalAPI\UpdateAuthorizationResponseType
     * @throws \Exception
     */
    public function UpdateAuthorization($updateAuthorizationReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($updateAuthorizationReq->UpdateAuthorizationRequest);
        $ret  = new UpdateAuthorizationResponseType();
        $resp = $this->call('PayPalAPIAA', 'UpdateAuthorization', $updateAuthorizationReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: SetCustomerBillingAgreement
     *
     * @param SetCustomerBillingAgreementReq $setCustomerBillingAgreementReq
     * @param mixed                          $apiCredential - Optional API credential - can either be
     *                                                      a username configured in sdk_config.ini or a ICredential object
     *                                                      created dynamically
     *
     * @return \PayPal\PayPalAPI\SetCustomerBillingAgreementResponseType
     * @throws \Exception
     */
    public function SetCustomerBillingAgreement($setCustomerBillingAgreementReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($setCustomerBillingAgreementReq->SetCustomerBillingAgreementRequest);
        $ret  = new SetCustomerBillingAgreementResponseType();
        $resp = $this->call('PayPalAPIAA', 'SetCustomerBillingAgreement', $setCustomerBillingAgreementReq, $apiContext,
            $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: GetBillingAgreementCustomerDetails
     *
     * @param GetBillingAgreementCustomerDetailsReq $getBillingAgreementCustomerDetailsReq
     * @param mixed                                 $apiCredential - Optional API credential - can either be
     *                                                             a username configured in sdk_config.ini or a ICredential object
     *                                                             created dynamically
     *
     * @return \PayPal\PayPalAPI\GetBillingAgreementCustomerDetailsResponseType
     * @throws \Exception
     */
    public function GetBillingAgreementCustomerDetails($getBillingAgreementCustomerDetailsReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($getBillingAgreementCustomerDetailsReq->GetBillingAgreementCustomerDetailsRequest);
        $ret  = new GetBillingAgreementCustomerDetailsResponseType();
        $resp = $this->call('PayPalAPIAA', 'GetBillingAgreementCustomerDetails', $getBillingAgreementCustomerDetailsReq,
            $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: CreateBillingAgreement
     *
     * @param CreateBillingAgreementReq $createBillingAgreementReq
     * @param mixed                     $apiCredential - Optional API credential - can either be
     *                                                 a username configured in sdk_config.ini or a ICredential object
     *                                                 created dynamically
     *
     * @return \PayPal\PayPalAPI\CreateBillingAgreementResponseType
     * @throws \Exception
     */
    public function CreateBillingAgreement($createBillingAgreementReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($createBillingAgreementReq->CreateBillingAgreementRequest);
        $ret  = new CreateBillingAgreementResponseType();
        $resp = $this->call('PayPalAPIAA', 'CreateBillingAgreement', $createBillingAgreementReq, $apiContext,
            $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: DoReferenceTransaction
     *
     * @param DoReferenceTransactionReq $doReferenceTransactionReq
     * @param mixed                     $apiCredential - Optional API credential - can either be
     *                                                 a username configured in sdk_config.ini or a ICredential object
     *                                                 created dynamically
     *
     * @return \PayPal\PayPalAPI\DoReferenceTransactionResponseType
     * @throws \Exception
     */
    public function DoReferenceTransaction($doReferenceTransactionReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($doReferenceTransactionReq->DoReferenceTransactionRequest);
        $ret  = new DoReferenceTransactionResponseType();
        $resp = $this->call('PayPalAPIAA', 'DoReferenceTransaction', $doReferenceTransactionReq, $apiContext,
            $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: DoNonReferencedCredit
     *
     * @param DoNonReferencedCreditReq $doNonReferencedCreditReq
     * @param mixed                    $apiCredential - Optional API credential - can either be
     *                                                a username configured in sdk_config.ini or a ICredential object
     *                                                created dynamically
     *
     * @return \PayPal\PayPalAPI\DoNonReferencedCreditResponseType
     * @throws \Exception
     */
    public function DoNonReferencedCredit($doNonReferencedCreditReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($doNonReferencedCreditReq->DoNonReferencedCreditRequest);
        $ret  = new DoNonReferencedCreditResponseType();
        $resp = $this->call('PayPalAPIAA', 'DoNonReferencedCredit', $doNonReferencedCreditReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: DoUATPAuthorization
     *
     * @param DoUATPAuthorizationReq $doUATPAuthorizationReq
     * @param mixed                  $apiCredential - Optional API credential - can either be
     *                                              a username configured in sdk_config.ini or a ICredential object
     *                                              created dynamically
     *
     * @return \PayPal\PayPalAPI\DoUATPAuthorizationResponseType
     * @throws \Exception
     */
    public function DoUATPAuthorization($doUATPAuthorizationReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($doUATPAuthorizationReq->DoUATPAuthorizationRequest);
        $ret  = new DoUATPAuthorizationResponseType();
        $resp = $this->call('PayPalAPIAA', 'DoUATPAuthorization', $doUATPAuthorizationReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: CreateRecurringPaymentsProfile
     *
     * @param CreateRecurringPaymentsProfileReq $createRecurringPaymentsProfileReq
     * @param mixed                             $apiCredential - Optional API credential - can either be
     *                                                         a username configured in sdk_config.ini or a ICredential object
     *                                                         created dynamically
     *
     * @return \PayPal\PayPalAPI\CreateRecurringPaymentsProfileResponseType
     * @throws \Exception
     */
    public function CreateRecurringPaymentsProfile($createRecurringPaymentsProfileReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($createRecurringPaymentsProfileReq->CreateRecurringPaymentsProfileRequest);
        $ret  = new CreateRecurringPaymentsProfileResponseType();
        $resp = $this->call('PayPalAPIAA', 'CreateRecurringPaymentsProfile', $createRecurringPaymentsProfileReq,
            $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: GetRecurringPaymentsProfileDetails
     *
     * @param GetRecurringPaymentsProfileDetailsReq $getRecurringPaymentsProfileDetailsReq
     * @param mixed                                 $apiCredential - Optional API credential - can either be
     *                                                             a username configured in sdk_config.ini or a ICredential object
     *                                                             created dynamically
     *
     * @return \PayPal\PayPalAPI\GetRecurringPaymentsProfileDetailsResponseType
     * @throws \Exception
     */
    public function GetRecurringPaymentsProfileDetails($getRecurringPaymentsProfileDetailsReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($getRecurringPaymentsProfileDetailsReq->GetRecurringPaymentsProfileDetailsRequest);
        $ret  = new GetRecurringPaymentsProfileDetailsResponseType();
        $resp = $this->call('PayPalAPIAA', 'GetRecurringPaymentsProfileDetails', $getRecurringPaymentsProfileDetailsReq,
            $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: ManageRecurringPaymentsProfileStatus
     *
     * @param ManageRecurringPaymentsProfileStatusReq $manageRecurringPaymentsProfileStatusReq
     * @param mixed                                   $apiCredential - Optional API credential - can either be
     *                                                               a username configured in sdk_config.ini or a ICredential object
     *                                                               created dynamically
     *
     * @return \PayPal\PayPalAPI\ManageRecurringPaymentsProfileStatusResponseType
     * @throws \Exception
     */
    public function ManageRecurringPaymentsProfileStatus(
        $manageRecurringPaymentsProfileStatusReq,
        $apiCredential = null
    ) {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($manageRecurringPaymentsProfileStatusReq->ManageRecurringPaymentsProfileStatusRequest);
        $ret  = new ManageRecurringPaymentsProfileStatusResponseType();
        $resp = $this->call('PayPalAPIAA', 'ManageRecurringPaymentsProfileStatus',
            $manageRecurringPaymentsProfileStatusReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: BillOutstandingAmount
     *
     * @param BillOutstandingAmountReq $billOutstandingAmountReq
     * @param mixed                    $apiCredential - Optional API credential - can either be
     *                                                a username configured in sdk_config.ini or a ICredential object
     *                                                created dynamically
     *
     * @return \PayPal\PayPalAPI\BillOutstandingAmountResponseType
     * @throws \Exception
     */
    public function BillOutstandingAmount($billOutstandingAmountReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($billOutstandingAmountReq->BillOutstandingAmountRequest);
        $ret  = new BillOutstandingAmountResponseType();
        $resp = $this->call('PayPalAPIAA', 'BillOutstandingAmount', $billOutstandingAmountReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: UpdateRecurringPaymentsProfile
     *
     * @param UpdateRecurringPaymentsProfileReq $updateRecurringPaymentsProfileReq
     * @param mixed                             $apiCredential - Optional API credential - can either be
     *                                                         a username configured in sdk_config.ini or a ICredential object
     *                                                         created dynamically
     *
     * @return \PayPal\PayPalAPI\UpdateRecurringPaymentsProfileResponseType
     * @throws \Exception
     */
    public function UpdateRecurringPaymentsProfile($updateRecurringPaymentsProfileReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($updateRecurringPaymentsProfileReq->UpdateRecurringPaymentsProfileRequest);
        $ret  = new UpdateRecurringPaymentsProfileResponseType();
        $resp = $this->call('PayPalAPIAA', 'UpdateRecurringPaymentsProfile', $updateRecurringPaymentsProfileReq,
            $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: ReverseTransaction
     *
     * @param ReverseTransactionReq $reverseTransactionReq
     * @param mixed                 $apiCredential - Optional API credential - can either be
     *                                             a username configured in sdk_config.ini or a ICredential object
     *                                             created dynamically
     *
     * @return \PayPal\PayPalAPI\ReverseTransactionResponseType
     * @throws \Exception
     */
    public function ReverseTransaction($reverseTransactionReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($reverseTransactionReq->ReverseTransactionRequest);
        $ret  = new ReverseTransactionResponseType();
        $resp = $this->call('PayPalAPIAA', 'ReverseTransaction', $reverseTransactionReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

    /**
     * Service Call: ExternalRememberMeOptOut
     *
     * @param ExternalRememberMeOptOutReq $externalRememberMeOptOutReq
     * @param mixed                       $apiCredential - Optional API credential - can either be
     *                                                   a username configured in sdk_config.ini or a ICredential object
     *                                                   created dynamically
     *
     * @return \PayPal\PayPalAPI\ExternalRememberMeOptOutResponseType
     * @throws \Exception
     */
    public function ExternalRememberMeOptOut($externalRememberMeOptOutReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers   = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($externalRememberMeOptOutReq->ExternalRememberMeOptOutRequest);
        $ret  = new ExternalRememberMeOptOutResponseType();
        $resp = $this->call('PayPalAPIAA', 'ExternalRememberMeOptOut', $externalRememberMeOptOutReq, $apiContext,
            $handlers);
        $ret->init(PPUtils::xmlToArray($resp));
        return $ret;
    }

}
