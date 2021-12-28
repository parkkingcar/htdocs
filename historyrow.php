<?php

$mode = $_REQUEST['mode'];
$db = $_SESSION['history'];
$chk = $_REQUEST['del'];

if($mode == 1){
    for($i = 0; $i < count($db); $i++){
        echo "<div class='checkDelete'>";
        echo "<input type='checkbox' name='delcheck' class='checkdel' value='" .$db[$i][0] ."'>";
        echo "</div>";
        echo "<div>";
        echo "<label for='exampleFormControlInput1' class='form-label'>날짜</label>";
        echo "<input type='date' class='form-control' id='exampleFormControlInput1' name='date[]' value= '" .$db[$i][2]."'>";
        echo "<label for='exampleFormControlInput1' class='form-label'>제목</label>";
        echo "<input type='input' class='form-control' id='exampleFormControlInput1' name='title[]' value='".$db[$i][1]."'>";
        echo "<label for='exampleFormControlInput1' class='form-label'>내용</label>";
        echo "<textarea class='form-control' id='exampleFormControlTextarea1' cols='30' rows='10' name='content[]'>".$db[$i][3]."</textarea>";
        echo "</div>";
    }
    echo "<button type='submit' class='btn btn-light write' style='float:right;'>확인</button>";
}
else if($mode == 2){
    include "MakeDB.php";
    $db = new LoadDB();
    $conn = $db->connDB();

    for($i = 0; $i < count($chk); $i++){
        $sql = "DELETE FROM `history` WHERE `history`.`id` = " .$chk[$i];
        $conn->query($sql);
    }
    $sql = "SELECT * FROM `history` ORDER BY `history`.`date` DESC";
    $result = $conn->query($sql);
    $history = $result->fetch_all();
    $conn->close();

    $_SESSION['history'] = $history;
    for($i = 0; $i < count($history); $i++){
        echo "<div class='checkDelete'>";
        echo "<p style='font-weight:bold;' class='deletenum'>" .$i+1 ."</p>";
        echo "</div>";
        echo "<div>";
        echo "<label for='exampleFormControlInput1' class='form-label'>날짜</label>";
        echo "<input type='date' class='form-control' id='exampleFormControlInput1' name='date[]' value= '" .$history[$i][2]."'>";
        echo "<label for='exampleFormControlInput1' class='form-label'>제목</label>";
        echo "<input type='input' class='form-control' id='exampleFormControlInput1' name='title[]' value='".$history[$i][1]."'>";
        echo "<label for='exampleFormControlInput1' class='form-label'>내용</label>";
        echo "<textarea class='form-control' id='exampleFormControlTextarea1' cols='30' rows='10' name='content[]'>".$history[$i][3]."</textarea>";
        echo "</div>";
    }
    echo "<button type='submit' class='btn btn-light write' style='float:right;'>확인</button>";
}
else if($mode == 3){
    echo "<div class='checkDelete'>";
    echo "<p style='font-weight:bold;' class='deletenum'>" ."new!" ."</p>";
    echo "</div>";
    echo "<div>";
    echo "<label for='exampleFormControlInput1' class='form-label'>날짜</label>";
    echo "<input type='date' class='form-control' id='exampleFormControlInput1' name='date[]' " .">";
    echo "<label for='exampleFormControlInput1' class='form-label'>제목</label>";
    echo "<input type='input' class='form-control' id='exampleFormControlInput1' name='title[]' ".">";
    echo "<label for='exampleFormControlInput1' class='form-label'>내용</label>";
    echo "<textarea class='form-control' id='exampleFormControlTextarea1' cols='30' rows='10' name='content[]'>"."</textarea>";
    echo "</div>";
}

?>
