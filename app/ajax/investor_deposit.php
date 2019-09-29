<?php 
class investor_deposit
{
	public $out; 

	public function __construct()
	{
		$this->out = array(
			"Error" => array(
				"Code"=>1, 
				"Text"=>"მოხდა შეცდომა !",
				"Details"=>"!"
			)
		);
	}
	
	public function index()
	{
		if(!isset($_SESSION[Config::SESSION_PREFIX."userdata"]))
		{
			return $this->out;
		}

		require_once 'app/core/Config.php';
		require_once 'app/functions/request.php';
		require_once 'app/functions/strings.php';

		$amount = functions\request::index("POST","amount_1");
		$code = functions\request::index("POST","code");

		if($amount=="" || $code==""){
			$this->out = array(
				"Error" => array(
					"Code"=>1, 
					"Text"=>"ყველა ველი სავალდებულოა !",
					"Details"=>"!"
				),
				"Success" => array(
					"Code"=>0,
					"Text"=>"",
					"Details"=>""
				)
			);
		}else if(!preg_match("/^[0-9]+$/", $amount) || $amount<=0){
			$this->out = array(
				"Error" => array(
					"Code"=>1, 
					"Text"=>"თანხის ველი შეიცავს არალეგალურ სიმბოლოებს !",
					"Details"=>"!"
				),
				"Success" => array(
					"Code"=>0,
					"Text"=>"",
					"Token"=>"",
					"Details"=>""
				)
			);
		}else if(!isset($_SESSION["protect_x"]) || $code!=$_SESSION["protect_x"]){
			$this->out = array(
				"Error" => array(
					"Code"=>1, 
					"Text"=>"გთხოვთ გადაამოწმოთ დამცავი კოდი !",
					"Details"=>"!"
				),
				"Success" => array(
					"Code"=>0,
					"Text"=>"",
					"Details"=>""
				)
			);
		}else{
			$pay_code = functions\strings::random(16);

			$Database = new Database("payment", array(
				"method"=>"add",
				"user_id"=>$_SESSION[Config::SESSION_PREFIX."userdata"]["id"],
				"amount"=>$amount,
				"pay_code"=>$pay_code
			));

			$this->out = array(
				"Error" => array(
					"Code"=>0, 
					"Text"=>"",
					"Details"=>""
				),
				"Success" => array(
					"Code"=>1,
					"Text"=>"ბალანსი წარმატებით შეივსო !",
					"payCode"=>$pay_code,
					"Details"=>""
				)
			);
		}
		return $this->out;
	}
}