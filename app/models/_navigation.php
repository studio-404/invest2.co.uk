<?php 
class _navigation
{
	public $data;
	public $footerNavigation = false;

	public function index(){
		require_once("app/functions/strip_output.php");

		$out = "";
		$out .= "<ul class=\"navbar-nav mr-auto\">\n";

		if(count($this->data)){
			$topx = 1;
			
			foreach($this->data as $value) {
				$first = ($topx==1) ? " first" : "";
				$subNavigation = new Database('page', array(
					"method"=>"select", 
					"cid"=>(int)$value['idx'], 
					"nav_type"=>0, 
					"lang"=>strip_output::index($value['lang']), 
					"status"=>0
				));
				
				if($subNavigation->getter()){				
										
				}else{	
					$active = (isset($_SESSION["URL"][1]) && $_SESSION["URL"][1]==$value['slug']) ? " active" : "";

					if(isset($value['redirect']) && $value['redirect']!=""){
						$out .= sprintf(
							"<li class=\"nav-item\"><a href=\"%s\" class=\"nav-link\">%s</a></li>\n",
							strip_output::index($value['redirect']),
							strip_output::index($value['title'])
						);
					}else{
						$out .= sprintf(
							"<li class=\"nav-item %s\"><a href=\"%s%s/%s\" class=\"nav-link\">%s</a></li>\n",
							$active, 
							Config::WEBSITE,
							strip_output::index($_SESSION['LANG']),
							strip_output::index($value['slug']),
							strip_output::index($value['title'])
						);	
					}
					$topx++;
				}				
			}				
		}	
		$out .= "</ul>\n";	

		$out .= "<ul class=\"navbar-nav flex-row ml-md-auto d-none d-md-flex\">";	
		if(isset($_SESSION[Config::SESSION_PREFIX."userdata"])){
			$out .= "<li class=\"nav-item dropdown\">\n";
			$out .= "<a class=\"nav-item nav-link dropdown-toggle mr-md-2\" href=\"#\" id=\"bd-versions\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">\n";
			$out .= sprintf(
				"გამარჯობა, %s\n",
				$_SESSION[Config::SESSION_PREFIX."userdata"]["firstname"]
			);
			$out .= "</a>\n";
			$out .= "<div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"bd-versions\">\n";

			$out .= sprintf(
				"<a class=\"dropdown-item\" href=\"/%s/profile\">პროფილი</a>\n",
				$_SESSION["LANG"]
			);

			$out .= sprintf(
				"<a class=\"dropdown-item\" href=\"/%s/updatepassword\">პაროლის შეცვლა</a>\n",
				$_SESSION["LANG"]
			);

			$out .= sprintf(
				"<a class=\"dropdown-item\" href=\"javascript:void(0)\">ბალანსი <strong><font color=\"red\">10.70</font> / <font color=\"green\">105.23</font></strong></a>\n"
			);

			$out .= sprintf(
				"<a class=\"dropdown-item\" href=\"javascript:void(0)\">ჩემი ინვესტიციები (0)</a>\n"
			);

			$out .= sprintf(
				"<a class=\"dropdown-item g-logout\" href=\"javascript:void(0)\">სისტემიდან გასვლა</a>\n"
			);
			
			$out .= "</div>\n";
			$out .= "</li>\n";

			$out .= "<li class=\"nav-item\">\n";
			$out .= "<a href=\"\" class=\"nav-link\" title=\"შეტყობინებები\"><i class=\"fa fa-bell\" aria-hidden=\"true\"></i> (0)</a>\n";
			$out .= "</li>\n";

			$out .= "<li class=\"nav-item\">\n";
			$out .= "<a href=\"\" class=\"nav-link\" title=\"ჩემი წერილები\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> (0)</a>\n";
			$out .= "</li>\n";
		}else{
			$out .= "<li class=\"nav-item dropdown\">\n";
			$out .= "<a class=\"nav-item nav-link dropdown-toggle mr-md-2\" href=\"#\" id=\"bd-versions\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">\n";
			$out .= "სისტემაში შესვლა\n";
			$out .= "</a>\n";
			$out .= "<div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"bd-versions\">\n";
			$out .= sprintf(
				"<a class=\"dropdown-item\" href=\"/%s\">შესვლა</a>\n",
				$_SESSION["LANG"]."/login"
			);
			$out .= sprintf(
				"<a class=\"dropdown-item\" href=\"/%s\">რეგისტრაცია</a>\n",
				$_SESSION["LANG"]."/registration"	
			);
			$out .= sprintf(
				"<a class=\"dropdown-item\" href=\"/%s\">პაროლის აღდგენა</a>\n",
				$_SESSION["LANG"]."/recover-password"
			);
			$out .= "</div>\n";
			$out .= "</li>\n";
		}
		$out .= "</ul>\n";
		
		return $out;
	}
}