<?php

/**
 * 
 */
class getDataModel extends model
{
	private $con;

    public function __construct(){
        $db = new database();
        $this->con = $db->connection();
    }

	public function getRooms(){
        $data=[];
        $sql = "SELECT * FROM `rooms`";
        $result = $this->con->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
               $data[] = $row;
            }
        }

        $this->con->close();
        return $data;

    }

    public function getTenants(){
        $data=[];
        $sql = "SELECT * FROM `tenants`";
        $result = $this->con->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
               $data[] = $row;
            }
        }

        $this->con->close();
        return $data;

    }

}
?>