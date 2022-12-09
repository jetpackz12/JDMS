<?php

/**
 * 
 */
class roomsController extends Controller
{
	private $controller;
	function __construct()
	{
		$this->controller = new Controller();
	}

	public function index()
	{
		if(isset($_SESSION['name'])){
			// $this->controller->view()->view_render('rooms/rooms.php');
			$object = new getDataModel();
			$data = ['all'=>$object->getRooms()];
			$this->controller->view()->render('rooms/rooms.php', $data);
		}else{
		    $this->controller->view()->view_render('login/login.php');
		}

	}

	public function store()
	{

		if(isset($_FILES['file']['name'])){

			$roomnum = isset($_POST['roomnum'])? $_POST['roomnum'] : '';
			$description = isset($_POST['description'])? $_POST['description'] : '';
			$type = isset($_POST['type'])? $_POST['type'] : '';

			$filename = $_FILES['file']['name'];
		 
			$location = "public/img/".$filename;
			$imageFileType = pathinfo($location,PATHINFO_EXTENSION);
			$imageFileType = strtolower($imageFileType);
		 
			$valid_extensions = array("jpg","jpeg","png");
		 
			$response = 0;

			$object = new roomsModel();
	
			$result = $object->store(
				array(
					'response' => $location,
					'roomnum' => $roomnum,
					'description' => $description,
					'type' => $type
				));

			switch ($result['result']) {
				case "success":
					if(in_array(strtolower($imageFileType), $valid_extensions)) {
						if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
							echo $result['message'];
						}
					}
				break;
				case "failed":
					echo $result['message'];
				break;
				default:
					echo "failed";
			}
		 
			// echo $response;
		 }

	}

	public function edit()
	{
		$id = isset($_POST['id']) ? $_POST['id'] : '';

		$object = new roomsModel();
		$result = $object->edit($id);

		echo json_encode($result);
	}

	public function update()
	{
		$id = isset($_POST['id'])? $_POST['id'] : '';
		$roomnum = isset($_POST['roomnum'])? $_POST['roomnum'] : '';
		$description = isset($_POST['description'])? $_POST['description'] : '';
		$type = isset($_POST['type'])? $_POST['type'] : '';

		if(isset($_FILES['file']['name'])){

			$filename = $_FILES['file']['name'];
		 
			$location = "public/img/".$filename;
			$imageFileType = pathinfo($location,PATHINFO_EXTENSION);
			$imageFileType = strtolower($imageFileType);
		 
			$valid_extensions = array("jpg","jpeg","png");
		 
			$response = 0;

			$object = new roomsModel();
	
			$result = $object->update(
				array(
					'id' => $id,
					'response' => $location,
					'roomnum' => $roomnum,
					'description' => $description,
					'type' => $type
				));

			switch ($result['result']) {
				case "success":
					if(in_array(strtolower($imageFileType), $valid_extensions)) {
						if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
							echo $result['message'];
						}
					}
				break;
				case "failed":
					echo $result['message'];
				break;
				default:
					echo "failed";
			}
		 
			// echo $response;
		 }
		 else{
			$object = new roomsModel();
	
			$result = $object->updateNoImage(
				array(
					'id' => $id,
					'roomnum' => $roomnum,
					'description' => $description,
					'type' => $type
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