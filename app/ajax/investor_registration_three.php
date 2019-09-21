<?php 
class investor_registration_three
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

		$personalnumber = functions\request::index("POST","personalnumber");
		$firstname = functions\request::index("POST","firstname");
		$lastname = functions\request::index("POST","lastname");
		$dob = functions\request::index("POST","dob");
		$email = functions\request::index("POST","email");
		$address = functions\request::index("POST","address");
		$token = functions\request::index("POST","token");

		if($personalnumber=="" || $firstname=="" || $lastname=="" || $dob=="" || $email=="" || $token==""){
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
		}else if(strlen($personalnumber)!=11){
			$this->out = array(
				"Error" => array(
					"Code"=>1, 
					"Text"=>"პირადი ნომრის ველი უნდა შედგებოდეს 11 ციფრისგან !",
					"Details"=>"!"
				),
				"Success" => array(
					"Code"=>0,
					"Text"=>"",
					"Token"=>"",
					"Details"=>""
				)
			);
		}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$this->out = array(
				"Error" => array(
					"Code"=>1, 
					"Text"=>"ელ-ფოსტის ფორმატი არასწორია !",
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
			
			$Database = new Database("user", array(
				"method"=>"updateRegUser",
				"personalnumber"=>$personalnumber,
				"firstname"=>$firstname,
				"lastname"=>$lastname,
				"dob"=>$dob,
				"email"=>$email,
				"address"=>$address,
				"reg_code"=>$token,
				"new_reg_code"=>$new_reg_code
			));
			$getter = $Database->getter();
			
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
		return $this->out;
	}
}