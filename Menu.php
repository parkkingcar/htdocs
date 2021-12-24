<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <script src="./js/menu.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>

<?php class Menu{
    public function printMenu(){ ?>
<div id="menu">
    <div id="small-menu">
        <div class="icon"></div>
        <div class="icon"></div>
        <div class="icon"></div>
    </div>
    <div id="item">
        <ul>
            <li><a href="#">회사소개</a>
                <ul>
                    <li><a href="#">대표인사말</a></li>
                    <li><a href="#">회사연혁</a></li>
                    <li><a href="#">오시는길</a></li>
                </ul>
            </li>
            <li><a href="#">제품소개</a>
                <ul>
                    <li><a href="#">식품포장</a></li>
                    <li><a href="#">생활/위생</a></li>
                </ul>
            </li>
            <li><a href="question.php">온라인문의</a></li>
        </ul>
    </div>
</div>

<div id="item2">
    <ul>
        <li id="intro">회사소개
            <ul id="intro-drop">
                <li><a href="#">대표인사말</a></li>
                <li><a href="#">회사연혁</a></li>
                <li><a href="#">오시는길</a></li>
            </ul>
        </li>
        <li id="product">제품소개
            <ul id="product-drop">
                <li><a href="#">식품포장</a></li>
                <li><a href="#">생활/위생</a></li>
            </ul>
        </li>
        <li style="font-size:120%;"><a href="question.php">온라인문의</a></li>
    </ul>
</div>
    <?php }
    public function printFooter(){ ?>
<footer>
    <div id="footer-first">
        <p>업체명: 00산업|대표자:000|사업자등록|000-00-00000|Fax:000-000-0000|주소:0000000000</p>
    </div>
    <div id="footer-second">
        <p>copyright 2021 00산업|All right Reserved|<a href="#">관리자로그인</a></p>
    </div>
</footer>
    <?php }

    public function printSide($arr){
        ?>
            <div class="sideMenu">
                <div class="menuContent">
                    <ul id="sideBar">
                        <?php
                        foreach($arr as $value){ ?>
                            <li class="sideBarContent"><?=$value?></li>
                        <?php } ?>
                    </ul>
                    <div class="sideImg">
                        <img src="./img/tel.png" style="border:solid 2px gray;">
                    </div>
                </div>
            </div>

<?php    }

    public function printMenuAn($name){
        $this->printMenu(); ?>
        <div id="menuBottom">
            <div class="circle">
                <p id="introMenu"><?=$name?></p>
            </div>
        </div>
    <?php }
} ?>



</body>

</html>