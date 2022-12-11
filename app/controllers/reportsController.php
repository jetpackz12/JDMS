<?php

/**
 * 
 */
class reportsController extends Controller
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
			$data = ['all'=>$object->getWaterBillPayment()];
			$object2 = new getDataModel();
			$data2 = ['all'=>$object2->getElectricityBillPayment()];
			$this->controller->view()->render2('reports/reports.php',$data,$data2);
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

	public function sort()
	{
		$sort = isset($_POST['sort'])? $_POST['sort'] : '';

		switch ($sort){
			case "3":
				unset($_SESSION['sort']);
			break;
			default:
				$_SESSION['sort'] = $sort;
		}
		// echo $sort;
	}
	

}
?>