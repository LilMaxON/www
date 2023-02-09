<?php session_start();?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
        $title = "SSSite";
        $pageСss ="main.css";
    ?>
    <?php require_once "../blocks/head.php"?>
</head>
<body class="bg-black">
<?php
$name = basename(__FILE__);
require_once  "../blocks/header.php"
?>
<?php
    if($_SESSION['admin_lvl'] < 1):
        echo "Новый пользователь";
?>
<div class="px-3 py-2 border-bottom mb-3" id="loginBar">
    <div class="container d-flex flex-wrap justify-content-center">
        <div class="text-end">
            <a href="Login.php" type="button" class="btn btn-light text-dark me-2">Login</a>
            <a href="Signup.php" type="button" class="btn btn-primary">Sign-up</a>
        </div>
    </div>
</div>
<?php else:?> <!--Здесь код, который выполняется, если пользователь зашел в аккаунт -->
        <p>Добро пожаловать,<?=$_SESSION['user_name']?></p>
        <?php echo $_SESSION['admin_lvl'];?>
        <div class="px-3 py-2 border-bottom mb-3" id="loginBar">
            <div class="container d-flex flex-wrap justify-content-center">
                <div class="text-end">
                    <button onclick="window.location.replace('../functions/exit.php')" type="submit" class="btn btn-primary">Выйти из аккаунта</button>
                </div>
            </div>
        </div>
<?php
    endif;
?>
<?php require_once "../blocks/footer.php"?>

<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
<script src="../node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
</body>
</html>