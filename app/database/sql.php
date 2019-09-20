<?php 
class sql
{
	public function __construct()
	{

	}

	public function index($conn, $args)
	{
		$out = 0;
		$this->conn = $conn;
		if(method_exists("sql", $args['method']))
		{
			$string = "\$this->".$args['method']."(\$args);";
			$out = eval("return $string");
		}
		return $out;
	}

	private function command($args)
	{
		$fetch = array();
		$select = $args["command"];
		$prepare = $this->conn->prepare($select);
		$prepare->execute();
		return true;
	}

}