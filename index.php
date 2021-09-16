<?php
require_once __DIR__ . '/vendor/autoload.php';
use App\controllers\poemController as poemController;
use App\models\PoemModel as PoemModel;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .block {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
        .item {
            width: 33%;
            padding: 5px;
            align-content: center;
        }
        img {
            display: block;
            max-width: 80%;
            height: 33%;
        }

    </style>
</head>
<body>



<h1>PoemBot</h1>

 <?php
$rows = PoemModel::getList();
$items = new poemController;
$items->actionList();
?>

<div class="block">
    <?php
    foreach ($rows as $row) {
        ?>
        <div class="item">
            <img src="<?=$row->image ?>" alt="">
            <h3><?=$row->title?></h3>
            <p><?=$row->text?></p>
        </div>
    <?php
    }?>
</div>
<?php
call_user_func('App\controllers\poemController')
//$uri = $_SERVER['REQUEST_URI'];
//dump($uri);
//if ($uri == '/poems/') {
//$args = null;
//$controller = 'PoemController';
//$action = 'ActionList';
//echo 'poems';
//}
//$args = null;
//$controller = 'PoemController';
//$action = 'ActionList';
//echo 'poems';
//
//call_user_func_array(['App\\controllers\\' . $controller, $action], $args);
    ?>

</body>
</html>