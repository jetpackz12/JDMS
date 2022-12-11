<?php

/**
 * 
 */
class tenantsModel extends model
{
	private $con;

    public function __construct(){
        $db = new database();
        $this->con = $db->connection();
    }

	public function store($param = array())
	{
        date_default_timezone_set('Asia/Manila');
        $room = $param['room'];
		$fname = $param['fname'];
		$mname = $param['mname'];
		$lname = $param['lname'];
		$address = $param['address'];
		$contact = $param['contact'];
		$deposit = $param['deposit'];
		$advance = $param['advance'];
        $date = date("Y-m-d");
        $time = date("h:i:sa");
        $status = 1;
        $data = array();

        $sql = "INSERT INTO `tenants`(`room_number`, `fname`, `mname`, `lname`, `address`, `contact_number`, 
        `deposit`, `advance`, `date`, `time`, `status`) 
        VALUES ('" . $room . "','" . $fname . "','" . $mname . "','" . $lname . "','" . $address . "','" . $contact . "'
        ,'" . $deposit . "','" . $advance . "','" . $date . "','" . $time . "','" . $status . "')";
        if ($this->con->query($sql) === TRUE) {
            $this->updateOccupiesRoom($room, '1');
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

        $sql = "SELECT * FROM `tenants` where id = '" . $id . "'";
        $result = $this->con->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                $data = array(
                    'result' => 'ok',
                    'id' => $row['id'],
                    'room_number' => $row['room_number'],
                    'fname' => $row['fname'],
                    'mname' => $row['mname'],
                    'lname' => $row['lname'],
                    'address' => $row['address'],
                    'contact_number' => $row['contact_number'],
                    'deposit' => $row['deposit'],
                    'advance' => $row['advance'],
                    'date' => $row['date'],
                    'time' => $row['time'],
                    'status' => $row['status']
                );
            }
        }

        $this->con->close();
        return $data;
	}

	public function update($param = array())
	{
        $id = $param['id'];
        $room_id = $param['room_id'];
        $room = $param['room'];
		$fname = $param['fname'];
		$mname = $param['mname'];
		$lname = $param['lname'];
		$address = $param['address'];
		$contact = $param['contact'];
		$deposit = $param['deposit'];
		$advance = $param['advance'];
        $data = array();

        $sql = "UPDATE `tenants` 
        SET `room_number`='" . $room . "',`fname`='" . $fname . "',`mname`='" . $mname . "',`lname`='" . $lname . "',`address`='" . $address . "'
        ,`contact_number`='" . $contact . "',`deposit`='" . $deposit . "',`advance`='" . $advance . "'
         WHERE id = '" . $id . "'";
        if ($this->con->query($sql) === TRUE) {

            if($room_id != $room){
                $this->updateSubOccupiesRoom($room_id, '1');
                $this->updateAddOccupiesRoom($room, '1');
            } 
            
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
        $id = $param['id'];
        $room_id = $param['room_id'];
        $data = array();

        $sql = "UPDATE `tenants` 
        SET `status`='0'
        WHERE id = '" . $id . "'";
        if ($this->con->query($sql) === TRUE) {
            $this->updateSubOccupiesRoom($room_id, '1');
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

    public function updateAddOccupiesRoom($id, $value)
    {
        $occupies;
        $sql="SELECT `occupies` 
        FROM `rooms` 
        WHERE id = '" . $id . "'";
        $result = $this->con->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                $occupies = $row['occupies']+$value;
            }
        }

        // $occupies = $result . $value;

        $sqlupdate = "UPDATE `rooms` 
        SET `occupies`='" . $occupies. "' 
        WHERE id = '" . $id . "'";
        $this->con->query($sqlupdate);
    }

    public function updateSubOccupiesRoom($id, $value)
    {
        $occupies;
        $sql="SELECT `occupies` 
        FROM `rooms` 
        WHERE id = '" . $id . "'";
        $result = $this->con->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                $occupies = $row['occupies']-$value;
            }
        }

        // $occupies = $result . $value;

        $sqlupdate = "UPDATE `rooms` 
        SET `occupies`='" . $occupies. "' 
        WHERE id = '" . $id . "'";
        $this->con->query($sqlupdate);
    }
	

}
?>