<?php 
class investor_login
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

		$mobile = functions\request::index("POST","mobile");
		$password = functions\request::index("POST","password");
		$code = functions\request::index("POST","code");

		if($mobile=="" || $password=="" || $code==""){
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
		}else if(!preg_match("/^5[\d+]{8}$/", $mobile)){
			$this->out = array(
				"Error" => array(
					"Code"=>1, 
					"Text"=>"მობილურის ნომრის ფორმატი არასწორია !",
					"Details"=>"!"
				),
				"Success" => array(
					"Code"=>0,
					"Text"=>"",
					"Details"=>""
				)
			);
		}else if(!preg_match("/^[a-zA-Z0-9!@#$]+$/", $password)){
			$this->out = array(
				"Error" => array(
					"Code"=>1, 
					"Text"=>"პაროლი შეიცავს დაუშვებელ სიმბოლოებს !<br>დაშვებული სიმბოლოები: a-z A-Z 0-9 ! @ # $",
					"Details"=>"!"
				),
				"Success" => array(
					"Code"=>0,
					"Text"=>"",
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
			$logintry = new Database("user", array(
				"method"=>"logintry",
				"mobile"=>$mobile, 
				"password"=>md5($password) 
			));

			$fetch = $logintry->getter();

			if($fetch){
				$_SESSION[Config::SESSION_PREFIX."userdata"] = $fetch;
				$this->out = array(
					"Error" => array(
						"Code"=>0, 
						"Text"=>"",
						"Details"=>""
					),
					"Success" => array(
						"Code"=>1,
						"Text"=>"ოპერაცია შესრულდა წარმატებით !",
						"Details"=>""
					)
				);
			}else{
				$this->out = array(
					"Error" => array(
						"Code"=>1, 
						"Text"=>"მომხმარებელი ვერ მოიძებნა !",
						"Details"=>"!"
					),
					"Success" => array(
						"Code"=>0,
						"Text"=>$fetch,
						"Details"=>""
					)
				);
			}
		}
		return $this->out;
	}
}