<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/homepage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body style="background-image: url('img/0012.png');background-repeat: no-repeat;">
<?php include 'Menu.php';?>

<?php
$menu = new Menu();
$menu->printMenu();
?>

<!--소개말 -->
<div class="intro">
    <div id="intor-sub">
        <h2 id="first-intro"><span id="first">No.01</span> <span style="font-size:35px;font-weight: bold;">e</span><span style="font-size:30px;font-weight: bold;">inP&I</span></h2>
        <h1 id="second-intro"> 최고의 제품을 만나보세요.</h1>
        <p id="third-intro">완벽한 기술력과 철저한 품질관리로 한차원 높은 제품을 만들겠습니다.</p>
    </div>
</div>

<!--베너 생성-->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url('img/banner_2.jpg');background-size: 100% 100%; height: 120%;">
            <div><h1>생활/위생 포장</h1></div>
            <div class="scroll">
                <img src="img/life.png">
            </div>
        </div>
        <div class="carousel-item" style="background-image: url('img/banner_2.jpg');background-size: 100% 100%; height: 120%;">
            <div><h1>식품/위생 포장</h1></div>
            <div class="scroll">
                <img src="img/food.png">
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
        </div>

<!--온라인 문의-->
<div class="question">
    <div id="question-first"><h2>주문 문의</h2></div>
    <div id="question-second"><p>궁금하신점이 있으시면 문의주세요! 친절하게 상담해드리겠습니다.</p></div>
    <div id="question-third"><p>전화: 010-3299-5862</p><a href="#">온라인 문의 ↗</a></div>

</div>

<!--아래-->
<?php $menu->printFooter(); ?>

</body>
</html>
