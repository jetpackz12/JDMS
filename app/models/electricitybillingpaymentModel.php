<?php

/**
 * 
 */
class electricitybillingpaymentModel extends model
{
	private $con;

    public function __construct(){
        $db = new database();
        $this->con = $db->connection();
    }

	public function store($param = array())
	{
        date_default_timezone_set('Asia/Manila');
        $tenant = $param['tenant'];
		$unit_consumed = $param['unit_consumed'];
		$amount = $param['amount'];
		$due_date = $param['due_date'];
        $date = date("Y-m-d");
        $time = date("h:i:sa");
        $status = 1;
        $data = array();

        $sql = "INSERT INTO `electricitybill`(`tenants_id`, `unit_consumed`, `amount`, `due_date`, `date`, `time`, `status`) 
        VALUES ('". $tenant ."','". $unit_consumed ."','". $amount ."','". $due_date ."','". $date ."','". $time ."','". $status ."')";
        if ($this->con->query($sql) === TRUE) {
            $data = array(
                'result' => 'success',
                'message' => 'success'
            );
        } else {
            $data = array(
                'result' => 'failed',
                'message' => 'Error: ' . $sql . '<br>' . $this->con->error
            );
        }

        $this->con->close();
        return $data;
	}

	public function edit($id)
	{
        $data = array();

        $sql = "SELECT electricitybill.`id`, electricitybill.`tenants_id`, tenants.`room_number`, tenants.`fname`,
        tenants.`mname`, tenants.`lname`,electricitybill.`unit_consumed`, electricitybill.`amount`, 
        electricitybill.`due_date`, electricitybill.`date`,
        electricitybill.`time`, electricitybill.`status` 
        FROM `electricitybill` 
        INNER JOIN tenants 
        ON electricitybill.tenants_id = tenants.id";

        $result = $this->con->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                if($row['id'] == $id){
                    $data = array(
                        'result' => 'ok',
                        'id' => $row['id'],
                        'tenants_id' => $row['tenants_id'],
                        'tenants_fullname' => $row['fname'] . " " . $row['mname'] . " " . $row['lname'],
                        'unit_consumed' => $row['unit_consumed'],
                        'amount' => $row['amount'],
                        'due_date' => $row['due_date'],
                        'date' => $row['date'],
                        'time' => $row['time'],
                        'status' => $row['status']
                    );
                }
            }
        }

        $this->con->close();
        return $data;
	}

	public function update($param = array())
	{
        $id = $param['id'];
        $tenant = $param['tenant'];
		$unit_consumed = $param['unit_consumed'];
		$amount = $param['amount'];
		$due_date = $param['due_date'];
        $data = array();

        $sql = "UPDATE `electricitybill` 
        SET `tenants_id`='" . $tenant . "',`unit_consumed`='" . $unit_consumed . "',`amount`='" . $amount . "',`due_date`='" . $due_date . "'
        WHERE id = '" . $id . "'";
        if ($this->con->query($sql) === TRUE) {
            
            $data = array(
                'result' => 'success',
                'message' => 'success'
            );
        } else {
            $data = array(
                'result' => 'failed',
                'message' => "Error updating record: " . $conn->error
            );
        }
        $this->con->close();
        return $data;
	}

	public function delete($param = array())
	{
	}
	

}
?>