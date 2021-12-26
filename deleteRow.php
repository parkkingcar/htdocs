<?php

$id = $_REQUEST['del'];

include 'MakeDB.php';
$db = new LoadDB();
$conn = $db->connDB();

foreach($id as $key){
    $sql = "DELETE FROM `guest` WHERE `guest`.`id` = ".$key;
    $conn->query($sql);
}

$dir = './upload/';
foreach($id as $key){
    $dir = $dir.$key;
    rmdir($dir);
}

echo "<script>window.location.href='adminQuestion.php';</script>"

?>
