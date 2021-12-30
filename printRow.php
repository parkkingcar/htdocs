<?php
$row = $_REQUEST['q']; // 출력해야할 행의 갯수 5, 10, 15
$page = $_REQUEST['page']; //현재 내가 있는 페이지
$dbrow = $_REQUEST['dbrow']; //db의 갯수

$db = $_SESSION['db']; // 내 db 받아온거

$first = $row * ($page - 1) + 1;

$last = $first + $row - 1;
$tmp = $dbrow - ($page * $row);
if($tmp < 0) $last = $first + $dbrow % $row - 1;

for($i = $first; $i <= $last; $i++){
    $day = substr($db[$i - 1][5], 5, 5);
    echo "<tr>";
    echo "<th scop='row' class='deleteConfirm'>"
        ."<input class='form-check-input' type='checkbox' id='flexCheckDefault' name='del' value="
        .$db[$i-1][0].">"
        ."<spane class='del'>"
        .$i
        ."</a></th>";

    echo "<th scop='row'><a href='correctInquery.php?id='<?=$i-1?>>".($db[$i - 1][1])."</a></th>";
    echo "<th scop='row'>".($day)."</th>";
    echo "<th scop='row'>".($db[$i - 1][7])."</th>";
    echo "</tr>";
}
?>