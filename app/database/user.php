<?php
/*
TABLE: users_website
COLUMNS:  id | register_date | register_ip   | email | mobile | password | firstname | lastname | status
*/
class user
{
	public function index($conn, $args)
	{
		$out = 0;
		$this->conn = $conn;
		if(method_exists("user", $args['method']))
		{
			$string = "\$this->".$args['method']."(\$args);";
			$out = eval("return $string");
		}
		return $out;
	}

	/* INVESTING START */
	private function logintry($args)
	{
		$fetch = array();
		$sql = 'SELECT 
		* 
		FROM 
		`users_website` 
		WHERE 
		`mobile`=:mobile AND
		`password`=:password AND
		`status`!=:one';
		$prepare = $this->conn->prepare($sql);
		$prepare->execute(array(
			":mobile"=>$args["mobile"], 
			":password"=>$args["password"], 
			":one"=>1 
		));
		
		if($prepare->rowCount()){
			$fetch = $prepare->fetch(PDO::FETCH_ASSOC);
		}
		return $fetch;
	}

	private function registerTry($args)
	{
		$fetch = array();
		$sql = "SELECT `id` FROM `users_website` WHERE `mobile`=:mobile";
		$prepare = $this->conn->prepare($sql);
		$prepare->execute(array(
			":mobile"=>$args["mobile"]
		));
		if($prepare->rowCount()){
			$fetch = $prepare->fetch(PDO::FETCH_ASSOC);
		}

		return $fetch; // user not exists
	}

	private function registerTryTwo($args)
	{
		$fetch = array();
		$sql = "SELECT `id` FROM `users_website` WHERE `reg_code`=:reg_code AND `sms_code`=:sms_code";
		$prepare = $this->conn->prepare($sql);
		$prepare->execute(array(
			":reg_code"=>$args["reg_code"],
			":sms_code"=>$args["sms_code"]
		));
		if($prepare->rowCount()){
			$fetch = $prepare->fetch(PDO::FETCH_ASSOC);
		}

		return $fetch; // user not exists
	}


	private function changeRegCode($args)
	{
		$sql = "UPDATE `users_website` SET `reg_code`=:new_reg_code WHERE `reg_code`=:reg_code";
		$prepare = $this->conn->prepare($sql);
		$prepare->execute(array(
			":new_reg_code"=>$args["new_reg_code"],
			":reg_code"=>$args["reg_code"]
		));

		return array("true"=>true);
	}

	private function updateRegUser($args)
	{
		$sql = "UPDATE `users_website` SET
		`personalnumber`=:personalnumber, 
		`firstname`=:firstname, 
		`lastname`=:lastname, 
		`dob`=:dob, 
		`email`=:email, 
		`address`=:address,
		`reg_code`=:new_reg_code
		WHERE 
		`reg_code`=:reg_code
		";
		$prepare = $this->conn->prepare($sql);
		$prepare->execute(array(
			":personalnumber"=>$args["personalnumber"],
			":firstname"=>$args["firstname"],
			":lastname"=>$args["lastname"],
			":dob"=>$args["dob"],
			":email"=>$args["email"],
			":address"=>$args["address"],
			":reg_code"=>$args["reg_code"],
			":new_reg_code"=>$args["new_reg_code"]
		));

		return array("true"=>true);
	}

	private function updateRegUserDocs($args)
	{
		$sql = "UPDATE `users_website` SET
		`id_pic_front`=:id_pic_front, 
		`id_pic_back`=:id_pic_back, 
		`id_pic_with_owner`=:id_pic_with_owner, 
		`reg_code`=''
		WHERE 
		`reg_code`=:reg_code
		";
		$prepare = $this->conn->prepare($sql);
		$prepare->execute(array(
			":id_pic_front"=>$args["id_pic_front"],
			":id_pic_back"=>$args["id_pic_back"],
			":id_pic_with_owner"=>$args["id_pic_with_owner"],
			":reg_code"=>$args["reg_code"]
		));

		return array("true"=>true);
	}

	private function insert($args)
	{
		require_once("app/functions/server.php");
		$server = new functions\server();

		$sql = 'INSERT INTO `users_website` SET 
		`register_date`=:register_date, 
		`register_ip`=:register_ip, 
		`mobile`=:mobile, 
		`email`="", 
		`password`=:password, 
		`firstname`="", 
		`sms_code`=:sms_code, 
		`reg_code`=:reg_code,
		`status`=0
		';
		$prepare = $this->conn->prepare($sql);
		$prepare->execute(array(
			":register_date"=>time(), 
			":register_ip"=>$server->ip(), 
			":mobile"=>$args["mobile"], 
			":password"=>$args["password"], 
			":sms_code"=>$args["sms_code"], 
			":reg_code"=>$args["reg_code"]
		));
		if($prepare->rowCount()){
			return true;
		}
		return false;
	}
	/* INVESTING END */

	private function select($args)
	{
		$fetch = array();
		$sql = 'SELECT 
		(
			SELECT 
			`usefull`.`title` 
			FROM 
			`usefull` 
			WHERE 
			`usefull`.`idx`=`users_website`.`howfind` AND
			`usefull`.`lang`=:lang AND 
			`usefull`.`status`!=1		
		) as howfind_title, 
		`users_website`.* 
		FROM 
		`users_website` 
		WHERE 
		`id`=:id';
		$prepare = $this->conn->prepare($sql);
		$prepare->execute(array(
			":id"=>$args["id"], 
			":lang"=>$args["lang"] 
		));
		if($prepare->rowCount()){
			$fetch = $prepare->fetch(PDO::FETCH_ASSOC);
		}
		return $fetch;
	}

