<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/question.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>로그인</title>
</head>
<body>
<?php
if(isset($_SESSION['admin'])) echo "<script>window.location.href='adminQuestion.php';</script>";
elseif(isset($_COOKIE['guest'])) echo "<script>window.location.href='question.php';</script>";
else if(isset($_SESSION['email']) and isset($_SESSION['password'])) echo "<script>window.location.href='question.php';</script>";

include 'Menu.php';

$arr = array();

$menu = new Menu();
$menu->printMenu();
$menu->printMenuAn("로그인");
$menu->printSide($arr);


?>

<div class="right">
    <form action="Login.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">이메일</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">비밀번호</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <div style="width:10px;height:10px;"></div>
        <div>
            <button type="submit" class="btn btn-primary" style="float: right;">로그인</button>
            <div style="float:right; margin-right:2%;">로그인 유지<input  type="checkbox" value="true" name="cookie" id="flexCheckDefault"></div>
        </div>
    </form>
</div>

<div class="foot"></div>
<?php
$menu->printFooter();

?>

</body>
</html>