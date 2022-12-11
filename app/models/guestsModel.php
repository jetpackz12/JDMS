<?php

/**
 * 
 */
class guestsModel extends model
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
		$duration = $param['duration'];
		$payment = $param['payment'];
        $date = date("Y-m-d");
        $time = date("h:i:sa");
        $status = 1;
        $data = array();

        $sql = "INSERT INTO `guests`(`room_number`, `fname`, `mname`, `lname`, `address`, `contact_number`, 
        `duration`, `payment`, `date`, `time`, `status`) 
        VALUES ('" . $room . "','" . $fname . "','" . $mname . "','" . $lname . "','" . $address . "','" . $contact . "'
        ,'" . $duration . "','" . $payment . "','" . $date . "','" . $time . "','" . $status . "')";
        if ($this->con->query($sql) === TRUE) {
            $this->updateRoomStatus($room, '0');
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

        $sql = "SELECT * FROM `guests` where id = '" . $id . "'";
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
                    'duration' => $row['duration'],
                    'payment' => $row['payment'],
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
		$duration = $param['duration'];
		$payment = $param['payment'];
        $data = array();

        $sql = "UPDATE `guests` 
        SET `room_number`='" . $room . "',`fname`='" . $fname . "',`mname`='" . $mname . "',`lname`='" . $lname . "',`address`='" . $address . "'
        ,`contact_number`='" . $contact . "',`duration`='" . $duration . "',`payment`='" . $payment . "'
         WHERE id = '" . $id . "'";
        if ($this->con->query($sql) === TRUE) {

            if($room_id != $room){
                $this->updateRoomStatus($room_id, '1');
                $this->updateRoomStatus($room, '0');
            } 
            
            $data = array(
                'result' => 'success',
                'message' => 'success'
            );
        } else {
            $data = array(
                'result' => 'failed',
                'message' => "Error updating record: " . $this->con->error
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

        $sql = "UPDATE `guests` 
        SET `status`='0'
        WHERE id = '" . $id . "'";
        if ($this->con->query($sql) === TRUE) {
            $this->updateRoomStatus($room_id, '1');
            $data = array(
                'result' => 'success',
                'message' => 'success'
            );
        } else {
            $data = array(
                'result' => 'failed',
                'message' => "Error updating record: " . $this->con->error
            );
        }
        $this->con->close();
        return $data;
	}

    public function updateRoomStatus($id, $value)
    {
        $sqlupdate = "UPDATE `rooms` 
        SET `status`='" . $value. "' 
        WHERE id = '" . $id . "'";
        $this->con->query($sqlupdate);
    }
	

}
?>