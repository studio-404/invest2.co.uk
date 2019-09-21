<?php 
class _header
{
	public $public;
	public $lang;
	public $pagedata;
	public $imageSrc;
	public $product;

	public function index(){ 

		$getter = $this->pagedata->getter(); 

		if(isset($getter['title'])){
			$title = strip_tags($getter['title']);
			$description = strip_tags($getter['description']);
		}else if(isset($getter[0]['title'])){
			$title = strip_tags($getter[0]['title']); 
			$description = strip_tags($getter[0]['description']);
		}else{
			$title = "";
			$description = "";
		}

		if(isset($this->product)){
			$title = strip_tags($this->product['title']);
			$description = strip_tags($this->product['short_description']);
		}

		$actual_link = "https://".$_SERVER["HTTP_HOST"].htmlentities($_SERVER["REQUEST_URI"]);

		$out = "<!DOCTYPE html>\n";
				
		$out .= "<html lang=\"en\">\n";
		$out .= "<head>\n";
		
		$out .= "<meta charset=\"utf-8\" />\n";
		$out .= sprintf("<base href=\"%s\">\n", Config::WEBSITE);
		
		$out .= sprintf(
			"<link rel=\"alternate\" type=\"application/rss+xml\" title=\"\" href=\"%srss.php?v=%s\" />\n",
			Config::WEBSITE,
			Config::WEBSITE_VERSION
		);

		$out .= "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />\n";
		

		$keywords = str_replace(" ", ",", strip_tags($description));
		$out .= sprintf(
			"<meta name=\"keywords\" content=\"%s\" />\n", 
			htmlentities($keywords)
		);
		
		if(isset($this->imageSrc)){
			$image = $this->imageSrc;
		}else{
			$image = $this->public."img/share2.jpg";
		}

		$out .= sprintf(
			"<meta property=\"og:image\" content=\"%s\" />\n", 
			$image
		);
		$out .= sprintf(
			"<link rel=\"image_src\" type=\"image/jpeg\" href=\"%s\" />\n", 
			$image
		);
		
		$out .= sprintf(
			"<meta property=\"fb:app_id\" content=\"%s\" />\n",
			Config::FB_APP
		);
		$out .= sprintf(
			"<meta property=\"og:title\" content=\"%s\" />\n",
			$title
		);
		$out .= "<meta property=\"og:image:width\" content=\"600\" />\n";
		$out .= "<meta property=\"og:image:height\" content=\"315\" />\n";
		$out .= sprintf("<meta property=\"og:site_name\" content=\"%s\" />\n", Config::NAME);
		$out .= "<meta property=\"og:description\" content=\"".htmlentities($description)."\"/>\n";


		$out .= sprintf("<meta property=\"og:site_name\" content=\"%s\" />\n", Config::NAME);
		$out .= "<meta property=\"og:type\" content=\"website\" />\n";
		$out .= sprintf("<meta property=\"og:url\" content=\"%s\" />\n", $actual_link);

		$out .= sprintf("<link rel=\"shortcut icon\" href=\"%spublic/img/favicon-32x32.png?v=%s\" type=\"image/ico\" />\n", Config::WEBSITE, Config::WEBSITE_VERSION);

		$out .= sprintf("<title>%s</title>\n", $title);

		$out .= sprintf("<link type=\"text/css\" rel=\"stylesheet\" href=\"%spublic/css/web/bootstrap.css?v=%s\" media=\"all\" />\n", Config::WEBSITE, Config::WEBSITE_VERSION);
		
		$out .= sprintf("<link type=\"text/css\" rel=\"stylesheet\" href=\"%spublic/css/web/sticky-footer-navbar.css?v=%s\" media=\"all\" />\n", Config::WEBSITE, Config::WEBSITE_VERSION);
		
		$out .= sprintf("<link type=\"text/css\" rel=\"stylesheet\" href=\"%spublic/css/web/fontawesome.css?v=%s\" media=\"all\" />\n", Config::WEBSITE, Config::WEBSITE_VERSION);

		$out .= sprintf("<link type=\"text/css\" rel=\"stylesheet\" href=\"%spublic/css/web/datepicker.css?v=%s\" media=\"all\" />\n", Config::WEBSITE, Config::WEBSITE_VERSION);

		$out .= sprintf("<link type=\"text/css\" rel=\"stylesheet\" href=\"%spublic/css/web/general.css?v=%s\" media=\"all\" />\n", Config::WEBSITE, Config::WEBSITE_VERSION);

		if(isset($_SESSION['LANG']) && $_SESSION['LANG']=="ge"){
			$out .= sprintf("<link type=\"text/css\" rel=\"stylesheet\" href=\"%spublic/css/web/ge.css?v=%s\" media=\"all\" />\n", Config::WEBSITE, Config::WEBSITE_VERSION);
		}

		$out .= "</head>\n";
		$out .= "<body class=\"d-flex flex-column h-100\">\n";
		$out .= sprintf(
			"<input type=\"hidden\" name=\"language\" id=\"language\" value=\"%s\" />\n",
			$_SESSION["LANG"]
		);
		
		return $out;
	}
}