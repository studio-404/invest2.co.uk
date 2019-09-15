<?php 
class _gallery
{
	public $data; 
	public $bigger = false; 

	public function index()
	{
		require_once("app/functions/strings.php"); 
		require_once("app/functions/l.php"); 
		require_once("app/functions/strip_output.php");
		
		$l = new functions\l(); 
		$sting = new functions\strings();
		$out = "<div class=\"g-gallery\">";

		foreach($this->data as $item) {
			$title = strip_tags($item['title']);

			$photos = new Database("photos",array(
				"method"=>"selectByParent", 
				"idx"=>(int)$item['idx'],  
				"lang"=>strip_output::index($item['lang']),  
				"type"=>strip_output::index($item['type'])
			));
			if($photos->getter()){
				$pic = $photos->getter();
				if($this->bigger){
					$wh = "&w=520&h=520";
				}else{
					$wh = "&w=720&h=440";
				}
				$image = sprintf(
					"%s%s/image/loadimage?f=%s%s".$wh,
					Config::WEBSITE,
					strip_output::index($_SESSION['LANG']),
					Config::WEBSITE_,
					strip_output::index($pic[0]['path'])
				);
			}else{
				$image = "/public/filemanager/noimage.png";
			}

			

			if($this->bigger){
				$out .= sprintf(
					"<a href=\"%s\" class=\"g-gallery-item\" style=\"background-image: url('%s'); height:260px\" title=\"%s\"></a>",
					Config::WEBSITE_.strip_output::index($pic[0]['path']),
					$image,
					htmlentities($item["title"])
				);
			}else{
				$out .= sprintf(
					"<a href=\"%s\" class=\"g-gallery-item\" style=\"background-image: url('%s');\" title=\"%s\"></a>",
					Config::WEBSITE_.strip_output::index($pic[0]['path']),
					$image,
					htmlentities($item["title"])
				);
			}

		}
		$out .= "</div>";
		return $out; 
	}


	private function youtube($url)
	{
		$youtube_id = "";
		$shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_]+)\??/i';
        $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))(.*)/i';

        if (preg_match($longUrlRegex, $url, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }

        if (preg_match($shortUrlRegex, $url, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }
        $embed["link"] = 'https://www.youtube.com/embed/' . $youtube_id;
        $embed["image"] = 'https://img.youtube.com/vi/'.$youtube_id.'/0.jpg';
        return $embed;
	}

}