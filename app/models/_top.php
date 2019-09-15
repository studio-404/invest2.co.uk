<?php 
class _top
{
	public  $data;

	public function index()
	{
		require_once("app/functions/l.php"); 

		$out = "<header>";
		$out .= "<nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">";
		$out .= sprintf(
			"<a class=\"navbar-brand\" href=\"%s\">Invest 2</a>",
			Config::WEBSITE.$_SESSION["LANG"]."/home"
		);
		$out .= "<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">";
		$out .= "<span class=\"navbar-toggler-icon\"></span>";
		$out .= "</button>";
		$out .= "<div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">";
		
		$out .= $this->data["navigationModule"];
		
		$out .= "<form class=\"form-inline mt-2 mt-md-0\">";
		$out .= "<input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"საკვანძო სიტყვა\" aria-label=\"Search\">";
		$out .= "<button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">ძებნა</button>";
		$out .= "</form>";

		$out .= "</div>";
		$out .= "</nav>";
		$out .= "</header>";

		

		return $out;
	}
}