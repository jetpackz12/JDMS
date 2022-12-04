<?php

/**
 * 
 */
class logoutController extends Controller
{
	private $controller;
	function __construct()
	{
		$this->controller = new Controller();
	}

	public function index()
	{
			unset($_SESSION['ad_id']);
			unset($_SESSION['ad_fullname']);
			unset($_SESSION['ad_position']);
			unset($_SESSION['ad_username']);
			unset($_SESSION['ad_password']);


			unset($_SESSION['mem_id']);
			unset($_SESSION['mem_pass_num']);
			unset($_SESSION['mem_fname']);
			unset($_SESSION['mem_mname']);
			unset($_SESSION['mem_lname']);
			unset($_SESSION['mem_address']);
			unset($_SESSION['mem_bdate']);
			unset($_SESSION['mem_mnumber']);
			unset($_SESSION['mem_username']);
			unset($_SESSION['mem_password']);

			session_destroy();
			header('location: /CoMSCA/');
	}
	

}
?>