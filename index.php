<?php
/**
 * Created by PhpStorm.
 * User: limin
 * Date: 2017/11/2
 * Time: 上午 10:56
 */
//echo "測試123";
$var = "變數VAR的內容";

function addText()
{
    return "<h1>天呀!加入文字</h1>";
}

switch (@$_GET['math']) {
    case"add":
        $answer = $_GET['x'] + $_GET['y'];
        break;
    case"del":
        $answer = $_GET['x'] - $_GET['y'];

        break;
    case"plus":
        $answer = $_GET['x'] * $_GET['y'];

        break;
    case"def":
        $answer = $_GET['x'] / $_GET['y'];

        break;

}
if (empty($answer)) {
    $answer = "?";
}
if (empty($_GET['x'])) {
    $x = "";
} else {
    $x = $_GET['x'];
}
if (empty($_GET['y'])) {
    $y = "";
} else {
    $y = $_GET['y'];
}

@$math=$_GET['math']?$_GET['math']:"";

?>
<!doctype html>
<html lang="zh-tw">
<head>
    <title><?php echo $var . addText(); ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<h1>計算機</h1>
<form action="index.php" method="get">
    <input type="number" name="x" value="<?php echo $x; ?>">
    加<input type="radio" name="math" value="add" <?php if($math=='add') echo "checked";?>>
    減<input type="radio" name="math" value="del" <?php if($math=='del') echo "checked";?>>
    乘<input type="radio" name="math" value="plus" <?php if($math=='plus') echo "checked";?>>
    除<input type="radio" name="math" value="def" <?php if($math=='def') echo "checked";?>>
    <input type="number" name="y" value="<?php echo $y; ?>">
    =<?php echo $answer; ?><br>
    <input type="submit" value="送出計算">
</form>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
</body>
</html>