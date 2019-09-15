<?php 
class _footer
{
	public $data;

	public function index()
	{
		//contactdetails
		require_once("app/functions/l.php");

		$l = new functions\l(); 
		$out = "<footer class=\"footer mt-auto py-3\">";
		$out .= "<div class=\"container\">";
		$out .= "<span class=\"text-muted\">Place sticky footer content here.</span>";
		$out .= "</div>";
		$out .= "</footer>";

		$out .= sprintf(
			"<script type=\"text/javascript\" src=\"%spublic/js/web/jquery-3.3.1.slim.min.js?v=%s\"></script>",
			Config::WEBSITE,
			Config::WEBSITE_VERSION
		);
		$out .= sprintf(
			"<script type=\"text/javascript\" src=\"%spublic/js/web/bootstrap.js?v=%s\"></script>",
			Config::WEBSITE,
			Config::WEBSITE_VERSION
		);

		return $out;
	}
}