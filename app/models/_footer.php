<?php 
class _footer
{
	public $data;

	public function index()
	{
		//contactdetails
		require_once("app/functions/l.php");

		$l = new functions\l(); 
		$out = "<footer class=\"footer mt-auto py-3\">\n";
		$out .= "<div class=\"container\">\n";
		$out .= "<span class=\"text-muted\">&copy; 2019 invest2.co.uk ყველა უფლება დაცულია.</span>\n";
		$out .= "</div>\n";
		$out .= "</footer>\n";

		$out .= sprintf(
			"<script type=\"text/javascript\" src=\"%spublic/js/web/jquery-3.3.1.slim.min.js?v=%s\"></script>\n",
			Config::WEBSITE,
			Config::WEBSITE_VERSION
		);
		$out .= sprintf(
			"<script type=\"text/javascript\" src=\"%spublic/js/web/bootstrap.js?v=%s\"></script>\n",
			Config::WEBSITE,
			Config::WEBSITE_VERSION
		);
		
		$out .= sprintf(
			"<script type=\"text/javascript\" src=\"%spublic/js/web/jqueryScript.js?v=%s\"></script>\n",
			Config::WEBSITE,
			Config::WEBSITE_VERSION
		);

		$out .= sprintf(
			"<script type=\"text/javascript\" src=\"%spublic/js/web/main.js?v=%s\"></script>\n",
			Config::WEBSITE,
			Config::WEBSITE_VERSION
		);

		return $out;
	}
}