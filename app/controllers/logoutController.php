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
		unset($_SESSION['id']);
		unset($_SESSION['name']);
		unset($_SESSION['username']);
		unset($_SESSION['password']);
		
		unset($_SESSION['sort']);

		session_destroy();
		header('location: /RDMS/');
	}
	

}
?>