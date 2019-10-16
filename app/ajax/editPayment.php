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
				"id"=>"dateLabel", 
				"for"=>"date", 
				"name"=>"თარიღი",
				"require"=>""
			));
			$form .= functions\makeForm::inputText(array(
				"placeholder"=>"თარიღი", 
				"id"=>"date", 
				"name"=>"date",
				"readonly"=>"true",
				"value"=>date("Y-m-d H:s",$output['currenttime'])
			));

			$form .= functions\makeForm::label(array(
				"id"=>"ipLabel", 
				"for"=>"ip", 
				"name"=>"IP მისამართი",
				"require"=>""
			));
			$form .= functions\makeForm::inputText(array(
				"placeholder"=>"IP მისამართი", 
				"id"=>"ip", 
				"name"=>"ip",
				"readonly"=>"true",
				"value"=>$output['ip']
			));

			$form .= functions\makeForm::label(array(
				"id"=>"userLabel", 
				"for"=>"user", 
				"name"=>"მომხმარებელი",
				"require"=>""
			));
			$form .= functions\makeForm::inputText(array(
				"placeholder"=>"მომხმარებელი", 
				"id"=>"user", 
				"name"=>"user",
				"readonly"=>"true",
				"value"=>sprintf("%s %s :: %s", $output['usersFirstname'], $output['usersLastname'], $output['usersMobile'])
			));

			$form .= functions\makeForm::label(array(
				"id"=>"amountLabel", 
				"for"=>"amount", 
				"name"=>"თანხა დოლარში",
				"require"=>""
			));
			$form .= functions\makeForm::inputText(array(
				"placeholder"=>"თანხა დოლარში", 
				"id"=>"amount", 
				"name"=>"amount",
				"readonly"=>"true",
				"value"=>$output['amount']
			));
			$curs = (float)@shell_exec("python3 /var/www/buu.ge/python/spider.py");
			$lari = ($output['amount']*$curs);
			$minus = $lari * Config::CIMMITION / 100;
			$form .= functions\makeForm::label(array(
				"id"=>"currencyLabel", 
				"for"=>"currency", 
				"name"=>sprintf(
					"კურსი (დღეს %s)",
					$curs
				),
				"require"=>""
			));
			$form .= functions\makeForm::inputText(array(
				"placeholder"=>"კურსი", 
				"id"=>"currency", 
				"name"=>"currency",
				"value"=>$output['currency_ex']
			));

			$form .= functions\makeForm::label(array(
				"id"=>"amount_gelLabel", 
				"for"=>"amount_gel", 
				"name"=>sprintf(
					"ლარი (დღევანდელი კურსის მიხ. %s - %s = %s)",
					$lari,
					Config::CIMMITION."%",
					($lari-$minus)
				),
				"require"=>""
			));
			$form .= functions\makeForm::inputText(array(
				"placeholder"=>"ლარი", 
				"id"=>"amount_gel", 
				"name"=>"amount_gel",
				"value"=>$output['amount_gel']
			));

			$form .= functions\makeForm::label(array(
				"id"=>"verify_signLabel", 
				"for"=>"verify_sign", 
				"name"=>"ვერიგიკაციის კოდი",
				"require"=>""
			));

			$form .= functions\makeForm::inputText(array(
				"placeholder"=>"ვერიგიკაციის კოდი", 
				"id"=>"verify_sign", 
				"name"=>"verify_sign",
				"readonly"=>"true",
				"value"=>$output['verify_sign']
			));

			$form .= functions\makeForm::label(array(
				"id"=>"statusLabel", 
				"for"=>"status", 
				"name"=>"სტატუსი",
				"require"=>""
			));

			$form .= functions\makeForm::select(array(
				"id"=>"status",
				"choose"=>"აირჩიეთ სტატუსი",
				"options"=>array(
					"2"=>"გადასახდელი",
					"3"=>"გადახდილი"
				),
				"selected"=>$output['status'],
				"disabled"=>"false"
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
				"attr" => "formPaymentEdit('".$id."', '".$_SESSION["LANG"]."')"
			);

		}

		

		return $this->out;
	}
}