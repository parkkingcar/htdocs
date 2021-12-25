<?php

$title = $_REQUEST['title'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$file = $_REQUEST['file'];
$content = $_REQUEST['content'];

include "MakeDB.php";
$db = new LoadDB();
$conn = $db->connDB();


$insert = "INSERT INTO `guest` (`id`, `name`, `email`, `password`, `content`) VALUES (NULL, '" .$title ."', '" .$email ."', '" .$password ."', '" .$content ."')";

if($conn->query($insert) === TRUE){
    $pk = $conn->insert_id;

}
else echo "Error" ."<br>" .$conn->error;

?>