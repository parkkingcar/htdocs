<?php
include 'MakeDB.php';
$log = $_COOKIE['google'];

$db = new LoadDB();
$conn = $db->connDB();

$cul = "SELECT * FROM `admin` WHERE `email` LIKE '" .$log ."'";
$result = $conn->query($cul);
$iter = $result->fetch_assoc();

if(isset($iter)){
    setcookie('google', '', time()-3600000);
    $_SESSION['admin'] = $log;
    echo "<script>window.location.href='index.php'</script>";
}
else{
    echo "<script>alert('회원이 아닙니다.')</script>";
    echo "<script>window.location.href='admin.php'</script>";
}
?>