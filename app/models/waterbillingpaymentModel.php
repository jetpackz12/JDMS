<?php

/**
 * 
 */
class waterbillingpaymentModel extends model
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
		$prev_read = $param['prev_read'];
		$pres_read = $param['pres_read'];
		$amount = $param['amount'];
		$due_date = $param['due_date'];
        $date = date("Y-m-d");
        $time = date("h:i:sa");
        $status = 1;
        $data = array();

        $sql = "INSERT INTO `waterbill`(`tenants_id`, `prev_reading`, `pres_reading`, `amount`, `due_date`, `date`, `time`, `status`) 
        VALUES ('". $tenant ."','". $prev_read ."','". $pres_read ."','". $amount ."','". $due_date ."','". $date ."','". $time ."','". $status ."')";
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

        $sql = "SELECT waterbill.`id`, waterbill.`tenants_id`, tenants.`fname`, tenants.`mname`, tenants.`lname`,
        waterbill.`prev_reading`, waterbill.`pres_reading`, waterbill.`amount`, waterbill.`due_date`, waterbill.`date`,
        waterbill.`time`, waterbill.`status` 
        FROM `waterbill` 
        INNER JOIN tenants 
        ON waterbill.tenants_id = tenants.id ";

        $result = $this->con->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                if($row['id'] == $id){
                    $data = array(
                        'result' => 'ok',
                        'id' => $row['id'],
                        'tenants_id' => $row['tenants_id'],
                        'tenants_fullname' => $row['fname'] . " " . $row['mname'] . " " . $row['lname'],
                        'prev_reading' => $row['prev_reading'],
                        'pres_reading' => $row['pres_reading'],
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
		$prev_read = $param['prev_read'];
		$pres_read = $param['pres_read'];
		$amount = $param['amount'];
		$due_date = $param['due_date'];
        $data = array();

        $sql = "UPDATE `waterbill` 
        SET `tenants_id`='" . $tenant . "',`prev_reading`='" . $prev_read . "',`pres_reading`='" . $pres_read . "',
        `amount`='" . $amount . "',`due_date`='" . $due_date . "' WHERE id = '". $id ."'";
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