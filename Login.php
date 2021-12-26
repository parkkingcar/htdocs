<?php
include 'MakeDB.php'; // 데이테베이스 연결
$db = new LoadDB();
$conn = $db->connDB(); // myguest db 연결


$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$cookie = $_REQUEST['cookie'];


$sql = "SELECT * FROM `guest` WHERE `email` LIKE '" .$email ."' AND " ."`password` LIKE '" .$password ."'";
$login = $conn->query($sql);

$row = $login->fetch_assoc();

if(!isset($row)){
    echo "<script> alert('정보가 없습니다.');</script>";
    echo "<script> window.location.href='inquery.php';</script>";
}
else{
    session_start();
    if($cookie == 'true'){
        setcookie('guest', $email, time() + 3600);
        setcookie('password', $password, time() + 3600);
    }
    else{
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
    }

    echo "<script>window.location.href='question.php';</script>";
}

?>
