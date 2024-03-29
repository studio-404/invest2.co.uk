<?php 
class Protect extends Controller
{
	public function __construct()
	{
		require_once 'app/functions/request.php';
		require_once("app/functions/strings.php");
		$string = new functions\strings(); 
		$hash = functions\request::index("GET","hash");
		if($hash!==$_SESSION["protect_hash"]){
			die('Error');
		}

		if(isset($_SESSION["temp"]) && $_SESSION["temp"]==$_SESSION["protect_x"]){
			$_SESSION['protect_x'] = $string::random(4);
		}

		$_SESSION["temp"] = $_SESSION["protect_x"];
	}

	public function index($name = "")
	{
		$name = Config::DIR.Config::PUBLIC_FOLDER_NAME."/img/s.png";
		$im = imagecreatefrompng($name);

		$im = imagecreate(100, 40);
		$string = (isset($_SESSION['protect_x'])) ? $_SESSION['protect_x'] : 123456;
		$bg = imagecolorallocate($im, 242, 243, 246);
		$red = imagecolorallocate($im, 51, 51, 51);
		$linecolor = imagecolorallocate($im, 0, 123, 255);
		for($i=0; $i < 4; $i++) {
		imagesetthickness($im, 1);
		imageline($im, 0, rand(0,30), 120, rand(0,30), $linecolor);
		}

		imagestring($im, 75, 30, 10, $string, $red);


		$filename = sha1("_".time().$_SERVER["REMOTE_ADDR"]).".png";
		$name = Config::PUBLIC_FOLDER_NAME."/_temporaty/".$filename;
		imagepng($im,$name,9);
		$dir    = Config::DIR.Config::PUBLIC_FOLDER_NAME.'/_temporaty/';
		$files = scandir($dir); 
		foreach($files as $file)
		{
			if($file!="." && $file!=".." && $file!=$filename)
			{
				$cerationTime = @filemtime($file);
				$now = time() - 3600;
				if($cerationTime<$now)
				{
					@unlink($dir.$file);
				}
			}
		}
		header("location: " . Config::WEBSITE.$name);
	}
}