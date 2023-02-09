<?php
$mysql = new mysqli("localhost", "root", "", 'newsbase');
$mysql->query("SET NAMES utf8");
// Проверяем соединение
if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
}
//echo "Connected successfully";
$id = $_POST['id'];
$sqlquery = "SELECT * FROM `news` WHERE id= '$id'";
$res = $mysql->query($sqlquery);
$data = $res->fetch_assoc();
$mysql->close();
session_start();
header('Content-Type: text/html; charset=UTF-8');

$image = $data['image'];
$news_title = $data['title'];
$sh_text = $data['intro_text'];
$fl_text = $data['full_text'];
$src_link = $data['source_link'];
$date = $data['date'];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
    $title = "SSSite";
    $pageСss ="News.css";
    ?>
    <?php require_once "../blocks/head.php"?>
</head>
<body class="bg-black">
<?php
$name = basename(__FILE__);
require_once  "../blocks/func_header.php"
?>
<main>
    <div class="container news_bar">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-6 wrapper">
                            <img src="data:image/jpeg;base64,<?=$data['image']?>" class=" card-img-bottom rounded shadow img-fluid" alt="" srcset="">
                        </div>
                        <div class="col-6">
                            <div class="card-body">
                                <h1 class="card-title"><?php $news_title?></h1>
                                <p><?= $fl_text?></p>
                                <p><?=$date?></p>
                                <?php if($_SESSION['admin_lvl'] >= 2)
                                {?>
                                    <p><?=$id?></p>
                                <?php }?>
                                <a class="btn btn-primary" href="<?=$src_link?>">Ссылка на пост в группе в вк</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if($_SESSION['admin_lvl'] >= 2):?>
        <button onclick="document.location='../functions/editNews.php'"> Изменить новость</button>
        <button onclick="document.location='../functions/removeNews.php'"> Удалить новость</button>
    <?php endif;?>

</main>
<?php //require_once "../blocks/footer.php"?>

<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
<script src="../node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
</body>
</html>