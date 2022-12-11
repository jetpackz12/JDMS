<?php

/**
 * 
 */
class tenantsController extends Controller
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
			$data = ['all'=>$object->getRoomsWithStatus()];
			$object2 = new getDataModel();
			$data2 = ['all'=>$object2->getTenants()];
			$object3 = new getDataModel();
			$data3 = ['all'=>$object3->getRoomsWithStatus()];
			$object4 = new getDataModel();
			$data4 = ['all'=>$object4->getRoomsWithStatus()];
			$this->controller->view()->render4('tenants/tenants.php', $data,$data2,$data3,$data4);
		}else{
		    $this->controller->view()->view_render('login/login.php');
		}

	}

	public function store()
	{
		$room = isset($_POST['room']) ? $_POST['room'] : '';
		$address = isset($_POST['address']) ? $_POST['address'] : '';
		$fname = isset($_POST['fname']) ? $_POST['fname'] : '';
		$contact = isset($_POST['contact']) ? $_POST['contact'] : '';
		$mname = isset($_POST['mname']) ? $_POST['mname'] : '';
		$deposit = isset($_POST['deposit']) ? $_POST['deposit'] : '';
		$lname = isset($_POST['lname']) ? $_POST['lname'] : '';
		$advance = isset($_POST['advance']) ? $_POST['advance'] : '';

		$object = new tenantsModel();
	
		$result = $object->store(
			array(
				'room' => $room,
				'address' => $address,
				'fname' => $fname,
				'contact' => $contact,
				'mname' => $mname,
				'deposit' => $deposit,
				'lname' => $lname,
				'advance' => $advance
			));

		switch ($result['result']) {
			case "success":
				echo $result['message'];
			break;
			case "failed":
				echo $result['message'];
			break;
			default:
				echo "failed";
		}
	}

	public function edit()
	{
		$id = isset($_POST['id']) ? $_POST['id'] : '';

		$object = new tenantsModel();
		$result = $object->edit($id);

		echo json_encode($result);
	}

	public function update()
	{
		$id = isset($_POST['e_id']) ? $_POST['e_id'] : '';
		$room_id = isset($_POST['room_id']) ? $_POST['room_id'] : '';
		$room = isset($_POST['e_room']) ? $_POST['e_room'] : '';
		$address = isset($_POST['e_address']) ? $_POST['e_address'] : '';
		$fname = isset($_POST['e_fname']) ? $_POST['e_fname'] : '';
		$contact = isset($_POST['e_contact']) ? $_POST['e_contact'] : '';
		$mname = isset($_POST['e_mname']) ? $_POST['e_mname'] : '';
		$deposit = isset($_POST['e_deposit']) ? $_POST['e_deposit'] : '';
		$lname = isset($_POST['e_lname']) ? $_POST['e_lname'] : '';
		$advance = isset($_POST['e_advance']) ? $_POST['e_advance'] : '';

		$object = new tenantsModel();
	
		$result = $object->update(
			array(
				'id' => $id,
				'room_id' => $room_id,
				'room' => $room,
				'address' => $address,
				'fname' => $fname,
				'contact' => $contact,
				'mname' => $mname,
				'deposit' => $deposit,
				'lname' => $lname,
				'advance' => $advance
			));

		switch ($result['result']) {
			case "success":
				echo $result['message'];
			break;
			case "failed":
				echo $result['message'];
			break;
			default:
				echo "failed";
		}
	}

	public function delete()
	{
		$id = isset($_POST['d_id']) ? $_POST['d_id'] : '';
		$room_id = isset($_POST['d_room_id']) ? $_POST['d_room_id'] : '';

		$object = new tenantsModel();
	
		$result = $object->delete(
			array(
				'id' => $id,
				'room_id' => $room_id
			));

		switch ($result['result']) {
			case "success":
				echo $result['message'];
			break;
			case "failed":
				echo $result['message'];
			break;
			default:
				echo "failed";
		}
	}
	

}
?>