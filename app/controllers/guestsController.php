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
			$object = new getDataModel();
			$data = ['all'=>$object->getRoomsWithNoTenantAndWithStatus()];
			$object2 = new getDataModel();
			$data2 = ['all'=>$object2->getGuests()];
			$object3 = new getDataModel();
			$data3 = ['all'=>$object3->getRoomsWithNoTenant()];
			$this->controller->view()->render3('guests/guests.php',$data,$data2,$data3);
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
		$duration = isset($_POST['duration']) ? $_POST['duration'] : '';
		$lname = isset($_POST['lname']) ? $_POST['lname'] : '';
		$payment = isset($_POST['payment']) ? $_POST['payment'] : '';

		$object = new guestsModel();
	
		$result = $object->store(
			array(
				'room' => $room,
				'address' => $address,
				'fname' => $fname,
				'contact' => $contact,
				'mname' => $mname,
				'duration' => $duration,
				'lname' => $lname,
				'payment' => $payment
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

		$object = new guestsModel();
		$result = $object->edit($id);

		echo json_encode($result);
	}

	public function update()
	{
		$id = isset($_POST['e_id']) ? $_POST['e_id'] : '';
		$room_id = isset($_POST['e_room_id']) ? $_POST['e_room_id'] : '';
		$room = isset($_POST['e_room']) ? $_POST['e_room'] : '';
		$address = isset($_POST['e_address']) ? $_POST['e_address'] : '';
		$fname = isset($_POST['e_fname']) ? $_POST['e_fname'] : '';
		$contact = isset($_POST['e_contact']) ? $_POST['e_contact'] : '';
		$mname = isset($_POST['e_mname']) ? $_POST['e_mname'] : '';
		$duration = isset($_POST['e_duration']) ? $_POST['e_duration'] : '';
		$lname = isset($_POST['e_lname']) ? $_POST['e_lname'] : '';
		$payment = isset($_POST['e_payment']) ? $_POST['e_payment'] : '';

		$object = new guestsModel();
	
		$result = $object->update(
			array(
				'id' => $id,
				'room_id' => $room_id,
				'room' => $room,
				'address' => $address,
				'fname' => $fname,
				'contact' => $contact,
				'mname' => $mname,
				'duration' => $duration,
				'lname' => $lname,
				'payment' => $payment
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

		$object = new guestsModel();
	
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