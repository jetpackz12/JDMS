<?php

/**
 * 
 */
class guestsController extends Controller
{
	private $controller;
	function __construct()
	{
		$this->controller = new Controller();
	}

	public function index()
	{
		if(isset($_SESSION['name'])){
			$this->controller->view()->view_render('guests/guests.php');
		}else{
		    $this->controller->view()->view_render('login/login.php');
		}

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