<?php
namespace PayPal\Service;
use PayPal\Core\PPMessage;
use PayPal\Core\PPBaseService;
use PayPal\Core\PPUtils;
use PayPal\Common\PPApiContext;
use PayPal\Handler\PPMerchantServiceHandler;
use PayPal\PayPalAPI\RefundTransactionResponseType;
use PayPal\PayPalAPI\InitiateRecoupResponseType;
use PayPal\PayPalAPI\CompleteRecoupResponseType;
use PayPal\PayPalAPI\CancelRecoupResponseType;
use PayPal\PayPalAPI\GetTransactionDetailsResponseType;
use PayPal\PayPalAPI\BillUserResponseType;
use PayPal\PayPalAPI\TransactionSearchResponseType;
use PayPal\PayPalAPI\MassPayResponseType;
use PayPal\PayPalAPI\BAUpdateResponseType;
use PayPal\PayPalAPI\AddressVerifyResponseType;
use PayPal\PayPalAPI\EnterBoardingResponseType;
use PayPal\PayPalAPI\GetBoardingDetailsResponseType;
use PayPal\PayPalAPI\CreateMobilePaymentResponseType;
use PayPal\PayPalAPI\GetMobileStatusResponseType;
use PayPal\PayPalAPI\SetMobileCheckoutResponseType;
use PayPal\PayPalAPI\DoMobileCheckoutPaymentResponseType;
use PayPal\PayPalAPI\GetBalanceResponseType;
use PayPal\PayPalAPI\GetPalDetailsResponseType;
use PayPal\PayPalAPI\DoExpressCheckoutPaymentResponseType;
use PayPal\PayPalAPI\DoUATPExpressCheckoutPaymentResponseType;
use PayPal\PayPalAPI\SetAuthFlowParamResponseType;
use PayPal\PayPalAPI\GetAuthDetailsResponseType;
use PayPal\PayPalAPI\SetAccessPermissionsResponseType;
use PayPal\PayPalAPI\UpdateAccessPermissionsResponseType;
use PayPal\PayPalAPI\GetAccessPermissionDetailsResponseType;
use PayPal\PayPalAPI\GetIncentiveEvaluationResponseType;
use PayPal\PayPalAPI\SetExpressCheckoutResponseType;
use PayPal\PayPalAPI\ExecuteCheckoutOperationsResponseType;
use PayPal\PayPalAPI\GetExpressCheckoutDetailsResponseType;
use PayPal\PayPalAPI\DoDirectPaymentResponseType;
use PayPal\PayPalAPI\ManagePendingTransactionStatusResponseType;
use PayPal\PayPalAPI\DoCancelResponseType;
use PayPal\PayPalAPI\DoCaptureResponseType;
use PayPal\PayPalAPI\DoReauthorizationResponseType;
use PayPal\PayPalAPI\DoVoidResponseType;
use PayPal\PayPalAPI\DoAuthorizationResponseType;
use PayPal\PayPalAPI\UpdateAuthorizationResponseType;
use PayPal\PayPalAPI\SetCustomerBillingAgreementResponseType;
use PayPal\PayPalAPI\GetBillingAgreementCustomerDetailsResponseType;
use PayPal\PayPalAPI\CreateBillingAgreementResponseType;
use PayPal\PayPalAPI\DoReferenceTransactionResponseType;
use PayPal\PayPalAPI\DoNonReferencedCreditResponseType;
use PayPal\PayPalAPI\DoUATPAuthorizationResponseType;
use PayPal\PayPalAPI\CreateRecurringPaymentsProfileResponseType;
use PayPal\PayPalAPI\GetRecurringPaymentsProfileDetailsResponseType;
use PayPal\PayPalAPI\ManageRecurringPaymentsProfileStatusResponseType;
use PayPal\PayPalAPI\BillOutstandingAmountResponseType;
use PayPal\PayPalAPI\UpdateRecurringPaymentsProfileResponseType;
use PayPal\PayPalAPI\ReverseTransactionResponseType;
use PayPal\PayPalAPI\ExternalRememberMeOptOutResponseType;

/**
 * AUTO GENERATED code for PayPalAPIInterfaceService
 */
class PayPalAPIInterfaceServiceService extends PPBaseService {

