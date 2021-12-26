<?php
$title = $_REQUEST['title'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$content = $_REQUEST['content'];
$files = $_FILES['files'];
$id = $_SESSION['dataId'];

include 'MakeDB.php';
$db = new LoadDB();
$conn = $db->connDB();

$update = "UPDATE `guest` SET `name` = '" .$title ."', `content` = '" .$content ."', `inquirer` = '" .$name ."' WHERE `guest`.`id` = " .$id;

if($conn->query($update) === TRUE){
    $dir = "./upload/".$id;
    $file_name = scandir($dir);
    for($i = 2; $i < count($file_name); $i++){
        $download_file = $dir ."/" .basename($file_name[$i]);
        unlink($download_file);
    }

    $dir = "./upload/".$id;
    if(!is_dir($dir)) mkdir($dir);
    $dir = $dir."/";
    foreach($files['error'] as $key=>$error) move_uploaded_file($files['tmp_name'][$key], $dir.basename($files['name'][$key]));
    echo "<script>window.location.href='question.php'</script>";
}
else{
    echo "Fail to Update";
}
$conn->close();

?>
