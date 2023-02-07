<?php  session_start();?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
        $title = "SSSite";
        //$pageСss ="News.css";
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
echo "Connected successfully";
$sqlquery = "SELECT * FROM `news`";
$res = $mysql->query($sqlquery);


echo '<div class="container news_bar">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">';
$addactive = "";
$copyres = $res;
while($data = $copyres->fetch_assoc())
{
    for ($i = 0; $i < count($data); $i++) {

        if ($i == 0) {
            $ariaCur = "true";
            $addActive = "active";
        } else {
            $ariaCur = "false";
            $addActive = "";
        }
        echo '
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="$i" class="' . $addActive . '" aria-current="' . $ariaCur . '" aria-label="Slide ' . $i . '"></button>
        ';

        }
}
echo '</div>
        <div class="carousel-inner">';

while($data = $res->fetch_assoc())
{
    for ($i = 0; $i < count($data); $i++) {

        if ($i == 0) {

            $addActive = "active";
        } else {
            $addActive = "";
        }
        echo '<div class="carousel-item ' . $addActive . '">
                <div class="row">
                    <div class="col-6">
                        <img src="data:image/jpeg;base64,' . $data[$i]['image'] . '" class="rounded shadow img-fluid" alt="" srcset="">
                    </div>
                    <div class="col-6">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>$data[$i]['$title']</h5>
                            <p>$data[$i]['$intro_text']</p>
                            <p>$data[$i]['$date']</p>
                        </div>
                    </div>
                </div>
               </div>';
        }
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