	private function removeUser($args)
	{
		$sql = 'UPDATE `users_website` SET `status`=1 WHERE `id`=:id';
		$prepare = $this->conn->prepare($sql);
		$prepare->execute(array(
			":id"=>$args["id"]
		));
		if($prepare->rowCount()){
			return true;
		}
		return false;
	}

	private function selectAll($args)
	{
		$fetch = array();
		$itemPerPage = $args['itemPerPage'];
		$from = (isset($_GET['pn']) && $_GET['pn']>0) ? (($_GET['pn']-1)*$itemPerPage) : 0;
		
		$select = "SELECT 
		(SELECT COUNT(`id`) FROM `users_website` WHERE `status`!=1) as counted, 
		`id`, 
		`register_date`, 
		`register_ip`, 
		`email`, 
		`firstname` 
		FROM 
		`users_website` 
		WHERE 
		`status`!=1 
		ORDER BY `register_date` DESC LIMIT ".$from.",".$itemPerPage;	
		$prepare = $this->conn->prepare($select); 
		$prepare->execute(array(
			":lang"=>$args["lang"]
		));
		if($prepare->rowCount()){
			$fetch = $prepare->fetchAll(PDO::FETCH_ASSOC);
		}
		return $fetch;
	}

	/* ADMIN PANEL method */
	private function check_admin($args){
		$sql = 'SELECT `id` FROM `users` WHERE `username`=:username AND `password`=:password';
		$prepare = $this->conn->prepare($sql);
		$prepare->execute(array(
			":username"=>$args["user"],
			":password"=>md5($args["pass"])
		));
		if($prepare->rowCount()){
			return true;
		}
		return false;
	}

	/* UPDATE ADMIN PASSWORD */
	private function updateAdminPassword($args){
		$sql = 'UPDATE `users` SET `password`=:password WHERE `username`=:admin AND `password`=:oldpassword';
		$prepare = $this->conn->prepare($sql);
		$prepare->execute(array(
			":admin"=>$_SESSION[Config::SESSION_PREFIX."username"],
			":oldpassword"=>md5($args["oldpassword"]),
			":password"=>md5($args["password"])
		));
		if($prepare->rowCount()){
			return true;
		}
		return false;
	}

	private function check($args){
		$sql = 'SELECT `id` FROM `users_website` WHERE `email`=:username AND (`password`=:password OR `recoverpassword`=:password)';
		$prepare = $this->conn->prepare($sql);
		$prepare->execute(array(
			":username"=>$args["user"],
			":password"=>sha1(md5($args["pass"]))
		));
		if($prepare->rowCount()){
			return true;
		}
		return false;
	}

	private function updaterecover($args){
		$sql = 'UPDATE `users_website` SET `recoverpassword`=:password  WHERE `email`=:username';
		$prepare = $this->conn->prepare($sql);
		$prepare->execute(array(
			":password"=>sha1(md5($args["pass"])),
			":username"=>$args["user"]
		));
		if($prepare->rowCount()){
			return true;
		}
		return false;
	}

	private function updatepassword($args){
		$sql = 'UPDATE `users_website` SET `password`=:password  WHERE `email`=:username';
		$prepare = $this->conn->prepare($sql);
		$prepare->execute(array(
			":password"=>sha1(md5($args["password"])),
			":username"=>$_SESSION[Config::SESSION_PREFIX."web_username"]
		));
		if($prepare->rowCount()){
			return true;
		}
		return false;
	}


	private function check_user_exists($args){
		$sql = 'SELECT `id` FROM `users_website` WHERE `email`=:username';
		$prepare = $this->conn->prepare($sql);
		$prepare->execute(array(
			":username"=>$args["username"]
		));
		if($prepare->rowCount()){
			return true;
		}

		return false;
	}

	private function checkpassword($args){
		$sql = 'SELECT `id` FROM `users_website` WHERE `password`=:current_password AND `email`=:email';
		$prepare = $this->conn->prepare($sql);
		$prepare->execute(array(
			":current_password"=>sha1(md5($args["current_password"])), 
			":email"=>$_SESSION[Config::SESSION_PREFIX."web_username"]
		));
		if($prepare->rowCount()){
			return true;
		}
		return false;
	}

	private function update($args){
		$sql = 'UPDATE `users_website` SET 
		`firstname`=:firstname, 
		`lastname`=:lastname,
		`dob`=:dob,
		`gender`=:gender,
		`country`=:country,
		`city`=:city,
		`phone`=:phone,
		`postcode`=:postcode
		WHERE 
		`email`=:email
		';
		$prepare = $this->conn->prepare($sql);
		$prepare->execute(array(
			":firstname"=>$args["firstname"], 
			":lastname"=>$args["lastname"], 
			":dob"=>$args["dob"], 
			":gender"=>$args["gender"], 
			":country"=>$args["country"], 
			":city"=>$args["city"], 
			":phone"=>$args["phone"], 
			":postcode"=>$args["postcode"], 
			":email"=>$_SESSION[Config::SESSION_PREFIX."web_username"]
		));
		if($prepare->rowCount()){
			return true;
		}
		return false;
	}

	private function emailConfirm($args){
		$check = 'SELECT `id` FROM `users_website` WHERE `email_random`=:email_random';
		$prepare_check = $this->conn->prepare($check);
		$prepare_check->execute(array(
			":email_random"=>$args['email_random']
		));
		if($prepare_check->rowCount()){
			$sql = 'UPDATE `users_website` SET `email_confirm`=:email_confirm, `email_random`=:empty  WHERE `email_random`=:email_random';
			$prepare = $this->conn->prepare($sql);
			$prepare->execute(array(
				":email_confirm"=>1, 
				":empty"=>"",
				":email_random"=>$args['email_random']
			));
			if($prepare->rowCount()){
				return true;
			}
		}
		return false;
	}
}
?>