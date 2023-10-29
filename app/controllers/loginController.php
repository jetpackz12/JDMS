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
		if(isset($_SESSION['name'])){
			$object = new getDataModel();
			$data = $object->getAllTenants();
			$object2 = new getDataModel();
			$data2 = $object2->getAllRoomsAvailable();
			$object3 = new getDataModel();
			$data3 = $object3->getAllRoomsOccupied();
			$object4 = new getDataModel();
			$data4 = $object4->getAllGuests();
			$this->controller->view()->render4('home/home.php',$data,$data2,$data3,$data4);
		}else{
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				$username = isset($_POST['username'])? $_POST['username'] : '';
				$password = isset($_POST['password'])? $_POST['password'] : '';
	
				$object = new loginModel();
	
				$result = $object->authentication(
					array(
					'username' => $username,
					'password' => $password
					));
	
				if($result['result'] == 'username'){
					echo 'username';
				}
	
				if($result['result'] == 'password'){
					echo 'password';
				}
	
				if($result['result'] == 'success'){
					// echo json_encode($result);
					$_SESSION['id'] = $result['id'];
					$_SESSION['name'] = $result['name'];
					$_SESSION['username'] = $result['username'];
					$_SESSION['password'] = $result['password'];
					echo 'success';
				}
	
			}else{
				$this->controller->view()->view_render('login/login.php');
			}
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