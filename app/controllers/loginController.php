<?php

/**
 * 
 */
class loginController extends Controller
{
	private $controller;
	function __construct()
	{
		$this->controller = new Controller();
	}

	public function index()
	{

		$this->controller->view()->view_render('login/login.php');

	}

	public function store()
	{
		
	}

	public function edit()
	{

	}

	public function update()
	{

	}

	public function delete()
	{

	}
	

}
?>