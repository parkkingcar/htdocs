<?php
$title = $_REQUEST['title'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$content = $_REQUEST['content'];
$files = $_FILES['files'];


include 'MakeDB.php';
$db = new LoadDB();
$conn = $db->connDB();

$insert = "INSERT INTO `guest` (`id`, `name`, `email`, `password`, `content`, `day`, `inquirer`, `views`) VALUES (NULL, '"
    .$title ."', '" .$email ."', '" .$password ."', '" .$content
    ."', current_timestamp(), '"  .$name ."', '0')";
if($conn->query($insert) === TRUE){
    $pk = $conn->insert_id;
    if(isset($files)){
        $dir = "./upload/".$pk;
        if(!is_dir($dir)) mkdir($dir);

        //해당 폴더에 파일을 집어넣어야 한다.
        $dir = $dir."/";
        foreach($files['error'] as $key=>$error) move_uploaded_file($files['tmp_name'][$key], $dir.basename($files['name'][$key]));
    }
}
else{
    die($conn->error);
}
echo "<script>window.location.href='question.php';</script>";

$conn->close();
?>
