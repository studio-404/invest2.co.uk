<?php 
class _slider
{
	public $data;

	public function index()
	{
		require_once("app/functions/strip_output.php"); 
		require_once("app/functions/l.php");
		$l = new functions\l();

		$out = array();
		$out["list"] = "";
		$out["printr"] = print_r($this->data, true);
		$out["count"] = 0;
		
		$out["count"] = count($this->data);

		if($out["count"])
		{
			$x=0;
			foreach($this->data as $value):
				$x++;
				$photos = new Database("photos",array(
					"method"=>"selectByParent", 
					"idx"=>(int)$value['idx'],  
					"lang"=>strip_output::index($value['lang']),  
					"type"=>strip_output::index($value['type'])
				));
				if($photos->getter()){
					$pic = $photos->getter();
					$image = strip_output::index($pic[0]['path']);
				}else{
					$image = "/public/filemanager/noimage.png";
				}
				$first = ($x==1) ? "views-row-first" : "";
				$out["list"] .= sprintf(
					"<div class=\"views-row views-row-%d views-row-odd %s  swiper-slide\" data-swiper-autoplay=\"2000\">",
					$x,
					$first
				);
				$out["list"] .= "<div class=\"views-field views-field-field-hero-title\">";
				$out["list"] .= "<div class=\"field-content\">";
				$out["list"] .= "<div class=\"hero hero-text-Left\">";
				$out["list"] .= "<div class=\"bg-element\"></div>";
				
				$out["list"] .= sprintf(
					"<a class=\"link-hero-image\" href=\"%s\"  target=\"_blank\" tabindex=\"-1\" target=\"%s\">",
					strip_tags($value['url']),
					$value["classname"]
				);

				$out["list"] .= sprintf(
					"<img  src=\"%s\" alt=\"\" title=\"\" />",
					$image
				);
				$out["list"] .= "</a>";

				$out["list"] .= "<div class=\"hero-textwrapper\">";
				$out["list"] .= "<div class=\"hero-text\">";
				
				$out["list"] .= "<h3>";
				$out["list"] .= sprintf(
					"<a class=\"link-hero-text\" href=\"%s\" tabindex=\"-1\" target=\"%s\">",
					strip_tags($value['url']),
					$value["classname"]
				);
				$out["list"] .= sprintf(
					"<div class=\"hero-textonly\">%s</div>",
					strip_tags($value['title'])
				);
				$out["list"] .= "</a>";
				$out["list"] .= "</h3>";

				$out["list"] .= "<div class=\"hero-read-more link-hero-read-more\">";
				$out["list"] .= sprintf(
					"<a tabindex=\"0\" aria-label=\"%s\" href=\"%s\" target=\"%s\">%s</a>",
					strip_tags($value['title']),
					strip_tags($value['url']),
					$value["classname"],
					$l->translate("more")
				);
				$out["list"] .= "</div>";
				$out["list"] .= "</div>";
				$out["list"] .= "</div>";
				$out["list"] .= "</div>";
				$out["list"] .= "</div>";
				$out["list"] .= "</div>";
				$out["list"] .= "</div>";
			endforeach;			
		}
		
		return $out;
	}
}