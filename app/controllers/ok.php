<?php 
class Ok extends Controller
{
	public function __construct()
	{
		if(!isset($_SESSION[Config::SESSION_PREFIX."userdata"]))
		{
			require_once 'app/functions/redirect.php';
			functions\redirect::url("/".$_SESSION["LANG"]."/home");
		}
	}

	public function index($name = '')
	{
		require_once 'app/functions/request.php';

		$pay_code = functions\request::index("GET", "paymentId");

		$Database = new Database("payment", array(
			"method"=>"pay",
			"verify_sign"=>$pay_code,
			"ip"=>$_SERVER["REMOTE_ADDR"],
			"user_id"=>$_SESSION[Config::SESSION_PREFIX."userdata"]["id"],
			"pay_code"=>md5($pay_code)
		));
		
		/* DATABASE */
		$db_langs = new Database("language", array(
			"method"=>"select"
		)); /* # */

		$db_navigation = new Database("page", array(
			"method"=>"select", 
			"cid"=>0, 
			"nav_type"=>0,
			"lang"=>$_SESSION['LANG'],
			"status"=>0 
		));

		$s = (isset($_SESSION["URL"][1])) ? $_SESSION["URL"][1] : Config::MAIN_CLASS;
		$db_pagedata = new Database("page", array(
			"method"=>"selecteBySlug", 
			"slug"=>$s,
			"lang"=>$_SESSION['LANG'], 
			"all"=>true
		));

		/* HEDARE */
		$header = $this->model('_header');
		$header->public = Config::PUBLIC_FOLDER; 
		$header->lang = $_SESSION["LANG"]; 
		$header->pagedata = $db_pagedata; 

		/* NAVIGATION */
		$navigation = $this->model('_navigation');
		$navigation->data = $db_navigation->getter();

		if(isset($_SESSION[Config::SESSION_PREFIX."userdata"]))
		{
			/* deposite */
			$mydeposite = new Database("payment", array(
				"method"=>"mydeposite",
				"user_id"=>(int)$_SESSION[Config::SESSION_PREFIX."userdata"]["id"]
			));
			$navigation->deposite = $mydeposite->getter();
		}

		/* header top */
		$headertop = $this->model('_top');
		$headertop->data["navigationModule"] = $navigation->index();

		/*footer */
		$footer = $this->model('_footer');

		/* view */
		$this->view('ok/index', [
			"header"=>array(
				"website"=>Config::WEBSITE,
				"public"=>Config::PUBLIC_FOLDER
			),
			"headerModule"=>$header->index(), 
			"headertop"=>$headertop->index(), 
			"pageData"=>$db_pagedata->getter(), 
			"paypal_data"=>$_POST, 
			"footer"=>$footer->index()
		]);
	}
}