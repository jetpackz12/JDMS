<?php

class loginModel extends model
{
    private $con;

    public function __construct(){
        $db = new database();
        $this->con = $db->connection();
    }

    public function authentication($param=array())
    {
        $username = $param['username'];
        $password = $param['password'];
        $data = array();

        $sql = "SELECT * FROM users WHERE status = 1";

        $result = $this->con->query($sql);

        if($result->num_rows > 0){

            while($row = $result->fetch_assoc()){

                if($row['username'] == $username){

                    if($row['password'] == $password){

                        $data = array(
                            'result' => 'success',
                            'id'   => $row['id'],
                            'name'   => $row['name'],
                            'username'   => $row['username'],
                            'password'   => $row['password']
                        );

                    }else{

                        $data = array(
                            'result' => 'password'
                        );

                    }

                }else{
                    $data = array(
                        'result' => 'username'
                    );
                }
            }

        }

        $this->con->close();
        return $data;

    }

}