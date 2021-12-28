<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/question.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>온라인 문의</title>
</head>
<body>
<?php include 'Menu.php'; ?>
<?php
$menu = new Menu();
$menu->printMenu();
$menu->printMenuAn("오시는 길");
$list = array("대표인사말", "회사연혁", "오시는길");
$menu->printSide($list);
?>

<div class="right">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3161.1173548692173!2d126.86295401527076!3d37.5993969797917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c9a2b1f60d951%3A0xa3ebc1376c4ecf47!2z7ZWc6rWt7ZWt6rO164yA7ZWZ6rWQ!5e0!3m2!1sko!2skr!4v1640620279269!5m2!1sko!2skr" id="map" allowfullscreen="" loading="lazy"></iframe>
    <p>Address: 항공한국대학교</p>
    <p>Customer Center: 010-3299-5862</p>
    <p>E-mail: 5862www@kau.kr</p>
</div>

<div class="foot"></div>
<?php
$menu->printFooter();
?>
</body>
</html>
