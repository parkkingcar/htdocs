<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>온라인 문의</title>
</head>
<body>
<?php include 'Menu.php'; ?>
<?php
$menu = new Menu();
$menu->printMenu();
$menu->printMenuAn("온라인 문의");
$list = array("글 확인", "로그아웃");
$menu->printSide($list);
?>
<link rel="stylesheet" href="./css/question.css">
<!-- db연결-->
<?php
include 'MakeDB.php';
$db = new LoadDB();
$conn = $db->connDB();


$select = "SELECT * FROM guest";
$result = $conn->query($select);

if(isset($_COOKIE['guest'])){
    $guest = $_COOKIE['guest'];
    $password = $_COOKIE['password'];
    $content = "SELECT * FROM `guest` WHERE `email` LIKE '" .$guest ."' AND `password` LIKE '" .$password ."'";
}
else if(isset($_SESSION['email'])){
    $guest = $_SESSION['email'];
    $password = $_SESSION['password'];
    $content = "SELECT * FROM `guest` WHERE `email` LIKE '" .$guest ."' AND `password` LIKE '" .$password ."'";
}
else{
    echo "<script>window.location.href='index.php'</script>";
}


$content_db = $conn->query($content);

//page와 행의 갯수 정하기
$num = $content_db->num_rows;
$defualt_row = 5;

$tmp1 = intval($num / $defualt_row);

$tmp2 = $num % $defualt_row;
$page = $tmp1;
if($tmp2 > 0) $page = $page + 1;

//초기 행 갯수
$row = 5;

if($tmp1 == 0) $row = $tmp2;

$rowContent = $content_db->fetch_all();
$_SESSION['db'] = $rowContent;
?>
<p id="cnt" style="display: none;"><?=$page?></p>
<p id="pagecnt" style="display: none;">1</p>
<p id="rowcnt" style="display:none;"><?=$num?></p>

<script src="./js/question.js" type="text/javascript"></script>
<div class="right">
    <div>
        <button type="button" class="btn btn-light write" id="writer">글쓰기</button>
    </div>

    <div style="width: 100%; height: 60px;">
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="selectCnt">
            <option value="5" selected>5</option>
            <option value="10" >10</option>
            <option value="15">15</option>
        </select>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scop="col" style="width:7%;">#</th>
            <th scop="col" style="width:48%;">제목</th>
            <th scop="col" style="width:18%;">작성일</th>
            <th scop="col" style="width:12%;">조회</th>
        </tr>
        </thead>
        <tbody id="content">
        <!--db 내용 붙이기-->
        <?php for($i = 1; $i <= $row; $i++){
            $day = substr($rowContent[$i-1][5], 5, 5);
            ?>
            <tr id="contentSize">
                <th scop="row" class="deleteConfirm"><?=$i?></th>
                <th scop="row"><a href="correctInquery.php?id=<?=$i-1?>"><?=$rowContent[$i-1][1] ?></a></th>
                <th scop="row" id="day"><?=$day ?></th>
                <th scop="row"><?=$rowContent[$i-1][7] ?></th>
                <th scop="row">   </th>

            </tr>
        <?php }?>
        </tbody>
    </table>

    <div class="confirm">
        <button type="button" class="btn btn-light write" style="float:right;"><a href="logout.php">로그아웃</a></button>
    </div>

    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous" id="previous"">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#" id="firstPage">1</a></li>
            <li class="page-item"><a class="page-link" href="#" id="secondPage">2</a></li>
            <li class="page-item"><a class="page-link" href="#" id="thirdPage">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next" id="next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>

</div>
<div id="delete"></div>
<div>
</div>
<div class="foot"></div>
<?php
$menu->printFooter();
$conn->close();
?>

</body>
</html>