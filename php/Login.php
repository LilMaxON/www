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
<main>
    <div class="col-4 text-bg-dark my-5 rounded-5 p-3 mx-auto">

        <form action="../functions/auth.php" method="post"> <!--внутри action записывается файл, который обрабатывает информацию из формочки-->
            <div class="text-white text-align-center"><h1 class="display-6 fw-normal">Log in</h1></div>
            <hr>
            <div class="input-group mb-3">
                <span class="input-group-text" id="">@</span>
                <input type="email" class="form-control" placeholder="volsu e-mail" name ="e-mail" aria-label="e-mail" aria-describedby="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="">*</span>
                <input type="password" class="form-control" placeholder="password" name ="password" aria-label="password" aria-describedby="">
            </div>
            <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" />
            <button type="submit" class="btn btn-primary">Sign up</button>
            <hr>
            <p>Еще нет аккаунта? <a href="Signup.php">Зарегистрируйтесь!</a></p>
        </form>
    </div>
</main>
<?php require_once "../blocks/footer.php"?>

<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
<script src="../node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
</body>
</html>

