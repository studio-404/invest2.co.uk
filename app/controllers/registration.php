<?php 
class Registration extends Controller
{
	public function __construct()
	{
		require_once 'app/functions/request.php';
		require_once 'app/functions/redirect.php';
		require_once 'app/functions/file_upload.php';
		$file_upload = new functions\file_upload();

		if(
			isset($_FILES["id_pic_front"]["name"]) && 
			isset($_FILES["id_pic_back"]["name"]) && 
			isset($_FILES["id_pic_with_owner"]["name"]) && 
			functions\request::index("GET", "token")
		){
			$target_dir = Config::DIR."public/filemanager/docs/";
			
			$id_pic_front = $file_upload->save($target_dir, "id_pic_front", 5000000);	
			$id_pic_back = $file_upload->save($target_dir, "id_pic_back", 5000000);	
			$id_pic_with_owner = $file_upload->save($target_dir, "id_pic_with_owner", 5000000);	

			if(!$id_pic_front || !$id_pic_back || !$id_pic_with_owner){
				@unlink($id_pic_front);
				@unlink($id_pic_back);
				@unlink($id_pic_with_owner);
			}else{
				$token = functions\request::index("GET", "token");
				$Database = new Database("user", array(
					"method"=>"updateRegUserDocs",
					"id_pic_front"=>$id_pic_front,
					"id_pic_back"=>$id_pic_back,
					"id_pic_with_owner"=>$id_pic_with_owner,
					"reg_code"=>$token
				));
				if($Database->getter()){
					$url = "/".$_SESSION["LANG"]."/registration?next=5";
					functions\redirect::url($url);
				}
			}
		}		
	}

	public function index($name = '')
	{ 
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

		/* header top */
		$headertop = $this->model('_top');
		$headertop->data["navigationModule"] = $navigation->index();

		/*footer */
		$footer = $this->model('_footer');


		/* view */
		$this->view('registration/index', [
			"header"=>array(
				"website"=>Config::WEBSITE,
				"public"=>Config::PUBLIC_FOLDER
			),
			"headerModule"=>$header->index(), 
			"headertop"=>$headertop->index(), 
			"pageData"=>$db_pagedata->getter(), 
			"footer"=>$footer->index()
		]);
	}
}