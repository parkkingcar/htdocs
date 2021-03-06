<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/question.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>대표인사말</title>
</head>
<body>
<?php

if(!isset($_SESSION['admin'])) echo "<script>window.location.href='index.php'</script>";

include 'Menu.php';
include 'MakeDB.php';
$menu = new Menu();

$menu->printMenu();
$menu->printMenuAn("대표인사말");
$list = array('대표인사말', '회사연혁', '오시는길');
$menu->printSide($list);

$db = new LoadDB();
$conn = $db ->connDB();
$sql = "SELECT * FROM `introduce` WHERE `id` = 1";
$result = $conn->query($sql);
$content = $result->fetch_assoc();

?>

<script src="./js/introduce.js" type="text/javascript"></script>
<div class="right">
    <form action="registerIntro.php" method="post">
        <img src="./img/ceo.jpg" style="width:40%;height:20%;float:left">
        <textarea class="form-control" id="exampleFormControlTextarea1" cols="30" rows="10" name="content"><?=$content['content']?></textarea>
        <button type="submit" class="btn btn-light write" style="float:right;" id="introcorrect">수정</button>
    </form>
</div>

<div clas="right">
</div>

<?php
if(isset($_SESSION['admin'])){ ?>

<?php }?>

</body>
</html>
