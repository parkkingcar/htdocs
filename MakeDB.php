<?php

class MakeDB
{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = 'rozenthal7';
    private $dbname = "Mydb";

    public function setDB(){
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        return $conn;
    }


    public function setLoginDB(){

    }

    public function setContent(){

    }

    public function getLoginDB(){

    }

    public function getContent(){

    }
}


?>