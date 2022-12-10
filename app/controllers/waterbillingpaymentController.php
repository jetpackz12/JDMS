<?php

/**
 * 
 */
class waterbillingpaymentController extends Controller
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
			$data = ['all'=>$object->getTenants()];
			$object2 = new getDataModel();
			$data2 = ['all'=>$object2->getWaterBillPayment()];
			$object3 = new getDataModel();
			$data3 = ['all'=>$object3->getTenants()];
			$this->controller->view()->render3('waterbillingpayment/waterbillingpayment.php', $data, $data2, $data3);
		}else{
		    $this->controller->view()->view_render('login/login.php');
		}

	}

	public function store()
	{
		$tenant = isset($_POST['tenant'])? $_POST['tenant'] : '';
		$prev_read = isset($_POST['previous_reading'])? $_POST['previous_reading'] : '';
		$pres_read = isset($_POST['present_reading'])? $_POST['present_reading'] : '';
		$amount = isset($_POST['amount'])? $_POST['amount'] : '';
		$due_date = isset($_POST['due_date'])? $_POST['due_date'] : '';

		$object = new waterbillingpaymentModel();
	
		$result = $object->store(
			array(
				'tenant' => $tenant,
				'prev_read' => $prev_read,
				'pres_read' => $pres_read,
				'amount' => $amount,
				'due_date' => $due_date
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

		$object = new waterbillingpaymentModel();
		$result = $object->edit($id);

		echo json_encode($result);
	}

	public function update()
	{
		$id = isset($_POST['e_id'])? $_POST['e_id'] : '';
		$tenant = isset($_POST['e_tenant'])? $_POST['e_tenant'] : '';
		$prev_read = isset($_POST['e_previous_reading'])? $_POST['e_previous_reading'] : '';
		$pres_read = isset($_POST['e_present_reading'])? $_POST['e_present_reading'] : '';
		$amount = isset($_POST['e_amount'])? $_POST['e_amount'] : '';
		$due_date = isset($_POST['e_due_date'])? $_POST['e_due_date'] : '';

		$object = new waterbillingpaymentModel();
	
		$result = $object->update(
			array(
				'id' => $id,
				'tenant' => $tenant,
				'prev_read' => $prev_read,
				'pres_read' => $pres_read,
				'amount' => $amount,
				'due_date' => $due_date
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

	}
	

}
?>