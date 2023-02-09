<?php  session_start();?>
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
require_once  "../blocks/func_header.php"
?>
<main>
        <div class="col-8 text-bg-dark my-5 rounded-5 p-3 mx-auto">
            <div class="text-white text-align-center"><h1 class="display-6 fw-normal">Какую новость удалить</h1></div>
            <hr>
            <form action="../functions/remove.php?>" method="post"> <!--внутри action записывается файл, который обрабатывает информацию из формочки-->
                <div class="input-group mb-3">
                    <label for="file_label"> Введите id нужной новости</label>
                    <input type="text" id="news-id"  name="news-id">
                </div>
                <div class="input-group mb-3">
                    <label for="file_label"> Или дату и время, до которых удалить все новости</label>
                    <input type="text" id="news-date"  name="news-date">
                </div>
                <input name="hiddenField" type="hidden" value="add_n">
                <button type="submit"  class="btn btn-primary">Удалить</button>
            </form>
        </div>
</main>
<?php //require_once "../blocks/footer.php"?>

<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
<script src="../node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
</body>
</html>

