<?php

class MakeDB
{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = 'rozenthal7';
    private $dbname = "Mydb";

    public function setDB(){
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        $f = "CREATE TABLE file(
    id INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    guest INT(50),
    file VARCHAR(40)
)";

        if($conn->query($f) === TRUE) echo "true file";
        else echo "false because " . $conn->error;



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

$a = new MakeDB();
$a->setDB();

?>