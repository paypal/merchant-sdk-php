<?php

require_once('PPBaseService.php');
require_once('PayPalAPIInterfaceService.php');
require_once('PPUtils.php');
/**
 * PayPalAPIInterfaceService wrapper class
 * Auto generated code
 */
class PayPalAPIInterfaceServiceService extends PPBaseService {
private static $SERVICE_VERSION='86.0';
	public function __construct() {
		parent::__construct('PayPalAPIInterfaceService');
	}

private function setStandardParams($request) {
	if ($request->getVersion() == null) {
	$request->setVersion($SERVICE_VERSION);
}
}
	/**
	 * Service Call: RefundTransaction
	 * @param RefundTransactionReq $refundTransactionReq
	 * @return RefundTransactionResponseType
	 * @throws APIException
	 */
	public function RefundTransaction($refundTransactionReq, $apiUsername=null) {
	//	$this->setStandardParams($RefundTransaction->getRefundTransactionRequest());
		$ret = new RefundTransactionResponseType();
		$resp = $this->call("RefundTransaction", $refundTransactionReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: InitiateRecoup
	 * @param InitiateRecoupReq $initiateRecoupReq
	 * @return InitiateRecoupResponseType
	 * @throws APIException
	 */
	public function InitiateRecoup($initiateRecoupReq, $apiUsername=null) {
	//	$this->setStandardParams($InitiateRecoup->getInitiateRecoupRequest());
		$ret = new InitiateRecoupResponseType();
		$resp = $this->call("InitiateRecoup", $initiateRecoupReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: CompleteRecoup
	 * @param CompleteRecoupReq $completeRecoupReq
	 * @return CompleteRecoupResponseType
	 * @throws APIException
	 */
	public function CompleteRecoup($completeRecoupReq, $apiUsername=null) {
	//	$this->setStandardParams($CompleteRecoup->getCompleteRecoupRequest());
		$ret = new CompleteRecoupResponseType();
		$resp = $this->call("CompleteRecoup", $completeRecoupReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: CancelRecoup
	 * @param CancelRecoupReq $cancelRecoupReq
	 * @return CancelRecoupResponseType
	 * @throws APIException
	 */
	public function CancelRecoup($cancelRecoupReq, $apiUsername=null) {
		//$this->setStandardParams($CancelRecoup->getCancelRecoupRequest());
		$ret = new CancelRecoupResponseType();
		$resp = $this->call("CancelRecoup", $cancelRecoupReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: GetTransactionDetails
	 * @param GetTransactionDetailsReq $getTransactionDetailsReq
	 * @return GetTransactionDetailsResponseType
	 * @throws APIException
	 */
	public function GetTransactionDetails($getTransactionDetailsReq, $apiUsername=null) {
	//	$this->setStandardParams($GetTransactionDetails->getGetTransactionDetailsRequest());
		$ret = new GetTransactionDetailsResponseType();
		$resp = $this->call("GetTransactionDetails", $getTransactionDetailsReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: BillUser
	 * @param BillUserReq $billUserReq
	 * @return BillUserResponseType
	 * @throws APIException
	 */
	public function BillUser($billUserReq, $apiUsername=null) {
	//	$this->setStandardParams($BillUser->getBillUserRequest());
		$ret = new BillUserResponseType();
		$resp = $this->call("BillUser", $billUserReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: TransactionSearch
	 * @param TransactionSearchReq $transactionSearchReq
	 * @return TransactionSearchResponseType
	 * @throws APIException
	 */
	public function TransactionSearch($transactionSearchReq, $apiUsername=null) {
	//	$this->setStandardParams($TransactionSearch->getTransactionSearchRequest());
		$ret = new TransactionSearchResponseType();
		$resp = $this->call("TransactionSearch", $transactionSearchReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: MassPay
	 * @param MassPayReq $massPayReq
	 * @return MassPayResponseType
	 * @throws APIException
	 */
	public function MassPay($massPayReq, $apiUsername=null) {
	//	$this->setStandardParams($MassPay->getMassPayRequest());
		$ret = new MassPayResponseType();
		$resp = $this->call("MassPay", $massPayReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: BillAgreementUpdate
	 * @param BillAgreementUpdateReq $billAgreementUpdateReq
	 * @return BAUpdateResponseType
	 * @throws APIException
	 */
	public function BillAgreementUpdate($billAgreementUpdateReq, $apiUsername=null) {
	//	$this->setStandardParams($BillAgreementUpdate->getBAUpdateRequest());
		$ret = new BAUpdateResponseType();
		$resp = $this->call("BillAgreementUpdate", $billAgreementUpdateReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: AddressVerify
	 * @param AddressVerifyReq $addressVerifyReq
	 * @return AddressVerifyResponseType
	 * @throws APIException
	 */
	public function AddressVerify($addressVerifyReq, $apiUsername=null) {
	//	$this->setStandardParams($AddressVerify->getAddressVerifyRequest());
		$ret = new AddressVerifyResponseType();
		$resp = $this->call("AddressVerify", $addressVerifyReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: EnterBoarding
	 * @param EnterBoardingReq $enterBoardingReq
	 * @return EnterBoardingResponseType
	 * @throws APIException
	 */
	public function EnterBoarding($enterBoardingReq, $apiUsername=null) {
	//	$this->setStandardParams($EnterBoarding->getEnterBoardingRequest());
		$ret = new EnterBoardingResponseType();
		$resp = $this->call("EnterBoarding", $enterBoardingReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: GetBoardingDetails
	 * @param GetBoardingDetailsReq $getBoardingDetailsReq
	 * @return GetBoardingDetailsResponseType
	 * @throws APIException
	 */
	public function GetBoardingDetails($getBoardingDetailsReq, $apiUsername=null) {
	//	$this->setStandardParams($GetBoardingDetails->getGetBoardingDetailsRequest());
		$ret = new GetBoardingDetailsResponseType();
		$resp = $this->call("GetBoardingDetails", $getBoardingDetailsReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: CreateMobilePayment
	 * @param CreateMobilePaymentReq $createMobilePaymentReq
	 * @return CreateMobilePaymentResponseType
	 * @throws APIException
	 */
	public function CreateMobilePayment($createMobilePaymentReq, $apiUsername=null) {
	//	$this->setStandardParams($CreateMobilePayment->getCreateMobilePaymentRequest());
		$ret = new CreateMobilePaymentResponseType();
		$resp = $this->call("CreateMobilePayment", $createMobilePaymentReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: GetMobileStatus
	 * @param GetMobileStatusReq $getMobileStatusReq
	 * @return GetMobileStatusResponseType
	 * @throws APIException
	 */
	public function GetMobileStatus($getMobileStatusReq, $apiUsername=null) {
	//	$this->setStandardParams($GetMobileStatus->getGetMobileStatusRequest());
		$ret = new GetMobileStatusResponseType();
		$resp = $this->call("GetMobileStatus", $getMobileStatusReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: SetMobileCheckout
	 * @param SetMobileCheckoutReq $setMobileCheckoutReq
	 * @return SetMobileCheckoutResponseType
	 * @throws APIException
	 */
	public function SetMobileCheckout($setMobileCheckoutReq, $apiUsername=null) {
	//	$this->setStandardParams($SetMobileCheckout->getSetMobileCheckoutRequest());
		$ret = new SetMobileCheckoutResponseType();
		$resp = $this->call("SetMobileCheckout", $setMobileCheckoutReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: DoMobileCheckoutPayment
	 * @param DoMobileCheckoutPaymentReq $doMobileCheckoutPaymentReq
	 * @return DoMobileCheckoutPaymentResponseType
	 * @throws APIException
	 */
	public function DoMobileCheckoutPayment($doMobileCheckoutPaymentReq, $apiUsername=null) {
	//	$this->setStandardParams($DoMobileCheckoutPayment->getDoMobileCheckoutPaymentRequest());
		$ret = new DoMobileCheckoutPaymentResponseType();
		$resp = $this->call("DoMobileCheckoutPayment", $doMobileCheckoutPaymentReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: GetBalance
	 * @param GetBalanceReq $getBalanceReq
	 * @return GetBalanceResponseType
	 * @throws APIException
	 */
	public function GetBalance($getBalanceReq, $apiUsername=null) {
	//	$this->setStandardParams($GetBalance->getGetBalanceRequest());
		$ret = new GetBalanceResponseType();
		$resp = $this->call("GetBalance", $getBalanceReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: GetPalDetails
	 * @param GetPalDetailsReq $getPalDetailsReq
	 * @return GetPalDetailsResponseType
	 * @throws APIException
	 */
	public function GetPalDetails($getPalDetailsReq, $apiUsername=null) {
	//	$this->setStandardParams($GetPalDetails->getGetPalDetailsRequest());
		$ret = new GetPalDetailsResponseType();
		$resp = $this->call("GetPalDetails", $getPalDetailsReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: DoExpressCheckoutPayment
	 * @param DoExpressCheckoutPaymentReq $doExpressCheckoutPaymentReq
	 * @return DoExpressCheckoutPaymentResponseType
	 * @throws APIException
	 */
	public function DoExpressCheckoutPayment($doExpressCheckoutPaymentReq, $apiUsername=null) {
	//	$this->setStandardParams($DoExpressCheckoutPayment->getDoExpressCheckoutPaymentRequest());
		$ret = new DoExpressCheckoutPaymentResponseType();
		$resp = $this->call("DoExpressCheckoutPayment", $doExpressCheckoutPaymentReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: DoUATPExpressCheckoutPayment
	 * @param DoUATPExpressCheckoutPaymentReq $doUATPExpressCheckoutPaymentReq
	 * @return DoUATPExpressCheckoutPaymentResponseType
	 * @throws APIException
	 */
	public function DoUATPExpressCheckoutPayment($doUATPExpressCheckoutPaymentReq, $apiUsername=null) {
	//	$this->setStandardParams($DoUATPExpressCheckoutPayment->getDoUATPExpressCheckoutPaymentRequest());
		$ret = new DoUATPExpressCheckoutPaymentResponseType();
		$resp = $this->call("DoUATPExpressCheckoutPayment", $doUATPExpressCheckoutPaymentReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: SetAuthFlowParam
	 * @param SetAuthFlowParamReq $setAuthFlowParamReq
	 * @return SetAuthFlowParamResponseType
	 * @throws APIException
	 */
	public function SetAuthFlowParam($setAuthFlowParamReq, $apiUsername=null) {
	//	$this->setStandardParams($SetAuthFlowParam->getSetAuthFlowParamRequest());
		$ret = new SetAuthFlowParamResponseType();
		$resp = $this->call("SetAuthFlowParam", $setAuthFlowParamReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: GetAuthDetails
	 * @param GetAuthDetailsReq $getAuthDetailsReq
	 * @return GetAuthDetailsResponseType
	 * @throws APIException
	 */
	public function GetAuthDetails($getAuthDetailsReq, $apiUsername=null) {
	//	$this->setStandardParams($GetAuthDetails->getGetAuthDetailsRequest());
		$ret = new GetAuthDetailsResponseType();
		$resp = $this->call("GetAuthDetails", $getAuthDetailsReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: SetAccessPermissions
	 * @param SetAccessPermissionsReq $setAccessPermissionsReq
	 * @return SetAccessPermissionsResponseType
	 * @throws APIException
	 */
	public function SetAccessPermissions($setAccessPermissionsReq, $apiUsername=null) {
	//	$this->setStandardParams($SetAccessPermissions->getSetAccessPermissionsRequest());
		$ret = new SetAccessPermissionsResponseType();
		$resp = $this->call("SetAccessPermissions", $setAccessPermissionsReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: UpdateAccessPermissions
	 * @param UpdateAccessPermissionsReq $updateAccessPermissionsReq
	 * @return UpdateAccessPermissionsResponseType
	 * @throws APIException
	 */
	public function UpdateAccessPermissions($updateAccessPermissionsReq, $apiUsername=null) {
	//	$this->setStandardParams($UpdateAccessPermissions->getUpdateAccessPermissionsRequest());
		$ret = new UpdateAccessPermissionsResponseType();
		$resp = $this->call("UpdateAccessPermissions", $updateAccessPermissionsReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: GetAccessPermissionDetails
	 * @param GetAccessPermissionDetailsReq $getAccessPermissionDetailsReq
	 * @return GetAccessPermissionDetailsResponseType
	 * @throws APIException
	 */
	public function GetAccessPermissionDetails($getAccessPermissionDetailsReq, $apiUsername=null) {
	//	$this->setStandardParams($GetAccessPermissionDetails->getGetAccessPermissionDetailsRequest());
		$ret = new GetAccessPermissionDetailsResponseType();
		$resp = $this->call("GetAccessPermissionDetails", $getAccessPermissionDetailsReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: GetIncentiveEvaluation
	 * @param GetIncentiveEvaluationReq $getIncentiveEvaluationReq
	 * @return GetIncentiveEvaluationResponseType
	 * @throws APIException
	 */
	public function GetIncentiveEvaluation($getIncentiveEvaluationReq, $apiUsername=null) {
	//	$this->setStandardParams($GetIncentiveEvaluation->getGetIncentiveEvaluationRequest());
		$ret = new GetIncentiveEvaluationResponseType();
		$resp = $this->call("GetIncentiveEvaluation", $getIncentiveEvaluationReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: SetExpressCheckout
	 * @param SetExpressCheckoutReq $setExpressCheckoutReq
	 * @return SetExpressCheckoutResponseType
	 * @throws APIException
	 */
	public function SetExpressCheckout($setExpressCheckoutReq, $apiUsername=null) {
	//	$this->setStandardParams($setExpressCheckoutReq->getSetExpressCheckoutRequest());
		$ret = new SetExpressCheckoutResponseType();
		$resp = $this->call("SetExpressCheckout", $setExpressCheckoutReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: ExecuteCheckoutOperations
	 * @param ExecuteCheckoutOperationsReq $executeCheckoutOperationsReq
	 * @return ExecuteCheckoutOperationsResponseType
	 * @throws APIException
	 */
	public function ExecuteCheckoutOperations($executeCheckoutOperationsReq, $apiUsername=null) {
	//	$this->setStandardParams($ExecuteCheckoutOperations->getExecuteCheckoutOperationsRequest());
		$ret = new ExecuteCheckoutOperationsResponseType();
		$resp = $this->call("ExecuteCheckoutOperations", $executeCheckoutOperationsReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: GetExpressCheckoutDetails
	 * @param GetExpressCheckoutDetailsReq $getExpressCheckoutDetailsReq
	 * @return GetExpressCheckoutDetailsResponseType
	 * @throws APIException
	 */
	public function GetExpressCheckoutDetails($getExpressCheckoutDetailsReq, $apiUsername=null) {
	//	$this->setStandardParams($GetExpressCheckoutDetails->getGetExpressCheckoutDetailsRequest());
		$ret = new GetExpressCheckoutDetailsResponseType();
		$resp = $this->call("GetExpressCheckoutDetails", $getExpressCheckoutDetailsReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: DoDirectPayment
	 * @param DoDirectPaymentReq $doDirectPaymentReq
	 * @return DoDirectPaymentResponseType
	 * @throws APIException
	 */
	public function DoDirectPayment($doDirectPaymentReq, $apiUsername=null) {
	//	$this->setStandardParams($DoDirectPayment->getDoDirectPaymentRequest());
		$ret = new DoDirectPaymentResponseType();
		$resp = $this->call("DoDirectPayment", $doDirectPaymentReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: ManagePendingTransactionStatus
	 * @param ManagePendingTransactionStatusReq $managePendingTransactionStatusReq
	 * @return ManagePendingTransactionStatusResponseType
	 * @throws APIException
	 */
	public function ManagePendingTransactionStatus($managePendingTransactionStatusReq, $apiUsername=null) {
	//	$this->setStandardParams($ManagePendingTransactionStatus->getManagePendingTransactionStatusRequest());
		$ret = new ManagePendingTransactionStatusResponseType();
		$resp = $this->call("ManagePendingTransactionStatus", $managePendingTransactionStatusReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: DoCancel
	 * @param DoCancelReq $doCancelReq
	 * @return DoCancelResponseType
	 * @throws APIException
	 */
	public function DoCancel($doCancelReq, $apiUsername=null) {
	//	$this->setStandardParams($DoCancel->getDoCancelRequest());
		$ret = new DoCancelResponseType();
		$resp = $this->call("DoCancel", $doCancelReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: DoCapture
	 * @param DoCaptureReq $doCaptureReq
	 * @return DoCaptureResponseType
	 * @throws APIException
	 */
	public function DoCapture($doCaptureReq, $apiUsername=null) {
	//	$this->setStandardParams($DoCapture->getDoCaptureRequest());
		$ret = new DoCaptureResponseType();
		$resp = $this->call("DoCapture", $doCaptureReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: DoReauthorization
	 * @param DoReauthorizationReq $doReauthorizationReq
	 * @return DoReauthorizationResponseType
	 * @throws APIException
	 */
	public function DoReauthorization($doReauthorizationReq, $apiUsername=null) {
	//	$this->setStandardParams($DoReauthorization->getDoReauthorizationRequest());
		$ret = new DoReauthorizationResponseType();
		$resp = $this->call("DoReauthorization", $doReauthorizationReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: DoVoid
	 * @param DoVoidReq $doVoidReq
	 * @return DoVoidResponseType
	 * @throws APIException
	 */
	public function DoVoid($doVoidReq, $apiUsername=null) {
	//	$this->setStandardParams($DoVoid->getDoVoidRequest());
		$ret = new DoVoidResponseType();
		$resp = $this->call("DoVoid", $doVoidReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: DoAuthorization
	 * @param DoAuthorizationReq $doAuthorizationReq
	 * @return DoAuthorizationResponseType
	 * @throws APIException
	 */
	public function DoAuthorization($doAuthorizationReq, $apiUsername=null) {
	//	$this->setStandardParams($DoAuthorization->getDoAuthorizationRequest());
		$ret = new DoAuthorizationResponseType();
		$resp = $this->call("DoAuthorization", $doAuthorizationReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: SetCustomerBillingAgreement
	 * @param SetCustomerBillingAgreementReq $setCustomerBillingAgreementReq
	 * @return SetCustomerBillingAgreementResponseType
	 * @throws APIException
	 */
	public function SetCustomerBillingAgreement($setCustomerBillingAgreementReq, $apiUsername=null) {
	//	$this->setStandardParams($SetCustomerBillingAgreement->getSetCustomerBillingAgreementRequest());
		$ret = new SetCustomerBillingAgreementResponseType();
		$resp = $this->call("SetCustomerBillingAgreement", $setCustomerBillingAgreementReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: GetBillingAgreementCustomerDetails
	 * @param GetBillingAgreementCustomerDetailsReq $getBillingAgreementCustomerDetailsReq
	 * @return GetBillingAgreementCustomerDetailsResponseType
	 * @throws APIException
	 */
	public function GetBillingAgreementCustomerDetails($getBillingAgreementCustomerDetailsReq, $apiUsername=null) {
	//	$this->setStandardParams($GetBillingAgreementCustomerDetails->getGetBillingAgreementCustomerDetailsRequest());
		$ret = new GetBillingAgreementCustomerDetailsResponseType();
		$resp = $this->call("GetBillingAgreementCustomerDetails", $getBillingAgreementCustomerDetailsReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: CreateBillingAgreement
	 * @param CreateBillingAgreementReq $createBillingAgreementReq
	 * @return CreateBillingAgreementResponseType
	 * @throws APIException
	 */
	public function CreateBillingAgreement($createBillingAgreementReq, $apiUsername=null) {
	//	$this->setStandardParams($CreateBillingAgreement->getCreateBillingAgreementRequest());
		$ret = new CreateBillingAgreementResponseType();
		$resp = $this->call("CreateBillingAgreement", $createBillingAgreementReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: DoReferenceTransaction
	 * @param DoReferenceTransactionReq $doReferenceTransactionReq
	 * @return DoReferenceTransactionResponseType
	 * @throws APIException
	 */
	public function DoReferenceTransaction($doReferenceTransactionReq, $apiUsername=null) {
	//	$this->setStandardParams($DoReferenceTransaction->getDoReferenceTransactionRequest());
		$ret = new DoReferenceTransactionResponseType();
		$resp = $this->call("DoReferenceTransaction", $doReferenceTransactionReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: DoNonReferencedCredit
	 * @param DoNonReferencedCreditReq $doNonReferencedCreditReq
	 * @return DoNonReferencedCreditResponseType
	 * @throws APIException
	 */
	public function DoNonReferencedCredit($doNonReferencedCreditReq, $apiUsername=null) {
	//	$this->setStandardParams($DoNonReferencedCredit->getDoNonReferencedCreditRequest());
		$ret = new DoNonReferencedCreditResponseType();
		$resp = $this->call("DoNonReferencedCredit", $doNonReferencedCreditReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: DoUATPAuthorization
	 * @param DoUATPAuthorizationReq $doUATPAuthorizationReq
	 * @return DoUATPAuthorizationResponseType
	 * @throws APIException
	 */
	public function DoUATPAuthorization($doUATPAuthorizationReq, $apiUsername=null) {
	//	$this->setStandardParams($DoUATPAuthorization->getDoUATPAuthorizationRequest());
		$ret = new DoUATPAuthorizationResponseType();
		$resp = $this->call("DoUATPAuthorization", $doUATPAuthorizationReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: CreateRecurringPaymentsProfile
	 * @param CreateRecurringPaymentsProfileReq $createRecurringPaymentsProfileReq
	 * @return CreateRecurringPaymentsProfileResponseType
	 * @throws APIException
	 */
	public function CreateRecurringPaymentsProfile($createRecurringPaymentsProfileReq, $apiUsername=null) {
	//	$this->setStandardParams($CreateRecurringPaymentsProfile->getCreateRecurringPaymentsProfileRequest());
		$ret = new CreateRecurringPaymentsProfileResponseType();
		$resp = $this->call("CreateRecurringPaymentsProfile", $createRecurringPaymentsProfileReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: GetRecurringPaymentsProfileDetails
	 * @param GetRecurringPaymentsProfileDetailsReq $getRecurringPaymentsProfileDetailsReq
	 * @return GetRecurringPaymentsProfileDetailsResponseType
	 * @throws APIException
	 */
	public function GetRecurringPaymentsProfileDetails($getRecurringPaymentsProfileDetailsReq, $apiUsername=null) {
	//	$this->setStandardParams($GetRecurringPaymentsProfileDetails->getGetRecurringPaymentsProfileDetailsRequest());
		$ret = new GetRecurringPaymentsProfileDetailsResponseType();
		$resp = $this->call("GetRecurringPaymentsProfileDetails", $getRecurringPaymentsProfileDetailsReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: ManageRecurringPaymentsProfileStatus
	 * @param ManageRecurringPaymentsProfileStatusReq $manageRecurringPaymentsProfileStatusReq
	 * @return ManageRecurringPaymentsProfileStatusResponseType
	 * @throws APIException
	 */
	public function ManageRecurringPaymentsProfileStatus($manageRecurringPaymentsProfileStatusReq, $apiUsername=null) {
	//	$this->setStandardParams($ManageRecurringPaymentsProfileStatus->getManageRecurringPaymentsProfileStatusRequest());
		$ret = new ManageRecurringPaymentsProfileStatusResponseType();
		$resp = $this->call("ManageRecurringPaymentsProfileStatus", $manageRecurringPaymentsProfileStatusReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: BillOutstandingAmount
	 * @param BillOutstandingAmountReq $billOutstandingAmountReq
	 * @return BillOutstandingAmountResponseType
	 * @throws APIException
	 */
	public function BillOutstandingAmount($billOutstandingAmountReq, $apiUsername=null) {
	//	$this->setStandardParams($BillOutstandingAmount->getBillOutstandingAmountRequest());
		$ret = new BillOutstandingAmountResponseType();
		$resp = $this->call("BillOutstandingAmount", $billOutstandingAmountReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: UpdateRecurringPaymentsProfile
	 * @param UpdateRecurringPaymentsProfileReq $updateRecurringPaymentsProfileReq
	 * @return UpdateRecurringPaymentsProfileResponseType
	 * @throws APIException
	 */
	public function UpdateRecurringPaymentsProfile($updateRecurringPaymentsProfileReq, $apiUsername=null) {
	//	$this->setStandardParams($UpdateRecurringPaymentsProfile->getUpdateRecurringPaymentsProfileRequest());
		$ret = new UpdateRecurringPaymentsProfileResponseType();
		$resp = $this->call("UpdateRecurringPaymentsProfile", $updateRecurringPaymentsProfileReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: ReverseTransaction
	 * @param ReverseTransactionReq $reverseTransactionReq
	 * @return ReverseTransactionResponseType
	 * @throws APIException
	 */
	public function ReverseTransaction($reverseTransactionReq, $apiUsername=null) {
	//	$this->setStandardParams($ReverseTransaction->getReverseTransactionRequest());
		$ret = new ReverseTransactionResponseType();
		$resp = $this->call("ReverseTransaction", $reverseTransactionReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: ExternalRememberMeOptOut
	 * @param ExternalRememberMeOptOutReq $externalRememberMeOptOutReq
	 * @return ExternalRememberMeOptOutResponseType
	 * @throws APIException
	 */
	public function ExternalRememberMeOptOut($externalRememberMeOptOutReq, $apiUsername=null) {
	//	$this->setStandardParams($ExternalRememberMeOptOut->getExternalRememberMeOptOutRequest());
		$ret = new ExternalRememberMeOptOutResponseType();
		$resp = $this->call("ExternalRememberMeOptOut", $externalRememberMeOptOutReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


}

?>