<?php session_start(); ?>
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
        <div class="text-white text-align-center"><h1 class="display-6 fw-normal">Lets make some news</h1></div>
        <hr>
        <form action="../functions/add.php" method="post" enctype="multipart/form-data"> <!--внутри action записывается файл, который обрабатывает информацию из формочки-->
            <div class="row">
                <div class="col-4">
                    <div class="input-group mb-3">
                        <label for="file_label"> Добавьте изображение 550 на 550 px</label>
                        <input type="file" id="image-file"  name="image-file" accept=".jpg, .jpeg, .png">
                </div>

            </div>
            <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id=""></span>
                            <input type="text" class="form-control" placeholder="Заголовок" name="news-title" aria-label="title" aria-describedby="">
                            <input type="text" class="form-control" placeholder="Ссылка на пост или новость" name="news-link" aria-label="news-title" aria-describedby="">
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <textarea name="intro-text" id="intro-text" placeholder="Интро новости" cols="250" rows="10"></textarea>
                </div>
                <div class="input-group mb-3">
                    <textarea name="full-text" id="full-text" placeholder="Новость" cols="250" rows="20"></textarea>
                </div>
                <input type="hidden" name="date">
                <input name="hiddenField" type="hidden" value="add_n">
                <button type="submit"  class="btn btn-primary"> Подтвердить ввод</button>
        </form>
    </div>>
</main>
<?php //require_once "../blocks/footer.php"?>

<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
<script src="../node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
</body>
</html>