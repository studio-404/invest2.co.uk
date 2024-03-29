<?php 
class dashboard extends Controller
{
	public $managerNavigation; 
	public $websiteNavigation; 
	public $websiteNavigation2; 

	public function __construct()
	{
		if($_SERVER["REMOTE_ADDR"]!=Config::DASHBOAR_IP)
		{
			http_response_code(403);
			die("You dont have a permition");
		}
		
		if(!isset($_SESSION[Config::SESSION_PREFIX."username"]))
		{
			require_once 'app/functions/redirect.php';
			functions\redirect::url("/".$_SESSION["LANG"]."/manager/index");
		}

		$page = new Database('page', array(
			"method"=>"select",
			"cid"=>0,
			"nav_type"=>0, 
			"visibility"=>"showanyway", 
			"lang"=>$_SESSION["LANG"],
			"status"=>0
		));

		$page2 = new Database('page', array(
			"method"=>"select",
			"cid"=>0,
			"nav_type"=>1, 
			"lang"=>$_SESSION["LANG"],
			"status"=>0
		));

		$this->websiteNavigation = $this->model('websiteNavigation');
		$this->websiteNavigation->navigation = $page->getter();

		$this->websiteNavigation2 = $this->model('websiteAdditionalNavigation');
		$this->websiteNavigation2->navigation = $page2->getter();

		$this->managerNavigation = $this->model('managerNavigation');
		$this->managerNavigation->navigation = array(
			"/".$_SESSION["LANG"]."/dashboard/index"=>"გვერდები",
			"/".$_SESSION["LANG"]."/dashboard/modules/".Config::DEFAULT_MODULE=>"მოდულები", 
			// $_SESSION["LANG"]."/dashboard/catalog/3"=>"ტურები", 
			"/".$_SESSION["LANG"]."/dashboard/users"=>"მომხმარებლები",
			"/".$_SESSION["LANG"]."/dashboard/payments"=>"ფინანსები",
			"/".$_SESSION["LANG"]."/dashboard/comments"=>"კომენტარები",
			"/".$_SESSION["LANG"]."/dashboard/plugins"=>"პლაგინები",			
			// $_SESSION["LANG"]."/tasks"=>"გასაკეთებელი სია",			
			"/".$_SESSION["LANG"]."/dashboard/filemanager"=>"ფაილ მენეჯერი", 
			"javascript:profileupdate()"=>"პროფილი",
			"/".$_SESSION["LANG"]."/manager/index"=>"გასვლა"
		);
	}

	public function index()
	{
		/* view */
		$this->view('dashboard/index', [
			"header" => array(
				"website" => Config::WEBSITE,
				"public" => Config::PUBLIC_FOLDER
			),
			"nav" => $this->managerNavigation->index(),
			"additionalNavigation"=>$this->websiteNavigation2->index(), 
			"mainNavigation" => $this->websiteNavigation->index(),
			"footerNav" => $this->managerNavigation->footer()
		]);
	}

	public function modules()
	{
		require_once 'app/functions/url.php';
		require_once 'app/functions/strings.php';
		require_once 'app/functions/pagination.php';

		$string = new functions\strings(); 
		$url = new functions\url();
		$pagination = new functions\pagination();

		// database
		$getUrl = explode("/", $url->getUrl());
		$itemPerPage = 10;
		$modules = new Database('modules', array(
			"method"=>"select",
			"parsed_url"=>$getUrl,
			"lang"=>$_SESSION['LANG'],
			"itemPerPage"=>$itemPerPage
		));
		$getter = $modules->getter();

		$usefull_modules = new Database('modules', array(
			"method"=>"selectParentUsefull",
			"lang"=>"ge"
		));
		$use_mod = $usefull_modules->getter();

		// models
		$modelesView = $this->model('modelesView');
		$modelesView->data = $getter;
		$modelesView->string = $string;

		$parentModel = $this->model('parentModel');
		$parentModel->use_mod = $use_mod;

		$this->view('dashboard/modules', [
			"header" => array(
				"website" => Config::WEBSITE,
				"public" => Config::PUBLIC_FOLDER
			),
			"nav" => $this->managerNavigation->index(),
			"parsed_url"=>$getUrl,
			"string"=>$string, 
			"modules"=>$getter,
			"itemPerPage"=>$itemPerPage,
			"pagination"=>$pagination,
			"parentModel"=>$parentModel->index(),
			"theModels"=>$modelesView->index(), 
			"footerNav" => $this->managerNavigation->footer()
		]);
	}

	public function comments()
	{
		require_once 'app/functions/pagination.php';
		require_once 'app/functions/request.php';

		$pagination = new functions\pagination();
		$file = (int)functions\request::index("GET","file");

		$itemPerPage = 10;
		$comments = new Database('comments', array(
			"method"=>"select",
			"file"=>$file, 
			"itemPerPage"=>$itemPerPage
		));
		$getter = $comments->getter();

		// comments
		$commentsView = $this->model('commentsView');
		$commentsView->data = $getter;

		$this->view('dashboard/comments', [
			"header" => array(
				"website" => Config::WEBSITE,
				"public" => Config::PUBLIC_FOLDER
			),
			"theComments" => $commentsView->index(), 
			"itemPerPage"=>$itemPerPage,
			"comments"=>$getter,
			"pagination"=>$pagination,
			"nav" => $this->managerNavigation->index(),
			"footerNav" => $this->managerNavigation->footer()
		]);
	}

