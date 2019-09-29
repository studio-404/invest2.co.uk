<?php 
class Faq extends Controller
{
	public function __construct()
	{
		
	}

	public function index($name = '')
	{
		/* DATABASE */
		$db_langs = new Database("language", array(
			"method"=>"select"
		));

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

		$db_faq = new Database("modules", array(
			"method"=>"selectModuleByType", 
			"type"=>"faq"
		));

		/* HEDARE */
		$header = $this->model('_header');
		$header->public = Config::PUBLIC_FOLDER; 
		$header->lang = $_SESSION["LANG"]; 
		$header->pagedata = $db_pagedata; 

		/* LANGUAGES */
		$languages = $this->model('_lang'); 
		$languages->langs = $db_langs->getter();

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

		/* slidr */
		$faq = $this->model('_faq');
		$faq->data = $db_faq->getter();

		/* header top */
		$headertop = $this->model('_top');
		$headertop->data["languagesModule"] = $languages->index();
		$headertop->data["navigationModule"] = $navigation->index();

		/*footer */
		$footer = $this->model('_footer');

		/* view */
		$this->view('faq/index', [
			"header"=>array(
				"website"=>Config::WEBSITE,
				"public"=>Config::PUBLIC_FOLDER
			),
			"headerModule"=>$header->index(), 
			"headertop"=>$headertop->index(), 
			"pageData"=>$db_pagedata->getter(), 
			"faqs"=>$faq->favouriteAskedQuestions(),
			"footer"=>$footer->index() 
		]);
	}
}