	// Service Version
	private static $SERVICE_VERSION = "106.0";

	// Service Name
	private static $SERVICE_NAME = "PayPalAPIInterfaceService";

    // SDK Name
	protected static $SDK_NAME = "merchant-php-sdk";

	// SDK Version
	protected static $SDK_VERSION = "3.8.107";

    /**
    * @param $config - Dynamic config map. This takes the higher precedence if config file is also present.
    *
    */
	public function __construct($config = null) {
		parent::__construct(self::$SERVICE_NAME, 'SOAP', $config);
	}

	private function setStandardParams($request) {
		if ($request->Version == NULL) {
			$request->Version = self::$SERVICE_VERSION;
		}
	}

	/**
	 * Service Call: RefundTransaction
	 * @param RefundTransactionReq $refundTransactionReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\RefundTransactionResponseType
	 * @throws APIException
	 */
	public function RefundTransaction($refundTransactionReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($refundTransactionReq->RefundTransactionRequest);
		$ret = new RefundTransactionResponseType();
		$resp = $this->call('PayPalAPI', 'RefundTransaction', $refundTransactionReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: InitiateRecoup
	 * @param InitiateRecoupReq $initiateRecoupReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\InitiateRecoupResponseType
	 * @throws APIException
	 */
	public function InitiateRecoup($initiateRecoupReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($initiateRecoupReq->InitiateRecoupRequest);
		$ret = new InitiateRecoupResponseType();
		$resp = $this->call('PayPalAPI', 'InitiateRecoup', $initiateRecoupReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: CompleteRecoup
	 * @param CompleteRecoupReq $completeRecoupReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\CompleteRecoupResponseType
	 * @throws APIException
	 */
	public function CompleteRecoup($completeRecoupReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($completeRecoupReq->CompleteRecoupRequest);
		$ret = new CompleteRecoupResponseType();
		$resp = $this->call('PayPalAPI', 'CompleteRecoup', $completeRecoupReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: CancelRecoup
	 * @param CancelRecoupReq $cancelRecoupReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\CancelRecoupResponseType
	 * @throws APIException
	 */
	public function CancelRecoup($cancelRecoupReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($cancelRecoupReq->CancelRecoupRequest);
		$ret = new CancelRecoupResponseType();
		$resp = $this->call('PayPalAPI', 'CancelRecoup', $cancelRecoupReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: GetTransactionDetails
	 * @param GetTransactionDetailsReq $getTransactionDetailsReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\GetTransactionDetailsResponseType
	 * @throws APIException
	 */
	public function GetTransactionDetails($getTransactionDetailsReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($getTransactionDetailsReq->GetTransactionDetailsRequest);
		$ret = new GetTransactionDetailsResponseType();
		$resp = $this->call('PayPalAPI', 'GetTransactionDetails', $getTransactionDetailsReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: BillUser
	 * @param BillUserReq $billUserReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\BillUserResponseType
	 * @throws APIException
	 */
	public function BillUser($billUserReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($billUserReq->BillUserRequest);
		$ret = new BillUserResponseType();
		$resp = $this->call('PayPalAPI', 'BillUser', $billUserReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: TransactionSearch
	 * @param TransactionSearchReq $transactionSearchReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\TransactionSearchResponseType
	 * @throws APIException
	 */
	public function TransactionSearch($transactionSearchReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($transactionSearchReq->TransactionSearchRequest);
		$ret = new TransactionSearchResponseType();
		$resp = $this->call('PayPalAPI', 'TransactionSearch', $transactionSearchReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: MassPay
	 * @param MassPayReq $massPayReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\MassPayResponseType
	 * @throws APIException
	 */
	public function MassPay($massPayReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($massPayReq->MassPayRequest);
		$ret = new MassPayResponseType();
		$resp = $this->call('PayPalAPI', 'MassPay', $massPayReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: BillAgreementUpdate
	 * @param BillAgreementUpdateReq $billAgreementUpdateReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\BAUpdateResponseType
	 * @throws APIException
	 */
	public function BillAgreementUpdate($billAgreementUpdateReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($billAgreementUpdateReq->BAUpdateRequest);
		$ret = new BAUpdateResponseType();
		$resp = $this->call('PayPalAPI', 'BillAgreementUpdate', $billAgreementUpdateReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: AddressVerify
	 * @param AddressVerifyReq $addressVerifyReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\AddressVerifyResponseType
	 * @throws APIException
	 */
	public function AddressVerify($addressVerifyReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($addressVerifyReq->AddressVerifyRequest);
		$ret = new AddressVerifyResponseType();
		$resp = $this->call('PayPalAPI', 'AddressVerify', $addressVerifyReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: EnterBoarding
	 * @param EnterBoardingReq $enterBoardingReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\EnterBoardingResponseType
	 * @throws APIException
	 */
	public function EnterBoarding($enterBoardingReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($enterBoardingReq->EnterBoardingRequest);
		$ret = new EnterBoardingResponseType();
		$resp = $this->call('PayPalAPI', 'EnterBoarding', $enterBoardingReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: GetBoardingDetails
	 * @param GetBoardingDetailsReq $getBoardingDetailsReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\GetBoardingDetailsResponseType
	 * @throws APIException
	 */
	public function GetBoardingDetails($getBoardingDetailsReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($getBoardingDetailsReq->GetBoardingDetailsRequest);
		$ret = new GetBoardingDetailsResponseType();
		$resp = $this->call('PayPalAPI', 'GetBoardingDetails', $getBoardingDetailsReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: CreateMobilePayment
	 * @param CreateMobilePaymentReq $createMobilePaymentReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\CreateMobilePaymentResponseType
	 * @throws APIException
	 */
	public function CreateMobilePayment($createMobilePaymentReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($createMobilePaymentReq->CreateMobilePaymentRequest);
		$ret = new CreateMobilePaymentResponseType();
		$resp = $this->call('PayPalAPI', 'CreateMobilePayment', $createMobilePaymentReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: GetMobileStatus
	 * @param GetMobileStatusReq $getMobileStatusReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\GetMobileStatusResponseType
	 * @throws APIException
	 */
	public function GetMobileStatus($getMobileStatusReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($getMobileStatusReq->GetMobileStatusRequest);
		$ret = new GetMobileStatusResponseType();
		$resp = $this->call('PayPalAPI', 'GetMobileStatus', $getMobileStatusReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: SetMobileCheckout
	 * @param SetMobileCheckoutReq $setMobileCheckoutReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\SetMobileCheckoutResponseType
	 * @throws APIException
	 */
	public function SetMobileCheckout($setMobileCheckoutReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($setMobileCheckoutReq->SetMobileCheckoutRequest);
		$ret = new SetMobileCheckoutResponseType();
		$resp = $this->call('PayPalAPI', 'SetMobileCheckout', $setMobileCheckoutReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: DoMobileCheckoutPayment
	 * @param DoMobileCheckoutPaymentReq $doMobileCheckoutPaymentReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\DoMobileCheckoutPaymentResponseType
	 * @throws APIException
	 */
	public function DoMobileCheckoutPayment($doMobileCheckoutPaymentReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($doMobileCheckoutPaymentReq->DoMobileCheckoutPaymentRequest);
		$ret = new DoMobileCheckoutPaymentResponseType();
		$resp = $this->call('PayPalAPI', 'DoMobileCheckoutPayment', $doMobileCheckoutPaymentReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: GetBalance
	 * @param GetBalanceReq $getBalanceReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\GetBalanceResponseType
	 * @throws APIException
	 */
	public function GetBalance($getBalanceReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($getBalanceReq->GetBalanceRequest);
		$ret = new GetBalanceResponseType();
		$resp = $this->call('PayPalAPI', 'GetBalance', $getBalanceReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: GetPalDetails
	 * @param GetPalDetailsReq $getPalDetailsReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\GetPalDetailsResponseType
	 * @throws APIException
	 */
	public function GetPalDetails($getPalDetailsReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($getPalDetailsReq->GetPalDetailsRequest);
		$ret = new GetPalDetailsResponseType();
		$resp = $this->call('PayPalAPI', 'GetPalDetails', $getPalDetailsReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: DoExpressCheckoutPayment
	 * @param DoExpressCheckoutPaymentReq $doExpressCheckoutPaymentReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\DoExpressCheckoutPaymentResponseType
	 * @throws APIException
	 */
	public function DoExpressCheckoutPayment($doExpressCheckoutPaymentReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($doExpressCheckoutPaymentReq->DoExpressCheckoutPaymentRequest);
		$ret = new DoExpressCheckoutPaymentResponseType();
		$resp = $this->call('PayPalAPIAA', 'DoExpressCheckoutPayment', $doExpressCheckoutPaymentReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: DoUATPExpressCheckoutPayment
	 * @param DoUATPExpressCheckoutPaymentReq $doUATPExpressCheckoutPaymentReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\DoUATPExpressCheckoutPaymentResponseType
	 * @throws APIException
	 */
	public function DoUATPExpressCheckoutPayment($doUATPExpressCheckoutPaymentReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($doUATPExpressCheckoutPaymentReq->DoUATPExpressCheckoutPaymentRequest);
		$ret = new DoUATPExpressCheckoutPaymentResponseType();
		$resp = $this->call('PayPalAPIAA', 'DoUATPExpressCheckoutPayment', $doUATPExpressCheckoutPaymentReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: SetAuthFlowParam
	 * @param SetAuthFlowParamReq $setAuthFlowParamReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\SetAuthFlowParamResponseType
	 * @throws APIException
	 */
	public function SetAuthFlowParam($setAuthFlowParamReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($setAuthFlowParamReq->SetAuthFlowParamRequest);
		$ret = new SetAuthFlowParamResponseType();
		$resp = $this->call('PayPalAPIAA', 'SetAuthFlowParam', $setAuthFlowParamReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: GetAuthDetails
	 * @param GetAuthDetailsReq $getAuthDetailsReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\GetAuthDetailsResponseType
	 * @throws APIException
	 */
	public function GetAuthDetails($getAuthDetailsReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($getAuthDetailsReq->GetAuthDetailsRequest);
		$ret = new GetAuthDetailsResponseType();
		$resp = $this->call('PayPalAPIAA', 'GetAuthDetails', $getAuthDetailsReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: SetAccessPermissions
	 * @param SetAccessPermissionsReq $setAccessPermissionsReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\SetAccessPermissionsResponseType
	 * @throws APIException
	 */
	public function SetAccessPermissions($setAccessPermissionsReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($setAccessPermissionsReq->SetAccessPermissionsRequest);
		$ret = new SetAccessPermissionsResponseType();
		$resp = $this->call('PayPalAPIAA', 'SetAccessPermissions', $setAccessPermissionsReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: UpdateAccessPermissions
	 * @param UpdateAccessPermissionsReq $updateAccessPermissionsReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\UpdateAccessPermissionsResponseType
	 * @throws APIException
	 */
	public function UpdateAccessPermissions($updateAccessPermissionsReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($updateAccessPermissionsReq->UpdateAccessPermissionsRequest);
		$ret = new UpdateAccessPermissionsResponseType();
		$resp = $this->call('PayPalAPIAA', 'UpdateAccessPermissions', $updateAccessPermissionsReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: GetAccessPermissionDetails
	 * @param GetAccessPermissionDetailsReq $getAccessPermissionDetailsReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\GetAccessPermissionDetailsResponseType
	 * @throws APIException
	 */
	public function GetAccessPermissionDetails($getAccessPermissionDetailsReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($getAccessPermissionDetailsReq->GetAccessPermissionDetailsRequest);
		$ret = new GetAccessPermissionDetailsResponseType();
		$resp = $this->call('PayPalAPIAA', 'GetAccessPermissionDetails', $getAccessPermissionDetailsReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: GetIncentiveEvaluation
	 * @param GetIncentiveEvaluationReq $getIncentiveEvaluationReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\GetIncentiveEvaluationResponseType
	 * @throws APIException
	 */
	public function GetIncentiveEvaluation($getIncentiveEvaluationReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($getIncentiveEvaluationReq->GetIncentiveEvaluationRequest);
		$ret = new GetIncentiveEvaluationResponseType();
		$resp = $this->call('PayPalAPIAA', 'GetIncentiveEvaluation', $getIncentiveEvaluationReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: SetExpressCheckout
	 * @param SetExpressCheckoutReq $setExpressCheckoutReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\SetExpressCheckoutResponseType
	 * @throws APIException
	 */
	public function SetExpressCheckout($setExpressCheckoutReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($setExpressCheckoutReq->SetExpressCheckoutRequest);
		$ret = new SetExpressCheckoutResponseType();
		$resp = $this->call('PayPalAPIAA', 'SetExpressCheckout', $setExpressCheckoutReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: ExecuteCheckoutOperations
	 * @param ExecuteCheckoutOperationsReq $executeCheckoutOperationsReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\ExecuteCheckoutOperationsResponseType
	 * @throws APIException
	 */
	public function ExecuteCheckoutOperations($executeCheckoutOperationsReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($executeCheckoutOperationsReq->ExecuteCheckoutOperationsRequest);
		$ret = new ExecuteCheckoutOperationsResponseType();
		$resp = $this->call('PayPalAPIAA', 'ExecuteCheckoutOperations', $executeCheckoutOperationsReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: GetExpressCheckoutDetails
	 * @param GetExpressCheckoutDetailsReq $getExpressCheckoutDetailsReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\GetExpressCheckoutDetailsResponseType
	 * @throws APIException
	 */
	public function GetExpressCheckoutDetails($getExpressCheckoutDetailsReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($getExpressCheckoutDetailsReq->GetExpressCheckoutDetailsRequest);
		$ret = new GetExpressCheckoutDetailsResponseType();
		$resp = $this->call('PayPalAPIAA', 'GetExpressCheckoutDetails', $getExpressCheckoutDetailsReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: DoDirectPayment
	 * @param DoDirectPaymentReq $doDirectPaymentReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\DoDirectPaymentResponseType
	 * @throws APIException
	 */
	public function DoDirectPayment($doDirectPaymentReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($doDirectPaymentReq->DoDirectPaymentRequest);
		$ret = new DoDirectPaymentResponseType();
		$resp = $this->call('PayPalAPIAA', 'DoDirectPayment', $doDirectPaymentReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: ManagePendingTransactionStatus
	 * @param ManagePendingTransactionStatusReq $managePendingTransactionStatusReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\ManagePendingTransactionStatusResponseType
	 * @throws APIException
	 */
	public function ManagePendingTransactionStatus($managePendingTransactionStatusReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($managePendingTransactionStatusReq->ManagePendingTransactionStatusRequest);
		$ret = new ManagePendingTransactionStatusResponseType();
		$resp = $this->call('PayPalAPIAA', 'ManagePendingTransactionStatus', $managePendingTransactionStatusReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: DoCancel
	 * @param DoCancelReq $doCancelReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\DoCancelResponseType
	 * @throws APIException
	 */
	public function DoCancel($doCancelReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($doCancelReq->DoCancelRequest);
		$ret = new DoCancelResponseType();
		$resp = $this->call('PayPalAPIAA', 'DoCancel', $doCancelReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: DoCapture
	 * @param DoCaptureReq $doCaptureReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\DoCaptureResponseType
	 * @throws APIException
	 */
	public function DoCapture($doCaptureReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($doCaptureReq->DoCaptureRequest);
		$ret = new DoCaptureResponseType();
		$resp = $this->call('PayPalAPIAA', 'DoCapture', $doCaptureReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: DoReauthorization
	 * @param DoReauthorizationReq $doReauthorizationReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\DoReauthorizationResponseType
	 * @throws APIException
	 */
	public function DoReauthorization($doReauthorizationReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($doReauthorizationReq->DoReauthorizationRequest);
		$ret = new DoReauthorizationResponseType();
		$resp = $this->call('PayPalAPIAA', 'DoReauthorization', $doReauthorizationReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: DoVoid
	 * @param DoVoidReq $doVoidReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\DoVoidResponseType
	 * @throws APIException
	 */
	public function DoVoid($doVoidReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($doVoidReq->DoVoidRequest);
		$ret = new DoVoidResponseType();
		$resp = $this->call('PayPalAPIAA', 'DoVoid', $doVoidReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: DoAuthorization
	 * @param DoAuthorizationReq $doAuthorizationReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\DoAuthorizationResponseType
	 * @throws APIException
	 */
	public function DoAuthorization($doAuthorizationReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($doAuthorizationReq->DoAuthorizationRequest);
		$ret = new DoAuthorizationResponseType();
		$resp = $this->call('PayPalAPIAA', 'DoAuthorization', $doAuthorizationReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: UpdateAuthorization
	 * @param UpdateAuthorizationReq $updateAuthorizationReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\UpdateAuthorizationResponseType
	 * @throws APIException
	 */
	public function UpdateAuthorization($updateAuthorizationReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($updateAuthorizationReq->UpdateAuthorizationRequest);
		$ret = new UpdateAuthorizationResponseType();
		$resp = $this->call('PayPalAPIAA', 'UpdateAuthorization', $updateAuthorizationReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: SetCustomerBillingAgreement
	 * @param SetCustomerBillingAgreementReq $setCustomerBillingAgreementReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\SetCustomerBillingAgreementResponseType
	 * @throws APIException
	 */
	public function SetCustomerBillingAgreement($setCustomerBillingAgreementReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($setCustomerBillingAgreementReq->SetCustomerBillingAgreementRequest);
		$ret = new SetCustomerBillingAgreementResponseType();
		$resp = $this->call('PayPalAPIAA', 'SetCustomerBillingAgreement', $setCustomerBillingAgreementReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: GetBillingAgreementCustomerDetails
	 * @param GetBillingAgreementCustomerDetailsReq $getBillingAgreementCustomerDetailsReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\GetBillingAgreementCustomerDetailsResponseType
	 * @throws APIException
	 */
	public function GetBillingAgreementCustomerDetails($getBillingAgreementCustomerDetailsReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($getBillingAgreementCustomerDetailsReq->GetBillingAgreementCustomerDetailsRequest);
		$ret = new GetBillingAgreementCustomerDetailsResponseType();
		$resp = $this->call('PayPalAPIAA', 'GetBillingAgreementCustomerDetails', $getBillingAgreementCustomerDetailsReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: CreateBillingAgreement
	 * @param CreateBillingAgreementReq $createBillingAgreementReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\CreateBillingAgreementResponseType
	 * @throws APIException
	 */
	public function CreateBillingAgreement($createBillingAgreementReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($createBillingAgreementReq->CreateBillingAgreementRequest);
		$ret = new CreateBillingAgreementResponseType();
		$resp = $this->call('PayPalAPIAA', 'CreateBillingAgreement', $createBillingAgreementReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: DoReferenceTransaction
	 * @param DoReferenceTransactionReq $doReferenceTransactionReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\DoReferenceTransactionResponseType
	 * @throws APIException
	 */
	public function DoReferenceTransaction($doReferenceTransactionReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($doReferenceTransactionReq->DoReferenceTransactionRequest);
		$ret = new DoReferenceTransactionResponseType();
		$resp = $this->call('PayPalAPIAA', 'DoReferenceTransaction', $doReferenceTransactionReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: DoNonReferencedCredit
	 * @param DoNonReferencedCreditReq $doNonReferencedCreditReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\DoNonReferencedCreditResponseType
	 * @throws APIException
	 */
	public function DoNonReferencedCredit($doNonReferencedCreditReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($doNonReferencedCreditReq->DoNonReferencedCreditRequest);
		$ret = new DoNonReferencedCreditResponseType();
		$resp = $this->call('PayPalAPIAA', 'DoNonReferencedCredit', $doNonReferencedCreditReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: DoUATPAuthorization
	 * @param DoUATPAuthorizationReq $doUATPAuthorizationReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\DoUATPAuthorizationResponseType
	 * @throws APIException
	 */
	public function DoUATPAuthorization($doUATPAuthorizationReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($doUATPAuthorizationReq->DoUATPAuthorizationRequest);
		$ret = new DoUATPAuthorizationResponseType();
		$resp = $this->call('PayPalAPIAA', 'DoUATPAuthorization', $doUATPAuthorizationReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: CreateRecurringPaymentsProfile
	 * @param CreateRecurringPaymentsProfileReq $createRecurringPaymentsProfileReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\CreateRecurringPaymentsProfileResponseType
	 * @throws APIException
	 */
	public function CreateRecurringPaymentsProfile($createRecurringPaymentsProfileReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($createRecurringPaymentsProfileReq->CreateRecurringPaymentsProfileRequest);
		$ret = new CreateRecurringPaymentsProfileResponseType();
		$resp = $this->call('PayPalAPIAA', 'CreateRecurringPaymentsProfile', $createRecurringPaymentsProfileReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: GetRecurringPaymentsProfileDetails
	 * @param GetRecurringPaymentsProfileDetailsReq $getRecurringPaymentsProfileDetailsReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\GetRecurringPaymentsProfileDetailsResponseType
	 * @throws APIException
	 */
	public function GetRecurringPaymentsProfileDetails($getRecurringPaymentsProfileDetailsReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($getRecurringPaymentsProfileDetailsReq->GetRecurringPaymentsProfileDetailsRequest);
		$ret = new GetRecurringPaymentsProfileDetailsResponseType();
		$resp = $this->call('PayPalAPIAA', 'GetRecurringPaymentsProfileDetails', $getRecurringPaymentsProfileDetailsReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: ManageRecurringPaymentsProfileStatus
	 * @param ManageRecurringPaymentsProfileStatusReq $manageRecurringPaymentsProfileStatusReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\ManageRecurringPaymentsProfileStatusResponseType
	 * @throws APIException
	 */
	public function ManageRecurringPaymentsProfileStatus($manageRecurringPaymentsProfileStatusReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($manageRecurringPaymentsProfileStatusReq->ManageRecurringPaymentsProfileStatusRequest);
		$ret = new ManageRecurringPaymentsProfileStatusResponseType();
		$resp = $this->call('PayPalAPIAA', 'ManageRecurringPaymentsProfileStatus', $manageRecurringPaymentsProfileStatusReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: BillOutstandingAmount
	 * @param BillOutstandingAmountReq $billOutstandingAmountReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\BillOutstandingAmountResponseType
	 * @throws APIException
	 */
	public function BillOutstandingAmount($billOutstandingAmountReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($billOutstandingAmountReq->BillOutstandingAmountRequest);
		$ret = new BillOutstandingAmountResponseType();
		$resp = $this->call('PayPalAPIAA', 'BillOutstandingAmount', $billOutstandingAmountReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: UpdateRecurringPaymentsProfile
	 * @param UpdateRecurringPaymentsProfileReq $updateRecurringPaymentsProfileReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\UpdateRecurringPaymentsProfileResponseType
	 * @throws APIException
	 */
	public function UpdateRecurringPaymentsProfile($updateRecurringPaymentsProfileReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($updateRecurringPaymentsProfileReq->UpdateRecurringPaymentsProfileRequest);
		$ret = new UpdateRecurringPaymentsProfileResponseType();
		$resp = $this->call('PayPalAPIAA', 'UpdateRecurringPaymentsProfile', $updateRecurringPaymentsProfileReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: ReverseTransaction
	 * @param ReverseTransactionReq $reverseTransactionReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\ReverseTransactionResponseType
	 * @throws APIException
	 */
	public function ReverseTransaction($reverseTransactionReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($reverseTransactionReq->ReverseTransactionRequest);
		$ret = new ReverseTransactionResponseType();
		$resp = $this->call('PayPalAPIAA', 'ReverseTransaction', $reverseTransactionReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: ExternalRememberMeOptOut
	 * @param ExternalRememberMeOptOutReq $externalRememberMeOptOutReq
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 * @return PayPalAPI\ExternalRememberMeOptOutResponseType
	 * @throws APIException
	 */
	public function ExternalRememberMeOptOut($externalRememberMeOptOutReq, $apiCredential = NULL) {
		$apiContext = new PPApiContext($this->config);
		$handlers = array(
			new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
		);
		$this->setStandardParams($externalRememberMeOptOutReq->ExternalRememberMeOptOutRequest);
		$ret = new ExternalRememberMeOptOutResponseType();
		$resp = $this->call('PayPalAPIAA', 'ExternalRememberMeOptOut', $externalRememberMeOptOutReq, $apiContext, $handlers);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}

}