	public function users()
	{
		require_once 'app/functions/pagination.php';
		require_once 'app/functions/request.php';

		$pagination = new functions\pagination();

		$itemPerPage = 10;
		$user = new Database('user', array(
			"method"=>"selectAll",
			"itemPerPage"=>$itemPerPage,
			"lang"=>$_SESSION["LANG"]
		));

		$getter = $user->getter();

		// comments
		$userview = $this->model('userview');
		$userview->data = $getter;

		$this->view('dashboard/users', [
			"header" => array(
				"website" => Config::WEBSITE,
				"public" => Config::PUBLIC_FOLDER
			),
			"theUsers" => $userview->index(), 
			"itemPerPage"=>$itemPerPage,
			"user"=>$getter,
			"pagination"=>$pagination,
			"nav" => $this->managerNavigation->index(),
			"footerNav" => $this->managerNavigation->footer()
		]);
	}

	public function payments()
	{
		require_once 'app/functions/pagination.php';
		$pagination = new functions\pagination();

		$itemPerPage = 10;
		$payments = new Database('payment', array(
			"method"=>"selectAll",
			"itemPerPage"=>$itemPerPage
		));

		$getter = $payments->getter();

		// comments
		$paymentview = $this->model('paymentview');
		$paymentview->data = $getter;

		$this->view('dashboard/payments', [
			"header" => array(
				"website" => Config::WEBSITE,
				"public" => Config::PUBLIC_FOLDER
			),
			"thePayments" => $paymentview->index(), 
			"itemPerPage"=>$itemPerPage,
			"payments"=>$getter,
			"pagination"=>$pagination,
			"nav" => $this->managerNavigation->index(),
			"footerNav" => $this->managerNavigation->footer()
		]);
	}

	public  function filemanager()
	{
		$this->view('dashboard/filemanager', [
			"header" => array(
				"website" => Config::WEBSITE,
				"public" => Config::PUBLIC_FOLDER
			),
			"nav" => $this->managerNavigation->index(),
			"footerNav" => $this->managerNavigation->footer()
		]);
	}

	public function catalog()
	{
		require_once 'app/functions/url.php';
		require_once 'app/functions/strings.php';
		require_once 'app/functions/pagination.php';

		$string = new functions\strings(); 
		$url = new functions\url();
		$pagination = new functions\pagination();

		// database
		$getUrl = explode("/", $url->getUrl());
		$itemPerPage = 10;
		$products = new Database('products', array(
			"method"=>"select",
			"parsed_url"=>$getUrl,
			"lang"=>$_SESSION['LANG'],
			"itemPerPage"=>$itemPerPage
		));
		$getter = $products->getter();

		// echo "<pre>";
		// print_r($getter);
		// echo "</pre>";

		// models
		$productsView = $this->model('productsView');
		$productsView->data = $getter;
		$productsView->string = $string;

	

		$this->view('dashboard/catalog', [
			"header" => array(
				"website" => Config::WEBSITE,
				"public" => Config::PUBLIC_FOLDER
			),
			"nav" => $this->managerNavigation->index(),
			"parsed_url"=>$getUrl,
			"string"=>$string, 
			"products"=>$getter,
			"itemPerPage"=>$itemPerPage,
			"pagination"=>$pagination,
			"theProducts"=>$productsView->index(), 
			"footerNav" => $this->managerNavigation->footer()
		]);
	}

	public  function plugins($lang, $type = "")
	{
		require_once 'app/functions/scanMe.php';

		$scanMe = new functions\scanMe();

		$this->view('dashboard/plugins', [
			"header" => array(
				"website" => Config::WEBSITE,
				"public" => Config::PUBLIC_FOLDER
			),
			"nav" => $this->managerNavigation->index(),
			"scan" => $scanMe->index('app/_plugins'),
			"type"=>$type, 
			"footerNav" => $this->managerNavigation->footer()
		]);
	}

	public  function profile()
	{
		require_once 'app/functions/makeForm.php';

		$this->form = functions\makeForm::open(array(
			"action"=>"?",
			"method"=>"post",
			"id"=>""
		));

		$this->form .= functions\makeForm::label(array(
			"id"=>"usernameLabel", 
			"for"=>"username", 
			"name"=>"მომხმარებლის სახელი",
			"require"=>""
		));

		$this->form .= functions\makeForm::inputText(array(
			"placeholder"=>"", 
			"id"=>"username", 
			"name"=>"username",
			"value"=>"",
			"disabled"=>"true"
		));

		$this->form .= functions\makeForm::close();

		$this->view('dashboard/profile', [
			"header" => array(
				"website" => Config::WEBSITE,
				"public" => Config::PUBLIC_FOLDER
			),
			"nav" => $this->managerNavigation->index(),
			"form" => $this->form,
			"footerNav" => $this->managerNavigation->footer()
		]);
	}

}