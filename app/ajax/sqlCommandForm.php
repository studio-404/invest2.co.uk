<?php 
class sqlCommandForm
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

		$this->out = array(
			"Error" => array(
				"Code"=>1, 
				"Text"=>"მოხდა შეცდომა !",
				"Details"=>"!"
			)
		);

		$slug = functions\request::index("POST","slug");
		$lang = functions\request::index("POST","lang");
		$random = functions\strings::random(25);

		$form = functions\makeForm::open(array(
			"action"=>"?",
			"method"=>"post",
			"id"=>"",
			"id"=>"",
		));

		$form .= "<div style=\"width:100%; clear:both; margin-top:10px;\"></div>";

		$form .= sprintf(
			"<a class=\"waves-effect waves-light btn\" onclick=\"$('#sqlCommand').val('CREATE TABLE [table] (id int, title varchar(255));')\">მაგიდის დამატება</a>"
		);

		$form .= sprintf(
			"<a class=\"waves-effect waves-light btn\" style=\"margin-left:10px;\" onclick=\"$('#sqlCommand').val('ALTER TABLE %s ADD [column] varchar(255) AFTER [column];')\">სვეტის დამატება</a>",
			$slug
		);
		
		$form .= sprintf(
			"<a class=\"waves-effect waves-light btn\" style=\"margin-left:10px;\" onclick=\"$('#sqlCommand').val('ALTER TABLE %s DROP [column];')\">სვეტის წაშლა</a>",
			$slug
		);

		$form .= "<div style=\"width:100%; clear:both; margin-top:20px;\"></div>";

		$form .= functions\makeForm::label(array(
			"id"=>"sqlCommandLabel", 
			"for"=>"sqlCommand", 
			"name"=>"ბრძანება",
			"require"=>""
		));

		$form .= functions\makeForm::textarea(array(
			"id"=>"sqlCommand",
			"name"=>"sqlCommand",
			"placeholder"=>"",
			"value"=>""
		));

		$form .= functions\makeForm::close();

		
		$this->out = array(
			"Error" => array(
				"Code"=>0, 
				"Text"=>"ოპერაცია შესრულდა წარმატებით !",
				"Details"=>""
			),
			"form" => $form,
			"attr" => "formSqlComand()"
		);



		return $this->out;
	}
}