<?php session_start();?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
    $title = "SSSite";
    $pageСss ="main.css";
    ?>
    <?php require_once "../blocks/head.php"?>
    <?php require_once "../functions/data.php"?>
</head>
<body class="bg-black">
<?php
$name = basename(__FILE__);
require_once  "../blocks/header.php"
?>
<?php
if($_SESSION['admin_lvl'] == 2):?>
<div>
    <p>Привет, чертила</p>
    <?php require_once  "../functions/addNews.php"?>

</div>
<?php
endif;
?>
<?php //require_once "../blocks/footer.php"?>

<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
<script src="../node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
</body>
</html>

