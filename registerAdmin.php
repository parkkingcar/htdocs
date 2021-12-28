<?php

$log = $_COOKIE['google'];

include 'MakeDB.php';
$db = new LoadDB();
$conn = $db->connDB();

$cul = "SELECT * FROM `admin` WHERE `email` LIKE '" .$log ."'";

$result = $conn->query($cul);
$iter = $result->fetch_assoc();
if(isset($iter)){
    echo "<script>alert('회원 정보가 이미 있습니다.')</script>";
    echo "<script>window.location.href='admin.php'</script>";
}
else{
    $sql = "INSERT INTO `admin` (`id`, `email`) VALUES (NULL, '" .$log."')";
    if($conn->query($sql) === TRUE) echo "<script>window.location.href='index.php'</script>";
    else echo "NO";
}

setcookie('google', '', time()-3600000);
$conn->close();

?>
