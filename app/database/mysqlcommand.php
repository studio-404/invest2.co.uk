<?php 
class mysqlcommand
{
	public function __construct()
	{

	}

	public function index($conn, $args)
	{
		$out = 0;
		$this->conn = $conn;
		if(method_exists("mysqlcommand", $args['method']))
		{
			$string = "\$this->".$args['method']."(\$args);";
			$out = eval("return $string");
		}
		return $out;
	}

	private function shows($args)
	{
		$fetch = array();
		$select = "SHOW TABLES";
		$prepare = $this->conn->prepare($select);
		$prepare->execute();
		if($prepare->rowCount()){
			$fetch = $prepare->fetchAll(PDO::FETCH_ASSOC);
		}
		return $fetch;
	}

	private function show_columns($args)
	{
		$fetch = array();
		try{
			$select = "SHOW COLUMNS FROM `".$args["column"]."`";
			$prepare = $this->conn->prepare($select);
			$prepare->execute();
			if($prepare->rowCount()){
				$fetch = $prepare->fetchAll(PDO::FETCH_ASSOC);
			}
		}catch(Exception $e){
			echo "Table with that name does not exists.";
		}

		return $fetch;
	}

}