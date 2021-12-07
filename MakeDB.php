<?php

class MakeDB
{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';

    public function setDB(){
        $conn = new mysqli($this->servername, $this->username, $this->password);

        $sql = "Create TABLE AdminLogin(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(40),
)";

        $content_sql ="Create TABLE Content(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(10) NOT NULL,
    email VARCHAR(15) NOT NULL,
)";

        $file_sql = "Create TABLE File(
    FileId int NOT NULL PRIMARY KEY,
    FileAddress VARCHAR(100) NOT NULL,
    id int,
    FOREIGN KEY(id) REFERENCES Content(id) on CASCADE,
)";
        $conn->query($sql);
        $conn->query($content_sql);
        $conn->query($file_sql);
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