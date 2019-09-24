<?php 
class investor_profile
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

		$personalnumber = functions\request::index("POST","personalnumber");
		$firstname = functions\request::index("POST","firstname");
		$lastname = functions\request::index("POST","lastname");
		$dob = functions\request::index("POST","dob");
		$email = functions\request::index("POST","email");
		$address = functions\request::index("POST","address");
		$code = functions\request::index("POST","code");

		$mobile = $_SESSION[Config::SESSION_PREFIX."userdata"]["mobile"];

		if(
			$personalnumber=="" || 
			$firstname=="" || 
			$lastname=="" || 
			$dob=="" || 
			$email=="" || 
			$code==""
		){
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
				"method"=>"updateProfile",
				"personalnumber"=>$personalnumber,
				"firstname"=>$firstname,
				"lastname"=>$lastname,
				"dob"=>$dob,
				"email"=>$email,
				"address"=>$address,
				"mobile"=>$mobile
			));

			$logintry_nopass = new Database("user", array(
				"method"=>"logintry_nopass",
				"mobile"=>$mobile
			));
			$fetch = $logintry_nopass->getter();

			if($fetch){
				$_SESSION[Config::SESSION_PREFIX."userdata"] = $fetch;
			}	

			$this->out = array(
				"Error" => array(
					"Code"=>0, 
					"Text"=>"",
					"Details"=>"!"
				),
				"Success" => array(
					"Code"=>1,
					"Text"=>"ოპერაცია შესრულდა წარმატებით !",
					"Details"=>""
				)
			);
		}
		return $this->out;
	}
}