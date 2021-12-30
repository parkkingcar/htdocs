<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/question.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>온라인 문의</title>
    <style>
        .introProduct{
            width: 100%;
            background-color: white;
            margin-top: 10px;
            margin-bottom: 3px;
        }
    </style>
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
    <h1>식품 포장</h1>
    <div class="introProduct" style="overflow: hidden;">
        <div style="margin-top:30px;">
            <img src="img/product/l1.png" style="float: right; ">
        </div>
        <h6><span style="color:brown;">● </span>냉장냉동</h6>
        <p class="productext">냉장냉동 식품포장(육류 및 가공,조리 식품)을 포장하는 파우치</p>
        <p class="productext">및 LID필름(TOP,BOTTOM)등으로 고객의 요구에 적합한 다양한</p>
        <p class="productext">포장재를 생산하고 있습니다.</p>
        <hr>
        <p class="productext">-제품특징:충격에 강하며 진공포장가능,자외선/산소에 차단성기능</p>
        <p class="productext" style="padding-left:15%;">우수 EPL(EASY peel)필름 사용으로 개봉시 편리함</p>
        <p class="productext">-재질: O-NY/PE(LD+LLDPE),PET(NY)/PE(EPL), 가능성 TOP, BOTTOM 필름</p>
        <p class="productext">-용도: 튀김류, 만두류, 어육제품, 햄/소시지, 찌개류, 육류</p>
    </div>
    
    

    <div class="introProduct">
        <h6><span style="color:brown;">● </span>레토르트(즉석식품)</h6>
        <p class="productext">즉석 식품의 주류는 retort처리 식품으로서 포장재는 타 포장재와 비교하여 물리,화학적으로 어려운 조건에서 견디며 품질 보존성이 매우 뛰어납니다.</p>
        <hr>
        <p class="productext">-제품특징:고온살균(125도) 및 고차단성(산소,습도)에 적합,포장설계에 따라 전자레인지 사용 가능</p>
        <p class="productext">-재질:PET/NY/내열 CPP,PET/NY/AL/내열CPP</p>
        <p class="productext">-용도:조리식품(카레,짜장,스프)식육가공품(햄버거,햄/소시지)수산가공품(어묵,새우크림)</p>
    </div>

    <div class="introProduct" style="overflow: hidden;">
        <div style="margin-top:30px;">
            <img src="img/product/l2.png" style="float: right; ">
        </div>
        <h6><span style="color:brown;">● </span>액상/식음료류</h6>
        <p class="productext">액상 소스류 및 장류, 음료수등의 액상제품 포장에 사용되며 누액,유분에 의한 제품의 향
        ,변색등을 방지하기위해 포장재에 Barrier성이 요구됩니다.</p>
        <hr>
        <p class="productext">-제품특징:자외선,산소에 대한 차단성 기능 및 캡부착으로 편의기능 강화</p>
        <p class="productext">-재질:PET/PE/특수래진, NY/EVAL/PE, PET(NY)/PE</p>
        <p class="productext">-용도:장류(된장,고추장,간장),소스류(액상 스프류,양념장),음료(커피,청량음료,과일음료)</p>
    </div>
    <div class="introProduct" style="overflow: hidden;">
        <div style="margin-top:10px;">
            <img src="img/product/l3.png" style="float: right; ">
        </div>
        <h6><span style="color:brown;">● </span>분소물류</h6>
        <p class="productext">-제품특징: 외부환경에 대한 차단성 우수, 편리한 사용(지퍼부착으로 재사용 가능) 개봉의 용이함
        (쉽게 찢어 사용가능)생산성을 위한 협착물 열접착 가능</p>
        <p class="productext">-재질: OPP/PE(LD+LLDPE), PET(NY)/(LD+LLDPE)/PET/종이/PEPET(OPP)/VM-PET/ LD+LLDPE, PET(NY)+LLDPE</p>
        <p class="productext">- 용도: 밀가루, 튀김,부침가루, 조미료, 설탕, 소금, 커피/차류</p>
    </div>

    <div class="introProduct" style="overflow: hidden;">
        <div style="margin-top:10px;">
            <img src="img/product/l4.png" style="float: right; ">
        </div>
        <h6><span style="color:brown;">● </span>농산물</h6>
        <p class="productext">-제품특징:신선도를 유지하기 위한 다공성 필름 적용, 제품의 신선도를 확인</p>
        <hr>
        <p class="productext">-제품특징:신선도를 유지하기 위한 다공성 필름 적용, 제품의 신선도를 확인하기 위한 고 투명성 필름 사용</p>
        <p class="productext">-용도:곡식류,야채류</p>
    </div>
   
    <div class="introProduct" style="overflow: hidden;">
        <div style="margin-top:30px;">
            <img src="img/product/l5.png" style="float: right; ">
        </div>
        <h6><span style="color:brown;">● </span>건조물류</h6>
        <p class="productext">건조 식품류는 완전 건조 및 반건조 형태로 유통되어 gas,향,수분 차단이 요구되며 내용물 판멸이 용이하도록 고투명 필름을 사용합니다.</p>
        <hr>
        <p class="productext">-제품특징:고차단,고투명성 필름 사용,효율적인 습기 차단을 위한 '방담'필름 적용</p>
        <p class="productext">-재질: OPP/CPP,PET/PE,K-OPP/방담 CPP(PE)</p>
        <p class="productext">-용도:육포류,반 건조 식품류(건포도),건어물류</p>
    </div>
    <br/>
    <div class="introProduct" style="overflow: hidden;">
        <div style="margin-top:5px;">
            <img src="img/product/l6.png" style="float: right; height:250px; ">
        </div>
        <h6><span style="color:brown;">● </span>EPL필름</h6>
        <p class="productext">용기 TOP Film, 일반 파우치률에 적용하며, 개봉이 쉽게 뜯길 수 있도록 설계된 필름입니다.</p>
        <hr>
        <p class="productext">-제품특징:EPL(easpy peel)필름 사용으로 개봉이 편리</p>
        <p class="productext">-재질:PET/NY/CPP(PE) 용기, PET(NY)/PE,PET(NY)/VM-PET(AL)/PE</p>
        <p class="productext">-용도: 과일젤리류,즉석밥류,소스,치킨무우등</p>
    </div>
    <div class="introProduct" style="overflow: hidden;">
        <div style="margin-top:40px;">
            <img src="img/product/l7.png" style="float: right; ">
        </div>
        <h6><span style="color:brown;">● </span>콜드씰 제품</h6>
        <p class="productext">일반적인 열접착 포장방식을 대체하여, 열에 의한 제품변형 등의 상품성이 필요한 품목 포장시 적합한 기능성 필름입니다.</p>
        <hr>
        <p class="productext">-제품특징:열을 가하지 않고 일정한 압력으로 접착 가능하며 열접착대비 생산속도 우수</p>
        <p class="productext">-재질:PET/VM-PET/coating, OPP/PE/VM-PET/coating</p>
        <p class="productext">-용도:초콜릿을 가공한 식품류(초컬릿,초코바,초코파이)</p>
    </div>
</div>

<div style="height:2500px;"></div>
<?php
$menu->printFooter();
?>

</body>
</html>