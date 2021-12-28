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
    <a href="index.php"><img src="img/conpany2.jpg" class="company"></a>
    <div id="small-menu">
        <div class="icon"></div>
        <div class="icon"></div>
        <div class="icon"></div>
    </div>
    <div id="item">
        <ul>
            <li><a href="introduce.php">회사소개</a>
                <ul>
                    <li><a href="introduce.php">대표인사말</a></li>
                    <li><a href="history.php">회사연혁</a></li>
                    <li><a href="path.php">오시는길</a></li>
                </ul>
            </li>
            <li><a href="foodproduct.php">제품소개</a>
                <ul>
                    <li><a href="foodproduct.php">식품포장</a></li>
                    <li><a href="lifeProduct.php">생활/위생</a></li>
                </ul>
            </li>
            <li><a href="inquery.php">온라인문의</a></li>
        </ul>
    </div>
</div>

<div id="item2">
    <ul style="margin-bottom:0;" id="submenu">
        <li id="intro">회사소개
            <ul id="intro-drop">
                <li><a href="introduce.php">대표인사말</a></li>
                <li><a href="history.php">회사연혁</a></li>
                <li><a href="path.php">오시는길</a></li>
            </ul>
        </li>
        <li id="product">제품소개
            <ul id="product-drop">
                <li><a href="foodproduct.php">식품포장</a></li>
                <li><a href="lifeProduct.php">생활/위생</a></li>
            </ul>
        </li>
        <li style="font-size:120%;"><a href="inquery.php">온라인문의</a></li>
        <li style="font-size:120%;"><a href="guestLogin.php">문의글 확인</a></li>
    </ul>
</div>
    <?php }
    public function printFooter(){ ?>
<footer>
    <div id="footer-first">
        <p>업체명: 00산업|대표자:000|사업자등록|000-00-00000|Fax:000-000-0000|주소:0000000000</p>
    </div>
    <div id="footer-second">
        <p>copyright 2021 00산업|All right Reserved|<a href="admin.php">관리자로그인</a></p>
    </div>
</footer>
    <?php }

    public function printSide($arr){
        ?>
            <div class="sideMenu">
                    <ul id="sideBar">
                        <?php
                        foreach($arr as $value){
                            $link = 'index.php';
                            if($value == "글 확인"){
                                $link = 'guestLogin.php';
                                ?>
                                <li class="sideBarContent"><a href=<?=$link?>><?=$value?></a></li>
                            <?php }?>
                            <?php if($value == "로그아웃"){
                                $link = 'logout.php';
                                ?>
                                <li class="sideBarContent" id="logout"><a href=<?=$link?>><?=$value?></a></li>
                                <?php }?>
                            <?php if($value =='대표인사말'){
                                $link = 'introduce.php';
                                ?>
                                <li class="sideBarContent"><a href=<?=$link?>><?=$value?></a></li>
                            <?php }?>
                            <?php if($value =='회사연혁'){
                                $link = 'history.php';
                                ?>
                                <li class="sideBarContent"><a href=<?=$link?>><?=$value?></a></li>
                            <?php }?>
                            <?php if($value =='오시는길'){
                                $link = 'path.php';
                                ?>
                                <li class="sideBarContent"><a href=<?=$link?>><?=$value?></a></li>
                            <?php }?>
                            <?php if($value =='삭제'){
                                $link = '#';
                                ?>
                                <li class="sideBarContent"><a href=<?=$link?> id="deleteHistory"><?=$value?></a></li>
                            <?php }?>
                            <?php if($value =='추가'){
                                $link = '#';
                                ?>
                                <li class="sideBarContent"><a href=<?=$link?> id="addHistory"><?=$value?></a></li>
                            <?php }?>
                            <?php if($value =='식품포장'){
                                $link = 'foodproduct.php';
                                ?>
                                <li class="sideBarContent"><a href=<?=$link?>><?=$value?></a></li>
                            <?php }?>
                            <?php if($value =='생활위생'){
                                $link = '생활위생';
                                ?>
                                <li class="sideBarContent"><a href=<?=$link?>><?=$value?></a></li>
                            <?php }?>
                        <?php } ?>
                    </ul>
                    <div class="sideImg">
                        <img src="./img/tel.png" style="border:solid 2px gray;" id="tel">
                    </div>
            </div>

<?php    }

    public function printMenuAn($name){
        ?>
        <div id="menuBottom">
            <div class="circle">
                <p id="introMenu"><?=$name?></p>
            </div>
        </div>
    <?php }
} ?>



</body>

</html>