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
include "MakeDB.php";
$menu = new Menu();

$menu->printMenu();
$menu->printMenuAn("연혁 수정");
$list = array("삭제", "추가");
if(!isset($_SESSION)) array_push($list, '로그아웃');
$menu->printSide($list);


$db = new LoadDB();
$conn = $db->connDB();

$sql = "SELECT * FROM `history` ORDER BY `history`.`date` DESC";
$result = $conn->query($sql);
$history = $result->fetch_all();
$conn->close();

$_SESSION['history'] = $history;

?>

<script src="./js/historyCorrect.js" type="text/javascript"></script>
<div class="right">
    <form action="registerHistory.php" method="post" id="controlDel">
    <?php
    for($i = 0; $i < count($history); $i++){ ?>
        <div class="checkDelete">
            <p style="font-weight:bold;" class="deletenum"><?=$i+1?></p>
        </div>
        <div>
            <label for="exampleFormControlInput1" class="form-label">날짜</label>
            <input type="date" class="form-control" id="exampleFormControlInput1" name="date[]" value=<?=$history[$i][2] ?>>

            <label for="exampleFormControlInput1" class="form-label">제목</label>
            <input type="input" class="form-control" id="exampleFormControlInput1" name="title[]" value=<?=$history[$i][1] ?>>

            <label for="exampleFormControlInput1" class="form-label">내용</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" cols="30" rows="10" name="content[]"><?=$history[$i][3]?></textarea>
        </div>
    <?php }?>
        <button type="submit" class="btn btn-light write" style="float:right;">확인</button>
    </form>

</div>
</body>
