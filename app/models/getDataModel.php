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

    public function getRoomsWithStatus(){
        $data=[];
        $sql = "SELECT * FROM `rooms` WHERE status = '1'";
        $result = $this->con->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
               $data[] = $row;
            }
        }

        $this->con->close();
        return $data;

    }

    public function getRoomsWithNoTenant(){
        $data=[];
        $sql = "SELECT * FROM `rooms` WHERE occupies = '0'";
        $result = $this->con->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
               $data[] = $row;
            }
        }

        $this->con->close();
        return $data;

    }

    public function getRoomsWithNoTenantAndWithStatus(){
        $data=[];
        $sql = "SELECT * FROM `rooms` WHERE occupies = '0' And status = '1'";
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

    public function getGuests(){
        $data=[];
        $sql = "SELECT * FROM `guests` WHERE status = '1'";
        $result = $this->con->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
               $data[] = $row;
            }
        }

        $this->con->close();
        return $data;

    }

    public function getTenantsWithRoom(){
        $data=[];

        $sql = "SELECT tenants.`id`, tenants.`room_number`, rooms.`description`, rooms.`occupies`, rooms.`capacity`, 
        rooms.`type`, tenants.`fname`, tenants.`mname`, tenants.`lname`, tenants.`address`, tenants.`contact_number`, 
        tenants.`deposit`, tenants.`advance`, tenants.`date`, tenants.`time`, tenants.`status` 
        FROM `tenants` 
        INNER JOIN rooms 
        ON tenants.room_number = rooms.id ";

        $result = $this->con->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
               $data[] = $row;
            }
        }

        $this->con->close();
        return $data;

    }

    public function getWaterBillPayment(){
        $data=[];

        $sql = "SELECT waterbill.`id`, waterbill.`tenants_id`, tenants.`room_number`, tenants.`fname`, tenants.`mname`,
        tenants.`lname`, waterbill.`prev_reading`, waterbill.`pres_reading`, waterbill.`amount`, waterbill.`due_date`,
        waterbill.`date`, waterbill.`time`, waterbill.`status`
        FROM `waterbill`
        INNER JOIN tenants
        ON waterbill.tenants_id = tenants.id";

        $result = $this->con->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
               $data[] = $row;
            }
        }

        $this->con->close();
        return $data;

    }

    public function getElectricityBillPayment(){
        $data=[];

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
               $data[] = $row;
            }
        }

        $this->con->close();
        return $data;

    }

    public function getAllTenants(){
        $data='0';

        $sql = "SELECT COUNT(id) 
                as total_tenants 
                FROM `tenants` 
                WHERE status = 1";

        $result = $this->con->query($sql);
        $row = $result->fetch_assoc();

        $data = $row['total_tenants'];

        $this->con->close();
        return $data;
    }

    public function getAllRoomsAvailable(){
        $data='0';

        $sql = "SELECT COUNT(id) 
                as total_tenants 
                FROM `rooms` 
                WHERE occupies != capacity";

        $result = $this->con->query($sql);
        $row = $result->fetch_assoc();

        $data = $row['total_tenants'];

        $this->con->close();
        return $data;
    }

    public function getAllRoomsOccupied(){
        $data='0';

        $sql = "SELECT COUNT(id) 
                as total_tenants 
                FROM `rooms` 
                WHERE occupies = capacity";

        $result = $this->con->query($sql);
        $row = $result->fetch_assoc();

        $data = $row['total_tenants'];

        $this->con->close();
        return $data;
    }

    public function getAllGuests(){
        $data='0';

        $sql = "SELECT COUNT(id) 
                as total_tenants 
                FROM `guests` 
                WHERE status = 1";

        $result = $this->con->query($sql);
        $row = $result->fetch_assoc();

        $data = $row['total_tenants'];

        $this->con->close();
        return $data;
    }

}
?>