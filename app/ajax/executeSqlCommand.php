<?php
class executeSqlCommand
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

		$sqlCommand = functions\request::index("POST","sqlCommand");

		if($sqlCommand=="")
		{
			$this->out = array(
				"Error" => array(
					"Code"=>1, 
					"Text"=>"ყველა ველი სავალდებულოა !",
					"Details"=>"!"
				)
			);
		}else if(!preg_match("/^(ALTER TABLE \w+ (ADD|DROP)|CREATE TABLE \w+)/", $sqlCommand, $maches)){
			$this->out = array(
				"Error" => array(
					"Code"=>1, 
					"Text"=>"ბრძანება არ არის ნებარდართული !",
					"Details"=>"!"
				)
			);
		}else{
			$Database = new Database('sql', array(
					'method'=>'command', 
					'command'=>$sqlCommand
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