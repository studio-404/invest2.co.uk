<?php 
class manager extends Controller{
	
	public function index($name = '')
	{
		session_destroy();
		
		if($_SERVER["REMOTE_ADDR"]!=Config::DASHBOAR_IP)
		{
			http_response_code(403);
			die("You dont have a permition");
		}

		/* view */
		$this->view('manager/index', [
			"header" => array(
				"website" => Config::WEBSITE,
				"public" => Config::PUBLIC_FOLDER
			),
			"name" => $name
		]);
	}

}