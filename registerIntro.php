<?php
if(!isset($_SESSION['admin'])) echo "<script>window.location.href='index.php'</script>";

$content = $_REQUEST['content'];

include 'MakeDB.php';
$db = new LoadDB();
$conn = $db->connDB();

$sql = "UPDATE `introduce` SET `content` = '" .$content ."' WHERE `introduce`.`id` = 1";

if($conn->query($sql) === TRUE){
    $conn->close();
    echo "<script>window.location.href='introduce.php'</script>";
}
else{
    echo "false";
}

?>