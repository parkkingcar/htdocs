<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/homepage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./js/index.js"></script>
    <title>Home</title>
</head>
<body >
<?php include 'Menu.php';?>

<?php
$menu = new Menu();
$menu->printMenu();
?>

<!--베너 생성-->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width: 100%; height: 40%;"  >
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/banner_3.jpg" alt="First slide" >
      <div class="carousel-caption d-none d-md-block" >
        <h5>식품부터 위생 용품까지 안전한 포장</h5>
        <p style="font-size: 30px;">이앤피아이가 책임지겠습니다.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/banner_5.jpg" alt="Second slide" style="height: 50%;">
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

<!--소개말 -->
<div class="intro" style=" text-align: center;  margin-top: 80px; margin-bottom: 50px">
    <div id="intor-sub" style="margin-left: 10px;">
        <h2 id="first-intro"><span id="first">No.01</span> <span style="font-size:35px;font-weight: bold;">e</span><span style="font-size:30px;font-weight: bold;">inP&I</span></h2>
        <h1 id="second-intro"> 최고의 제품을 만나보세요.</h1>
        <p id="third-intro">완벽한 기술력과 철저한 품질관리로 한 차원 높은 제품을 만들겠습니다.</p>
    </div>
</div>


<div class="container" style="width:900px;padding-top: 30px;">
    <div class="row">
        <a href="lifeProduct.php">
      <div class="col-6"><div class="plate"><img class="card-img" onmouseenter="zoomIn1(event)" onmouseleave="zoomOut1(event)" src="img/product1.jpg" alt="lapping"></div><br>
        </a>
       <div class="row">
      <div class="col-12"><div class="plate"><img class="card-img" src="img/product4.jpg" alt="lapping"></div></div>
      </div>
      </div>
      <div class="col-6"><a href="lifeProduct.php"><div class="plate"><img class="card-img" onmouseenter="zoomIn2(event)" onmouseleave="zoomOut2(event)" src="img/product2.jpg" alt="lapping"></a></div><br>
      <div class="row">
      <div class="col-12"><div class="plate"><img class="card-img" src="img/product3.jpg" alt="lapping"></div></div>
      </div> 
      </div> 
    </div>
    
</div>

<!--온라인 문의-->
<div class="question" style=" margin-top: 150px;  margin-left: 10%;">
    <div id="question-first" style=" color: #585858; text-align: center; margin-left: 10%; "><h2>주문 문의</h2></div>
    <div id="question-second" style="margin-top: 50px; color: #BDBDBD; text-align: center; margin-left: 10%;"><p>궁금하신점이 있으시면 문의주세요! 친절하게 상담해드리겠습니다.</p></div>
    <div id="question-third" style=" color: #BDBDBD; text-align: center; margin-left: 10%;"><p>전화</p></div>
    <div id="question-four" style=" color: #BDBDBD; text-align: center; margin-bottom: 20px; margin-left: 10%;"><p>010-3299-5862</p><a style=" color: ##BDBDBD;" href="question.php">온라인 문의 이동</a></div>
</div>

<!--아래-->
<?php $menu->printFooter(); ?>

</body>
</html>
