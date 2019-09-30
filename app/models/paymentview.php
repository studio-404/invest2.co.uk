<?php 
class paymentview
{
	public $data;
	public $string;

	public function index(){
		require_once("app/functions/strip_output.php"); 
		$out = '';
		if(count($this->data)) : 
			foreach ($this->data as $val) {
				$out .= sprintf("<tr>
						<td>%s</td>
						<td><a href=\"javascript:void(0)\" onclick=\"viewUser('%d')\">%s</a></td>
						<td>%s</td>
						<td>%s</td>
						<td>%s</td>
						<td>
						<a href=\"javascript:void(0)\" onclick=\"editPayment('%s')\"><i class=\"material-icons tooltipped\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"რედაქტირება\">mode_edit</i></a>
						</td>
					</tr>",
					date("d/m/Y g:i:s", (int)$val['currenttime']), 
					strip_output::index($val['usersId']), 
					strip_output::index($val['usersMobile']), 
					strip_output::index($val['amount']),
					strip_output::index((float)$val['amount_gel']),
					strip_output::index($val['verify_sign']),
					strip_output::index($val['id'])
				);
			}
		endif;
		return $out;
	}
}