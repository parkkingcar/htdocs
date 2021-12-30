<?php

class LoadDB
{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '000000';
    private $dbname = "mydb";

    public function connDB(){
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        return $conn;
    }
}

class IntroContent{
    private $introContent;


    public function setIntroContent($content){
        $this->introContent = $content;
    }

    public function getIntroContent(){
        return $this->introContent;
    }

}


?>