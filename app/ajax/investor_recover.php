<?php 
class investor_recover
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
		$code = functions\request::index("POST","code");

		if($mobile=="" || $code==""){
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
			$temp_password = functions\strings::random(6);

			$recover_password = new Database("user", array(
				"method"=>"recover_password",
				"mobile"=>$mobile,
				"temp_password"=>$temp_password
			));

			$this->out = array(
				"Error" => array(
					"Code"=>0, 
					"Text"=>"",
					"Details"=>""
				),
				"Success" => array(
					"Code"=>1,
					"Text"=>"დროებითი პაროლი გამოგეგზავნათ მობილურის ნომერზე, ავტორიზაციის შემდეგ გთხოვთ შეცვალოთ პაროლი !",
					"Details"=>""
				)
			);
		}
		return $this->out;
	}
}