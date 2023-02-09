<?php  session_start();?>
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
require_once  "../blocks/header.php"
?>

<?php
$mysql = new mysqli("localhost", "root", "", 'newsbase');
$mysql->query("SET NAMES utf8");
// Проверяем соединение
if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
}
//echo "Connected successfully";
$sqlquery = "SELECT * FROM `news`";
$res = $mysql->query($sqlquery);
$copyres = $mysql->query($sqlquery);

echo '<div class="container news_bar">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">';
$i=1;
while ($data = $copyres->fetch_assoc()) {
    global $i;
        if ($i == 1) {
            $ariaCur = "true";
            $addActive = "active";
        } else {
            $ariaCur = "false";
            $addActive = "";
        }
        echo '
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="'.((int)$i-1).'" class="' . $addActive . '" aria-current="'.$ariaCur.'" aria-label="Slide ' .$i. '"></button>
        ';
        $i++;
}
echo '</div>
        <div class="carousel-inner">';
$i=1;
while($data = $res->fetch_assoc())
{
    global $i;
        if ($i == 1) {
            $addActive = "active";
        } else {
            $addActive = "";
        }
        echo '<div class="carousel-item '.$addActive.'">
                <div class="card rounded-5 text-bg-dark my-5">
                <div class="row g-0">
                    <div class="col-6">
                        <img src="data:image/jpeg;base64,'.$data['image'].'" class="rounded shadow img-fluid" alt="" srcset="">
                    </div>
                    <div class="col-6">
                        <div class="card-body">
                                <h1 class="card-title">'.$data['title'].'</h1>
                                <p>'.$data['intro_text'].'</p>
                                <p>'.$data['date'].'</p>
                                ';?>
                        <form action= "../functions/viewNews.php" method= "POST" >
                            <input type = "hidden" name = "id" value="<?=$data['id']?>" />
                            <button  type="submit"  class="btn btn-primary""> Читать новость</button>
                        </form>

                            <?php if($_SESSION['admin_lvl'] >= 2)
                                {
                                     echo '<p>'.$data['id'].'</p>';
                                }
                            echo '
                            </div>
                        </div>
                    </div>
                </div>
            </div>';






        $i++;
}

echo '</div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
        </button>
    </div>
</div>';
?>



<!--<?php require_once "../blocks/footer.php"?>-->
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
<script src="../node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
</body>
</html>



