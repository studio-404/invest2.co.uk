<?php 
class editPayment
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
		require_once 'app/functions/makeForm.php';
		require_once 'app/functions/request.php';
		require_once 'app/functions/strings.php';

		$output = array();
		$id = functions\request::index("POST","id");

		if($id == "")
		{
			$this->out = array(
				"Error" => array(
					"Code"=>1, 
					"Text"=>"მოხდა შეცდომა !",
					"Details"=>"!"
				)
			);
		}
		else
		{
			$Database = new Database('payment', array(
				'method'=>'selectById', 
				'id'=>$id 
			));
			$output = $Database->getter();

			$form = functions\makeForm::open(array(
				"action"=>"?",
				"method"=>"post",
				"id"=>""
			));

			$form .= functions\makeForm::label(array(
				"id"=>"titleLabel", 
				"for"=>"title", 
				"name"=>"დასახელება",
				"require"=>""
			));
			$form .= functions\makeForm::inputText(array(
				"placeholder"=>"დასახელება", 
				"id"=>"title", 
				"name"=>"title",
				"value"=>$output['ip']
			));

			$form .= "<div style=\"clear:both\"></div>";

	  		
			$form .= functions\makeForm::close();


			$this->out = array(
				"Error" => array(
					"Code"=>0, 
					"Text"=>"ოპერაცია შესრულდა წარმატებით !",
					"Details"=>""
				),
				"form" => $form,
				"attr" => "formPaymentEdit('".$id."')"
			);

		}

		

		return $this->out;
	}
}