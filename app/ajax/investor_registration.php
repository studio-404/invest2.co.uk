<?php 
class investor_registration
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

		$mobile = functions\request::index("POST","mobile");
		$password = functions\request::index("POST","password");
		$password_confirm = functions\request::index("POST","password_confirm");
		$code = functions\request::index("POST","code");

		if($mobile=="" || $password=="" || $password_confirm=="" || $code==""){
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
					"Token"=>"",
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
					"Token"=>"",
					"Details"=>""
				)
			);
		}else if(strlen($password)<=5){
			$this->out = array(
				"Error" => array(
					"Code"=>1, 
					"Text"=>"პაროლი მინიმუმ უნდა შეიცავდეს 6 სიმბოლოს !",
					"Details"=>"!"
				),
				"Success" => array(
					"Code"=>0,
					"Text"=>"",
					"Token"=>"",
					"Details"=>""
				)
			);
		}else if($password !== $password_confirm){
			$this->out = array(
				"Error" => array(
					"Code"=>1, 
					"Text"=>"პაროლები არ ემთხვევა ერთმანეთს !",
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
					"Token"=>"",
					"Details"=>""
				)
			);
		}else{
			
			$Database = new Database("user", array(
				"method"=>"registerTry",
				"mobile"=>$mobile
			));
			$getter = $Database->getter();
			if(isset($getter["id"])){
				$this->out = array(
					"Error" => array(
						"Code"=>1, 
						"Text"=>sprintf("მომხმარებელი ნომრით %s რეგისტრირებულია !", $mobile),
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
				$sms_code = functions\strings::random(4);
				$reg_code = functions\strings::random(8);

				$Database2 = new Database("user", array(
					"method"=>"insert",
					"mobile"=>$mobile,
					"password"=>md5($password),
					"sms_code"=>$sms_code,
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
						"Token"=>$reg_code,
						"Details"=>""
					)
				);
			}			
		}
		return $this->out;
	}
}