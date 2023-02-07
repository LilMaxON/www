
<?php
session_start();
$image;
$news_title;
$sh_text;
$fl_text;
?>

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
    <div class="col-8 text-bg-dark my-5 rounded-5 p-3 mx-auto">
        <div class="text-white text-align-center"><h1 class="display-6 fw-normal">Lets make some news</h1></div>
        <hr>
        <form action="" method="post"> <!--внутри action записывается файл, который обрабатывает информацию из формочки-->
        <div class="row">
            <div class="col-4">
                <div class="input-group mb-3">
                    <label for="file"> Добавьте изображение 550 на 550 px</label>
                    <input type="file" id="file-selector" value=$image name="file" accept=".jpg, .jpeg, .png>
                        <script>
                            const fileSelector = document.getElementById('file-selector');
                            fileSelector.addEventListener('change', (event) => {
                                const fileList = event.target.files;
                                console.log(fileList);
                            });
                        </script>
                </div>

            </div>
            <div class="col">
                <div class="input-group mb-3">
                    <span class="input-group-text" id=""></span>
                    <input type="text" class="form-control"   value =  <?php echo " \"$news_title\"  "?> placeholder="Заголовок" name="news-title" aria-label="title" aria-describedby="">
                </div>
            </div>
        </div>
            <div class="input-group mb-3">
                <textarea name="intro-text" id="intro-text" value = $sh_text placeholder="Интро новости" cols="250" rows="10"></textarea>
            </div>
            <div class="input-group mb-3">
                <textarea name="full-text" id="full-text" value = $fl_text placeholder="Новость" cols="250" rows="20"></textarea>
            </div>
            <input type="hidden" name="date" value="<?=time() ?>" />
            <div class="row">
                <div class="col-6">
                    <button type="btn" class="btn btn-primary">Проверить как выглядит</button>
                </div>
                <div class="col-6">
                    <button type="submit"  class="btn btn-success">Подтвердить ввод</button>
                </div>
            </div>
        </form>
        <?php

        ob_start();
        require "viewNews.php";
        ?>
</main>
<?php //require_once "../blocks/footer.php"?>

<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
<script src="../node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
</body>
</html>