<?php 
class userVerify
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
			),
			"Success" => array(
				"Code"=>0, 
				"Text"=>"",
				"Details"=>"!"
			)
		);

		$id = filter_var(functions\request::index("POST","id"), FILTER_SANITIZE_NUMBER_INT);
		$status = functions\request::index("POST","status");
		$verifiedHTML = "";
		$newstatus = "";

		if($status=="verified"){
			$verified = 0;
			$verifiedHTML = "<i class=\"material-icons\">remove_circle</i>";
			$newstatus = "not_verified";
		}else{
			$verified = 1;
			$verifiedHTML = "<i class=\"material-icons\">add_circle</i>";
			$newstatus = "verified";
		}
		
		$Database = new Database('user', array(
			'method'=>'changeVerified', 
			'id'=>$id, 
			'verified'=>$verified
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
				"Verify"=>$verifiedHTML,
				"newstatus"=>$newstatus,
				"Details"=>""
			)
		);

		return $this->out;
	}
}