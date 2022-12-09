<?php

/**
 * 
 */
class roomsModel extends model
{
	private $con;

    public function __construct(){
        $db = new database();
        $this->con = $db->connection();
    }

	public function store($param = array())
	{
        date_default_timezone_set('Asia/Manila');
        $image = $param['response'];
        $roomnum = $param['roomnum'];
        $description = $param['description'];
        $type = $param['type'];
        $date = date("yy-m-d");
        $time = date("h:i:sa");
        $status = 1;
        $data = array();

        $sqlcheckroomnum = "SELECT `room_num` FROM `rooms` 
                            WHERE room_num = '" . $roomnum . "'
                            AND status = '1'";
        $result = $this->con->query($sqlcheckroomnum);
        if($result->num_rows > 0){
            $data = array(
                'result' => 'roomnum',
                'message' => 'Invalid room number'
            );
        }else{
            $sql = "INSERT INTO `rooms`(`image`, `room_num`, `description`, `type`, `date`, `time`, `status`) 
            VALUES ('". $image ."','". $roomnum ."','". $description ."','". $type ."','". $date ."','". $time ."','". $status ."')";
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
        }
        
        $this->con->close();
        return $data;
	}

	public function edit($id)
	{
        $data = array();

        $sql = "SELECT * FROM `rooms` where id = '" . $id . "'";
        $result = $this->con->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                $data = array(
                    'result' => 'ok',
                    'id' => $row['id'],
                    'image' => $row['image'],
                    'room_num' => $row['room_num'],
                    'description' => $row['description'],
                    'type' => $row['type'],
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
        $image = $param['response'];
        $roomnum = $param['roomnum'];
        $description = $param['description'];
        $type = $param['type'];
        $data = array();

        $sql = "UPDATE `rooms` SET `image`='" . $image . "',`room_num`='". $roomnum . "',`description`='" . $description . "',`type`='" . $type . "'
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

    public function updateNoImage($param = array())
	{
        $id = $param['id'];
        $roomnum = $param['roomnum'];
        $description = $param['description'];
        $type = $param['type'];
        $data = array();

        $sql = "UPDATE `rooms` SET `room_num`='". $roomnum . "',`description`='" . $description . "',`type`='" . $type . "'
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

	public function delete()
	{

	}
	

}
?>