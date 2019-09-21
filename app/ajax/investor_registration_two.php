<?php 
class investor_registration_two
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
		require_once 'app/core/Config.php';
		require_once 'app/functions/request.php';
		require_once 'app/functions/strings.php';

		$reg_code = functions\request::index("POST","token");
		$sms_code = functions\request::index("POST","sms_code");

		if($sms_code=="" || $reg_code==""){
			$this->out = array(
				"Error" => array(
					"Code"=>1, 
					"Text"=>"ყველა ველი სავალდებულოა !",
					"Details"=>"!"
				),
				"Success" => array(
					"Code"=>0,
					"Text"=>"",
					"Token"=>"",
					"Details"=>""
				)
			);
		}else{
			$Database = new Database("user", array(
				"method"=>"registerTryTwo",
				"reg_code"=>$reg_code,
				"sms_code"=>$sms_code
			));
			$getter = $Database->getter();
			if(!isset($getter["id"])){
				$this->out = array(
					"Error" => array(
						"Code"=>1, 
						"Text"=>sprintf("მოხდა შეცდომა, გთხოვთ გადაამოწმოთ კოდი !"),
						"Details"=>"!"
					),
					"Success" => array(
						"Code"=>0,
						"Text"=>"",
						"Token"=>"",
						"Details"=>""
					)
				);
			}else{
				$new_reg_code = functions\strings::random(8);

				$Database2 = new Database("user", array(
					"method"=>"changeRegCode",
					"new_reg_code"=>$new_reg_code,
					"reg_code"=>$reg_code
				));

				$this->out = array(
					"Error" => array(
						"Code"=>0, 
						"Text"=>"",
						"Details"=>""
					),
					"Success" => array(
						"Code"=>1,
						"Text"=>"ოპერაცია შესრულდა წარმატებით !",
						"Token"=>$new_reg_code,
						"Details"=>""
					)
				);
			}			
		}
		return $this->out;
	}
}