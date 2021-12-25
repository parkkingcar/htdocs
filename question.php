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
$menu->printMenuAn("온라인 문의");
$list = array();
?>

<?php $menu->printSide($list); ?>

<script src="./js/question.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<div class="right">
    <div style="width: 100%; height: 60px;">
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="selectCnt">
            <option value="5" selected>5</option>
            <option value="10" >10</option>
            <option value="15">15</option>
        </select>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scop="col" id="numCnt">#</th>
            <th scop="col" id="contentCnt">제목</th>
        </tr>
        </thead>
    </table>

    <div>
        <button type="button" class="btn btn-light write" id="writer">글쓰기</button>
    </div>
</div>


</body>
</html>