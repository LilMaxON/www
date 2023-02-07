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
        <div class="text-white text-align-center"><h1 class="display-6 fw-normal">Sign up</h1></div>
        <hr>
        <form action="../functions/check.php" method="post"> <!--внутри action записывается файл, который обрабатывает информацию из формочки-->
            <div class="input-group mb-3">
                <span class="input-group-text" id="">@</span>
                <input type="email" class="form-control" placeholder="volsu e-mail" name="e-mail" aria-label="e-mail" aria-describedby="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="">*</span>
                <input type="text" class="form-control" placeholder="login" name="login" aria-label="login" aria-describedby="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="">*</span>
                <input type="password" class="form-control" placeholder="password" name="password" aria-label="password" aria-describedby="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="">№</span>
                <input type="text" class="form-control" placeholder="номер студенческого билета" name="sd_ticket" aria-label="номер студенческого билета" aria-describedby="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="">*</span>
                <input type="text" class="form-control" placeholder="name" name="name" aria-label="name" aria-describedby="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="">*</span>
                <input type="text" class="form-control" placeholder="surname" name="surname" aria-label="surname" aria-describedby="">
            </div>
            <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" /> <!--это поле может позже пригодиться для проверки с какого ip заходил пользователь. В первую очередь для проверки не зашли ли в акаунт с другого устройства-->
            <button type="submit" class="btn btn-primary">Sign up</button>
        </form>
    </div>
</main>
<?php require_once "../blocks/footer.php"?>

<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
<script src="../node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
</body>
</html>