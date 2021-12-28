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
$menu->printMenuAn("제품소개");
$list = array("식품포장", "생활위생");
$menu->printSide($list);
?>

<div class="right">
    <h1>생활/위생</h1>

    <div class="introProduct">
        <h6><span style="color:blue;">● </span>생활용품</h6>
        <p class="productext">액상형 파우치는 터짐, 누액에 대한 강도가 매우 우수하며 SPOUT CAP 부착으로 재사용이 가능하며 실용적입니다.</p>
        <hr>
        <p class="productext">-제품특징:고강도필름 적용 품질보증,생산성향상 위한 특수레진 설계</p>
        <p class="productext">-재질:PET(NY)/LLDPE, PET/NY/LLDPE</p>
        <p class="productext">-용도:섬유세제,섬유유연제,주방새제,분말세탁세제,표백제</p>
    </div>

    <div class="introProduct">
        <h6><span style="color:blue;">● </span>위생용품</h6>
        <p class="productext">의약품 및 위생용품류 포장재는 위생, 청결성 내약품성이 매우 뛰어납니다.</p>
        <hr>
        <p class="productext">-제품특징:범용 사용가능한 저가형 포장재,알코올,약품등 수분 차단기능</p>
        <p class="productext">-재질:OPP/CPP,PET/PE,PE PET/AL/PET/PE</p>
        <p class="productext">-용도:위생용품(물티슈,콘돔,포장재)</p>
    </div>

</div>

<div class="foot"></div>
<?php
$menu->printFooter();
?>

</body>
</html>
