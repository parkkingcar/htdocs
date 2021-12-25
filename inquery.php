<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/question.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>문의</title>
</head>
<body>

<?php
include "Menu.php";
$menu = new Menu();

$menu->printMenu();
$menu->printMenuAn("온라인문의");
$list = array();
$menu->printSide($list);
?>
<div class="right">
    <form action="CreateGuest.php" method="post" enctype="multipart/form-data">
        <div class="mb4">
            <!--이름-->
            <label for="exampleFormControlInput1" class="form-label">제목</label>
            <input type="input" class="form-control" id="exampleFormControlInput1" name="title">

            <!--이메일-->
            <label for="exampleFormControlInput1" class="form-label">이메일</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name="email">

            <!--비밀번호-->
            <label for="exampleFormControlInput1" class="form-label">비밀번호</label>
            <input type="password" class="form-control" id="inputPassword" name="password">

            <!--파일 업로드 -->
            <input class="form-control" type="file" id="formFile" name="file" multiple="multiple">

            <!--문의사항-->
            <label for="exampleFormControlInput1" class="form-label">문의사항</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" cols="30" rows="10" name="content"></textarea>
            <button type="submit" class="btn btn-light write mar">저장</button>
        </div>
    </form>
</div>

<div class="foot"></div>
<?php $menu->printFooter(); ?>


</body>
</html>