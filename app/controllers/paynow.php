<?php 
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Payer;
use PayPal\Api\Details;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Exception\PayPalConnectionException;

class Paynow extends Controller
{
	public $out;
	public $payAmount;

	public function __construct()
	{
		require_once 'app/functions/request.php';
		$this->out = array(
			"Error" => array(
				"Code"=>1, 
				"Text"=>"მოხდა შეცდომა !",
				"Details"=>"!"
			)
		);

		$this->payAmount = (int)functions\request::index("POST", "amount");
		$this->code = (int)functions\request::index("POST", "code");

		if(
			!isset($_SESSION[Config::SESSION_PREFIX."userdata"]) || 
			$this->payAmount<=0 || 
			$this->code!=$_SESSION["protect_x"]
		){
			exit;
		}
	}

	public function index($lang = "", $name = "")
	{
		$api = new ApiContext(
			new OAuthTokenCredential(
				Config::PAYPAL_CLIENT_SANDBOX,
				Config::PAYPAL_SECRET_SANDBOX
			)
		);

		$api->setConfig([
			'mode'=>'sandbox', //live
			'http.ConnectionTimeOut' => 30,
			'log.LogEnabled' => false,
			'log.FileName' => '',
			'log.LogLevel' => 'FINE',
			'validation.level' => 'log'
		]);

		$Payer = new Payer();
		$Details = new Details();
		$Amount = new Amount();
		$Transaction = new Transaction();
		$Payment = new Payment();
		$RedirectUrls = new RedirectUrls();

		$Payer->setPaymentMethod('paypal');

		$Details->setShipping('0.00')
		->setTax('0.00')
		->setSubtotal($this->payAmount);

		$Amount->setCurrency('USD')
		->setTotal($this->payAmount)
		->setDetails($Details);

		$Transaction->SetAmount($Amount)
		->setDescription('Membership');

		$Payment->setIntent('sale')
		->setPayer($Payer)
		->setTransactions([$Transaction]);

		$RedirectUrls->setReturnUrl('http://buu.ge/en/ok')
		->setCancelUrl('http://buu.ge/en/fail');

		$Payment->setRedirectUrls($RedirectUrls);


		try{
			$Payment->create($api);
			$hash = md5($Payment->getId());

			// insert hash and id into DB
			$Database = new Database("payment", array(
				"method"=>"add",
				"user_id"=>$_SESSION[Config::SESSION_PREFIX."userdata"]["id"],
				"amount"=>$this->payAmount,
				"pay_code"=>$hash
			));

		}catch(PayPalConnectionException $e){
			$this->out = array(
				"Error" => array(
					"Code"=>1, 
					"Text"=>"გადახდისას დაფიქსირდა შეცდომა",
					"Details"=>$e
				),
				"Success" => array(
					"Code"=>0,
					"Text"=>"ოპერაცია წარმატებით დასრულდა",
					"Details"=>""
				)
			);
			echo $e;
			exit;
		}

		$redirectUrl = "";
		foreach ($Payment->getLinks() as $link) {
			if($link->getRel() == "approval_url"){
				$redirectUrl = $link->getHref();
			}
		}

		header("Location: ".$redirectUrl);
	}
}
?>