<?php 
class viewUser
{
	public $out; 

	public function __construct()
	{
		require_once 'app/core/Config.php';
		if(!isset($_SESSION[Config::SESSION_PREFIX."username"]))
		{
			exit();
		}
	}
	
	public function index(){
		require_once 'app/core/Config.php';
		require_once 'app/functions/request.php';

		$this->out = array(
			"Error" => array(
				"Code"=>1, 
				"Text"=>"მოხდა შეცდომა !",
				"Details"=>"!"
			)
		);

		$id = functions\request::index("POST","id");

		$user = new Database('user', array(
			'method'=>'select', 
			'id'=>$id,
			'lang'=>$_SESSION["LANG"]
		));
		$getter = $user->getter();

		// echo "<pre>";
		// print_r($getter);
		// echo "</pre>";

		$table = '<table class="striped"><tbody>';
		if(count($getter)) {
			$val = $getter;
			$table .= sprintf("
				<tr>
				<td><strong>%s</strong></td>
				<td>%s</td>
				</tr>",
				'ს.კ.: ',
				$val['id']
			);

			$table .= sprintf("
				<tr>
				<td><strong>%s</strong></td>
				<td>%s</td>
				</tr>",
				'რეგისტრაციის თარიღი: (დ/თ/წ)',
				date("d/m/Y H:i:s", $val['register_date'])
			);

			$table .= sprintf("
				<tr>
				<td><strong>%s</strong></td>
				<td>%s</td>
				</tr>",
				'IP მისამართი: ',
				$val['register_ip']
			);
			
			$table .= sprintf("
				<tr>
				<td><strong>%s</strong></td>
				<td>%s</td>
				</tr>",
				'ელ-ფოსტა: ',
				$val['email']
			);

			$table .= sprintf("
				<tr>
				<td><strong>%s</strong></td>
				<td>%s</td>
				</tr>",
				'მობილური: ',
				$val['mobile']
			);

			$table .= sprintf("
				<tr>
				<td><strong>%s</strong></td>
				<td>%s</td>
				</tr>",
				'პირადი ნომერი: ',
				$val['personalnumber']
			);

			$table .= sprintf("
				<tr>
				<td><strong>%s</strong></td>
				<td>%s</td>
				</tr>",
				'სახელი: ',
				$val['firstname']
			);

			$table .= sprintf("
				<tr>
				<td><strong>%s</strong></td>
				<td>%s</td>
				</tr>",
				'გვარი: ',
				$val['lastname']
			);

			$table .= sprintf("
				<tr>
				<td><strong>%s</strong></td>
				<td>%s</td>
				</tr>",
				'დაბადების თარიღი: ',
				$val['dob']
			);

			$table .= sprintf("
				<tr>
				<td><strong>%s</strong></td>
				<td>%s</td>
				</tr>",
				'მისამართი: ',
				$val['address']
			);

			$pic = str_replace(Config::DIR, '/', $val["id_pic_front"]);
			$table .= sprintf("
				<tr>
				<td><strong>%s</strong></td>
				<td><a href=\"%s\" target=\"_blank\">ნახვა</td>
				</tr>",
				'პირადობა წინა მხარე: ',
				$pic
			);

			$pic = str_replace(Config::DIR, '/', $val["id_pic_back"]);
			$table .= sprintf("
				<tr>
				<td><strong>%s</strong></td>
				<td><a href=\"%s\" target=\"_blank\">ნახვა</td>
				</tr>",
				'პირადობა უკანა მხარე: ',
				$pic
			);

			$pic = str_replace(Config::DIR, '/', $val["id_pic_with_owner"]);
			$table .= sprintf("
				<tr>
				<td><strong>%s</strong></td>
				<td><a href=\"%s\" target=\"_blank\">ნახვა</td>
				</tr>",
				'პირადობა + მფლობელი: ',
				$pic
			);

			$table .= sprintf("
				<tr>
				<td><strong>%s</strong></td>
				<td>%s</td>
				</tr>",
				'დროებითი ბალანსი: ',
				$val['pre_balance']
			);

			$table .= sprintf("
				<tr>
				<td><strong>%s</strong></td>
				<td>%s</td>
				</tr>",
				'ბალანსი: ',
				$val['balance']
			);

			$verified = "";
			if($val["verified"]==1){//visibility
				$verified .= "<a href=\"javascript:void(0)\" class=\"userVerify\" onclick=\"userVerify('".$val['id']."', 'verified')\">";
				$verified .= "<i class=\"material-icons\">add_circle</i>";
				$verified .= "</a>";
			}else{
				$verified .= "<a href=\"javascript:void(0)\" class=\"userVerify\" onclick=\"userVerify('".$val['id']."', 'not_verified')\">";
				$verified .= "<i class=\"material-icons\">remove_circle</i>";
				$verified .= "</a>";
			}
			$table .= sprintf("
				<tr>
				<td><strong>%s</strong></td>
				<td>%s</td>
				</tr>",
				'ვერიფიცირებული: ',
				$verified
			);

		}else{
			$table .= sprintf("
					<tr>
					<td colspan=\"2\">%s</td>
					</tr>",
					'მონაცემი ვერ მოიძებნა !'
			);
		}
		$table .= '</table></tbody>';

		$this->out = array(
			"Error" => array(
				"Code"=>0, 
				"Text"=>"ოპერაცია შესრულდა წარმატებით !",
				"Details"=>""
			),
			"table" => $table
		);	

		return $this->out;
	}
}