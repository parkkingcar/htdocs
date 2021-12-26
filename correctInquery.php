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
$list = array("글 확인", "로그아웃");
$menu->printSide($list);

$id = $_GET['id'];
$db = $_SESSION['db'];
$_SESSION['dataId'] = $db[$id][0];
?>

<script src="./js/correctquery.js" type="text/javascript"></script>
<div class="right">
    <form action="correctOnline.php" method="post" enctype="multipart/form-data" id="dytag">
        <button type="button" class="btn btn-light" id="correct" style="float:right;">수정</button>
        <div style="height:55px;"></div>
        <div class="mb4">
            <!--제목-->
            <label for="exampleFormControlInput1" class="form-label">제목</label>
            <input type="input" class="form-control" id="exampleFormControlInput1" name="title" value="<?=$db[$id][1] ?>" disabled="disabled">

            <!--문의자 -->
            <label for="exampleFormControlInput1" class="form-label">문의자</label>
            <input type="input" class="form-control" id="exampleFormControlInput1" name="name" value="<?=$db[$id][6] ?>" disabled>

            <!--이메일-->
            <label for="exampleFormControlInput1" class="form-label">이메일</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name="email" value="<?=$db[$id][2] ?>" disabled>

            <!--비밀번호-->
            <label for="exampleFormControlInput1" class="form-label">비밀번호</label>
            <input type="password" class="form-control" id="inputPassword" name="password" value="<?=$db[$id][3] ?>" disabled>

            <!--파일 업로드 -->
            <label for="exampleFormControlInput1" class="form-label">파일</label><br>
            <div id="fileContent">
                <?php
                $dir = "./upload/".$db[$id][0];
                $file_name = scandir($dir);
                for($i = 2; $i <= count($file_name); $i++){
                    $download_file = $dir ."/" .basename($file_name[$i]);
                    ?>
                    <a href=<?=$download_file?> download=<?=$file_name[$i]?>><?=$file_name[$i]?></a><br>
                <?php } ?>
            </div>
            <div id="fileUpload">
                <input class="form-control" type="file" id="formFile" name="files[]" multiple="multiple">
            </div>

            <!--문의사항-->
            <label for="exampleFormControlInput1" class="form-label">문의사항</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" cols="30" rows="10" name="content" disabled><?=$db[$id][4] ?></textarea>
            <div>
                <button type="button" class="btn btn-light write mar" style="float:right;" id="submitbtn"><a href="question.php">확인</a></button>
            </div>
        </div>
    </form>
</div>

<div class="foot"></div>


</body>
</html>
