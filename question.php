<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>온라인 문의</title>
</head>
<body>
<?php include 'Menu.php'; ?>

<?php
$menu = new Menu();
$menu->printMenuAn("온라인 문의");
$list = array();
$menu->printSide($list);
?>

</body>



</html>