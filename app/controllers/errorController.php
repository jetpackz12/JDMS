<?php

class errorController extends controller{

	private $controller;
	function __construct()
	{
		$this->controller = new Controller();
	}

	public function index(){
		// echo "Error 404: Not Found!";
		$this->controller->view()->view_render('error/error.php');
	}
}
?>