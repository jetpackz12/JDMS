<?php

/**
 * 
 */
class homeController extends Controller
{
	private $controller;
	function __construct()
	{
		$this->controller = new Controller();
	}

	public function index()
	{
		if(isset($_SESSION['name'])){
			$object = new getDataModel();
			$data = $object->getAllTenants();
			$object2 = new getDataModel();
			$data2 = $object2->getAllRoomsAvailable();
			$object3 = new getDataModel();
			$data3 = $object3->getAllRoomsOccupied();
			$this->controller->view()->render3('home/home.php',$data,$data2,$data3);
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