<?php 
class payment
{
	public function index($conn, $args)
	{
		$out = 0;
		$this->conn = $conn;
		if(method_exists("payment", $args['method']))
		{
			$string = "\$this->".$args['method']."(\$args);";
			$out = eval("return $string");
		}
		return $out;
	}

	private function add($args)
	{
		$addPayment = "INSERT INTO `payment` SET 
		`currenttime`=:currenttime,
		`ip`=:ip,
		`user_id`=:user_id,
		`amount`=:amount,
		`pay_code`=:pay_code,
		`status`=:status";
		$prepare = $this->conn->prepare($addPayment);
		$prepare->execute(array(
			":currenttime"=>time(),
			":ip"=>$_SERVER["REMOTE_ADDR"],
			":user_id"=>$args["user_id"],
			":amount"=>$args["amount"],
			":pay_code"=>$args["pay_code"],
			":status"=>1
		));
	}

	private function pay($args)
	{
		$pay = "UPDATE `payment` SET
		`verify_sign`=:verify_sign,
		`status`=:status
		WHERE 
		`ip`=:ip AND 
		`user_id`=:user_id AND 
		`pay_code`=:pay_code 
		";
		$prepare = $this->conn->prepare($pay);
		$prepare->execute(array(
			":verify_sign"=>$args["verify_sign"],
			":status"=>2,
			":ip"=>$_SERVER["REMOTE_ADDR"],
			":user_id"=>$args["user_id"],
			":pay_code"=>$args["pay_code"]
		));

		return $prepare->rowCount();
	}

	private function selectAll($args)
	{
		$fetch = array();
		$itemPerPage = $args['itemPerPage'];
		$from = (isset($_GET['pn']) && $_GET['pn']>0) ? (($_GET['pn']-1)*$itemPerPage) : 0;
		
		$select = "SELECT 
		(SELECT COUNT(`id`) FROM `payment` WHERE `status`!=3) as counted, 
		(SELECT `mobile` FROM `users_website` WHERE `users_website`.`id`=`payment`.`user_id`) as usersMobile, 
		(SELECT `id` FROM `users_website` WHERE `users_website`.`id`=`payment`.`user_id`) as usersId, 
		`payment`.* 
		FROM 
		`payment` 
		WHERE `status`!=3
		ORDER BY `currenttime` DESC LIMIT ".$from.",".$itemPerPage;	
		$prepare = $this->conn->prepare($select); 
		$prepare->execute();
		if($prepare->rowCount()){
			$fetch = $prepare->fetchAll(PDO::FETCH_ASSOC);
		}
		return $fetch;
	}

	private function selectById($args)
	{
		$fetch = array();
		$select = "SELECT 
		(SELECT `mobile` FROM `users_website` WHERE `users_website`.`id`=`payment`.`user_id`) as usersMobile, 
		`payment`.* 
		FROM 
		`payment` 
		WHERE `id`=:id";	
		$prepare = $this->conn->prepare($select); 
		$prepare->execute(array(
			":id"=>$args["id"]
		));
		if($prepare->rowCount()){
			$fetch = $prepare->fetch(PDO::FETCH_ASSOC);
		}
		return $fetch;
	}

	private function mydeposite($args)
	{
		$select = "SELECT 
		(SELECT SUM(`amount`) FROM `payment` WHERE `status`=3 AND `user_id`=:user_id) AS main,
		SUM(`amount`) as sub 
		FROM 
		`payment` 
		WHERE 
		`status`=2 AND 
		`user_id`=:user_id";
		$prepare = $this->conn->prepare($select);
		$prepare->execute(array(
			":user_id"=>$args["user_id"]
		));

		$fetch = $prepare->fetch(PDO::FETCH_ASSOC);
		return $fetch; 
	}
}
?>