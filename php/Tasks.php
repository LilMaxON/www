<!DOCTYPE html>
<html lang="en">
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
    <div class="rounded-5 m-5 py-3 text-bg-dark">
        <div class="row">
            <div class="col px-3"><!--<input type="checkbox" class="">--></div>
            <div class="col px-3">Название</div>
            <div class="col-lg-3 col px-3">Крайний срок</div>
            <div class="col-lg-2 col px-3">Пруфы</div>
        </div>
        <hr>
        <div class="row px-3 py-1">
            <div class="col px-3"><input class="form-check-input" type="checkbox" value="" id=""></div>
            <div class="col px-3">Какое-то задание</div>
            <div class="col-lg-3 col px-3"><time>01.12.22</time></div>
            <div class="col-lg-2 col px-3"><button type="button" class="btn btn-primary">Отправить</a></button></div>
        </div>
        <div class="row px-3 py-1">
            <div class="col px-3"><input class="form-check-input" type="checkbox" value="" id=""></div>
            <div class="col px-3">Какое-то задание</div>
            <div class="col-lg-3 col px-3"><time>01.12.22</time></div>
            <div class="col-lg-2 col px-3"><button type="button" class="btn btn-primary">Отправить</a></button></div>
        </div>
        <div class="row px-3 py-1">
            <div class="col px-3"><input class="form-check-input" type="checkbox" value="" id=""></div>
            <div class="col px-3">Какое-то задание</div>
            <div class="col-lg-3 col px-3"><time>01.12.22</time></div>
            <div class="col-lg-2 col px-3"><button type="button" class="btn btn-primary">Отправить</a></button></div>
        </div>
    </div>
</main>

<?php require_once "../blocks/footer.php"?>

<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
<script src="../node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
</body>
</html>