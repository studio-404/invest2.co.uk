<?php 
class Search extends Controller
{
	public function __construct()
	{

	}

	public function index($lang)
	{
		require_once("app/functions/request.php");
		$word = "";
		if(functions\request::index("GET","w")){
			$word = strip_tags(functions\request::index("GET","w"));
			$word = str_replace(
				array("-", "%20", "'", '"'),
				array(" ", " ", "", ""),
				$word
			); 
		}

		// $db_search = new Database("searchBy", array(
		// 	"method"=>"select", 
		// 	"word"=>$word,
		// 	"lang"=>$_SESSION['LANG']
		// ));

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
		

		/* HEDARE */
		$header = $this->model('_header');
		$header->public = Config::PUBLIC_FOLDER; 
		$header->lang = $_SESSION["LANG"]; 	
		$header->pagedata = $db_pagedata; 	

		/* NAVIGATION */
		$navigation = $this->model('_navigation');
		$navigation->data = $db_navigation->getter();

		/* NAVIGATION Footer */
		$navigation_footer = $this->model('_navigation');
		$navigation_footer->data = $db_navigation->getter();

		/* header top */
		$headertop = $this->model('_top');
		$headertop->data["navigationModule"] = $navigation->index();

		/*footer */
		$footer = $this->model('_footer');
		
	
		/* view */
		$this->view('search/index', [
			"header"=>array(
				"website"=>Config::WEBSITE,
				"public"=>Config::PUBLIC_FOLDER
			),
			"headerModule"=>$header->index(), 
			"headertop"=>$headertop->index(), 
			"pageData"=>$db_pagedata->getter(), 
			"word"=>$word, 
			"footer"=>$footer->index() 
		]);
	}
}