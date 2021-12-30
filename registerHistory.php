<?php

$date = $_REQUEST['date'];
$title = $_REQUEST['title'];
$content = $_REQUEST['content'];

include 'MakeDB.php';
$db = new LoadDB();
$conn = $db->connDB();

$sql = "DELETE FROM `history`";
$conn->query($sql);

for($i = 0; $i < count($date); $i++){
    $list = "INSERT INTO `history` (`id`, `title`, `date`, `content`) VALUES (NULL, '".$title[$i]."', '".$date[$i]."', '".$content[$i]."')";
    if($conn->query($list) === TRUE) continue;
    echo $conn->error;

}



$conn->close();
echo "<script>window.location.href='history.php'</script>";

?>
