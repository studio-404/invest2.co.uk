<?php 
class _news_outer
{
	public $data; 

	public function index()
	{
		require_once("app/functions/strings.php"); 
		require_once("app/functions/l.php"); 
		require_once("app/functions/strip_output.php");
		$month = array(
			"ge"=>array(
				"Jan"=>"იან",
				"Feb"=>"თებ",
				"Mar"=>"მარ",
				"Apr"=>"აპრ",
				"May"=>"მაი",
				"Jun"=>"ივნ",
				"Jul"=>"ივლ",
				"Aug"=>"აგვ",
				"Sep"=>"სექ",
				"Oct"=>"ოქტ",
				"Nov"=>"ნოე",
				"Dec"=>"დეკ"
			),
			"en"=>array(
				"Jan"=>"Jan",
				"Feb"=>"Feb",
				"Mar"=>"Mar",
				"Apr"=>"Apr",
				"May"=>"May",
				"Jun"=>"Jun",
				"Jul"=>"Jul",
				"Aug"=>"Aug",
				"Sep"=>"Sep",
				"Oct"=>"Oct",
				"Nov"=>"Nov",
				"Dec"=>"Dec"
			)
		);
		$l = new functions\l(); 
		$sting = new functions\strings();
		$out = "";

		$return["count"] = (isset($this->data[0]['count'])) ? $this->data[0]['count'] : 0;
		if($return["count"]){
			foreach($this->data as $value) {
				$photos = new Database("photos",array(
					"method"=>"selectByParent", 
					"idx"=>(int)$value['idx'],  
					"lang"=>strip_output::index($value['lang']),  
					"type"=>strip_output::index($value['type'])
				));
				if($photos->getter()){
					$pic = $photos->getter();
					$image = sprintf(
						"%s%s/image/loadimage?f=%s%s&w=870&h=285",
						Config::WEBSITE,
						strip_output::index($_SESSION['LANG']),
						Config::WEBSITE_,
						strip_output::index($pic[0]['path'])
					);
				}else{
					$image = "/public/filemanager/noimage.png";
				}
				$title = strip_tags($value['title']);
				$titleUrl = str_replace(array(" ", "'", '"'), "-", $title); 

				$str = str_replace(date("M", (int)$value['date']), $month[strip_output::index($_SESSION['LANG'])][date("M", (int)$value['date'])], date("M d, Y", (int)$value['date']));

				$out .= "<li class=\"rss-feed-content\">";
				$out .= sprintf(
					"<img src=\"%s\" alt=\"\" />",
					$image
				);

				$out .= sprintf(
					"<a href=\"%s%s/%s/%s/%s\" class=\"feed-item-title BPGNinoMtavruli\">",
					Config::WEBSITE,
					strip_output::index($_SESSION['LANG']),
					$value["type"],
					(int)$value['idx'],
					strip_output::index($titleUrl)
				);
				$out .= $title;
				$out .= "</a>";
				$out .= "<div class=\"link-title BPGGlaxo\">";
				$out .= sprintf("%s", $sting->cut($value['description'], 160));
				$out .= sprintf(
					"<a href=\"%s%s/%s/%s/%s\" class=\"more-link BPGGlaxo\">%s</a>",
					Config::WEBSITE,
					strip_output::index($_SESSION['LANG']),
					$value["type"],
					(int)$value['idx'],
					strip_output::index($titleUrl),
					$l->translate("more")
				);
				$out .= "</div>";
				$out .= "</li>";
				
			}
		}		
		$return["html"] = $out;
		return $return; 
	}
}