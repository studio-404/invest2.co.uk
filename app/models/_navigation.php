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
					if(isset($value['redirect']) && $value['redirect']!=""){
						$out .= sprintf(
							"<li class=\"nav-item\"><a href=\"%s\" class=\"nav-link\">%s</a></li>\n",
							strip_output::index($value['redirect']),
							strip_output::index($value['title'])
						);
					}else{
						$out .= sprintf(
							"<li class=\"nav-item\"><a href=\"%s%s/%s\" class=\"nav-link\">%s</a></li>\n",
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
		$out .= "<li class=\"nav-item dropdown\">\n";
		$out .= "<a class=\"nav-item nav-link dropdown-toggle mr-md-2\" href=\"#\" id=\"bd-versions\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">\n";
		$out .= "სისტემაში შესვლა\n";
		$out .= "</a>\n";
		$out .= "<div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"bd-versions\">\n";
		$out .= "<a class=\"dropdown-item\" href=\"#\">შესვლა</a>\n";
		$out .= "<a class=\"dropdown-item\" href=\"#\">რეგისტრაცია</a>\n";
		$out .= "</div>\n";
		$out .= "</li>\n";
		$out .= "</ul>\n";
		
		return $out;
	}
}