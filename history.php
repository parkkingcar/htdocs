<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/question.css">
    <link rel="stylesheet" href="./css/history.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>연혁</title>
</head>
<body>
<?php

include 'Menu.php';
include 'MakeDB.php';
$menu = new Menu();

$menu->printMenu();
$menu->printMenuAn("연혁");
$list = array('대표인사말', '회사연혁', '오시는길');
$menu->printSide($list);


$db = new LoadDB();
$conn = $db->connDB();

$sql = "SELECT * FROM `history` ORDER BY `history`.`date` DESC";
$result = $conn->query($sql);
$history = $result->fetch_all();
$conn->close();

?>

<div class="right">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div id="content">
                            <ul class="timeline">
                                <?php
                                for($i = 0; $i < count($history); $i++){ ?>
                                    <li class="event" data-date=<?=$history[$i][2] ?>>
                                        <h3><?=$history[$i][1]?></h3>
                                        <p><?=$history[$i][3]?></p>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="historyCorrect.php">
        <?php
        if(isset($_SESSION['admin'])){ ?>
            <button type="submit" class="btn btn-light write" style="float:right;">수정</button>
        <?php } ?>
    </form>
</div>

<div class="foot"></div>
<?php
$menu->printFooter();
?>
</body>
</html>
