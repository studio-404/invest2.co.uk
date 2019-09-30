<?php 
class investor_deposit2
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

		$userAmount = functions\request::index("POST","amount");
		$code = functions\request::index("POST","code");

		if($userAmount=="" || $code==""){
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
		}else if(!preg_match("/^[0-9]+$/", $userAmount) || $userAmount<=0){
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
			$this->out = array(
				"Error" => array(
					"Code"=>0, 
					"Text"=>"",
					"Details"=>""
				),
				"Success" => array(
					"Code"=>1,
					"Text"=>"ოპერაცია წარმატებით დასრულდა",
					"Details"=>""
				)
			);

			
		}
		return $this->out;
	}
}