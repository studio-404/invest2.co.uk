<?php 
class investor_password
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

		$oldpassword = functions\request::index("POST","oldpassword");
		$newpassword = functions\request::index("POST","newpassword");
		$comfirmpassword = functions\request::index("POST","comfirmpassword");
		$code = functions\request::index("POST","code");

		if($oldpassword=="" || $newpassword=="" || $comfirmpassword=="" || $code==""){
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
		}else if(!preg_match("/^[a-zA-Z0-9!@#$]+$/", $newpassword)){
			$this->out = array(
				"Error" => array(
					"Code"=>1, 
					"Text"=>"ახალი პაროლი შეიცავს დაუშვებელ სიმბოლოებს !<br>დაშვებული სიმბოლოები: a-z A-Z 0-9 ! @ # $",
					"Details"=>"!"
				),
				"Success" => array(
					"Code"=>0,
					"Text"=>"",
					"Token"=>"",
					"Details"=>""
				)
			);
		}else if(strlen($newpassword)<=5){
			$this->out = array(
				"Error" => array(
					"Code"=>1, 
					"Text"=>"ახალი პაროლი მინიმუმ უნდა შეიცავდეს 6 სიმბოლოს !",
					"Details"=>"!"
				),
				"Success" => array(
					"Code"=>0,
					"Text"=>"",
					"Token"=>"",
					"Details"=>""
				)
			);
		}else if($newpassword!==$comfirmpassword){
			$this->out = array(
				"Error" => array(
					"Code"=>1, 
					"Text"=>"ახალი და ძველი პაროლი არ ემთხვევა ერთმანეთს !",
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
			$Database = new Database("user", array(
				"method"=>"checkpassword_investor",
				"current_password"=>$oldpassword,
				"mobile"=>$_SESSION[Config::SESSION_PREFIX."userdata"]["mobile"]
			));

			if(!$Database->getter()){
				$this->out = array(
					"Error" => array(
						"Code"=>1, 
						"Text"=>"ძველი პაროლი არასწორია !",
						"Details"=>"!"
					),
					"Success" => array(
						"Code"=>0,
						"Text"=>"",
						"Details"=>""
					)
				);
			}else{
				$Database = new Database("user", array(
					"method"=>"changepassword",
					"password"=>$newpassword,
					"mobile"=>$_SESSION[Config::SESSION_PREFIX."userdata"]["mobile"]
				));

				$this->out = array(
					"Error" => array(
						"Code"=>0, 
						"Text"=>"",
						"Details"=>""
					),
					"Success" => array(
						"Code"=>1,
						"Text"=>"პაროლი წარმატებით შეიცვალა !",
						"Details"=>""
					)
				);
			}
		}
		return $this->out;
	}
}