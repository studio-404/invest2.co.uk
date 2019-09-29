<?php 
class Fail extends Controller
{
	public function __construct()
	{
		
	}

	public function index($name = '')
	{
		echo "<pre>";
		print_r($_POST);
	}
}