<?php
class updatePayments
{
	public $out; 
	
	public function __construct()
	{
		require_once 'app/core/Config.php';
		if(!isset($_SESSION[Config::SESSION_PREFIX."username"]))
		{
			exit();
		}
	}
	
	public function index(){
		require_once 'app/core/Config.php';
		require_once 'app/functions/request.php';

		$this->out = array(
			"Error" => array(
				"Code"=>1, 
				"Text"=>"მოხდა შეცდომა !",
				"Details"=>"!"
			)
		);

		$id = functions\request::index("POST","id");
		$currency = functions\request::index("POST","currency");
		$amount_gel = functions\request::index("POST","amount_gel");
		$status = functions\request::index("POST","status");
		$lang = functions\request::index("POST","lang");

		if($id=="" || $currency=="" || $amount_gel=="" || $lang=="" || $status=="")
		{
			$this->out = array(
				"Error" => array(
					"Code"=>1, 
					"Text"=>"ყველა ველი სავალდებულოა !",
					"Details"=>"!"
				)
			);
		}else{
			$Database = new Database('payment', array(
				'method'=>'updatePay', 
				'currency_ex'=>$currency, 
				'amount_gel'=>$amount_gel, 
				'status'=>$status,
				'id'=>$id
			));
			
			$this->out = array(
				"Error" => array(
					"Code"=>0, 
					"Text"=>"",
					"Details"=>""
				),
				"Success"=>array(
					"Code"=>1, 
					"Text"=>"ოპერაცია შესრულდა წარმატებით !",
					"Details"=>""
				)
			);
			
		}

		return $this->out;
	}
}