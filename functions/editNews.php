<?php session_start();
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
require_once  "../blocks/func_header.php"
?>
<main>

    <?php if(isset($_POST['hiddenField'])){
        require_once "../functions/bdConnects.php";
        $mysql=ConnectBD('newsbase');
        $id = $_POST['news-id'];
        $sqlquery = "SELECT * FROM `news` WHERE id = '$id'";
        $res = $mysql->query($sqlquery);
        $data = $res->fetch_assoc();

        $news_title = $data['title'];
        $source_link = $data['source_link'];
        CloseBD($mysql);


        ?>
        <div class="col-8 text-bg-dark my-5 rounded-5 p-3 mx-auto">
        <div class="text-white text-align-center"><h1 class="display-6 fw-normal">Lets change some news</h1></div>
        <hr>
        <form action="../functions/edit.php" method="post" enctype="multipart/form-data"> <!--внутри action записывается файл, который обрабатывает информацию из формочки-->
            <div class="row">
                <div class="col-4">
                    <div class="input-group mb-3">
                        <label for="file_label"> Добавьте изображение 550 на 550 px</label>
                        <input type="file" id="image-file" name="image-file" accept=".jpg, .jpeg, .png">
                    </div>

                </div>
                <div class="col">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id=""></span>
                        <input type="text" class="form-control" placeholder="Заголовок" value="<?=$news_title?>"   name="news-title" aria-label="title" aria-describedby="">
                        <input type="text" class="form-control" placeholder="Ссылка на пост или новость"  value="<?=$source_link?>"  name="news-link" aria-label="news-title" aria-describedby="">
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <textarea name="intro-text" id="intro-text" placeholder="Интро новости" cols="250" rows="10"></textarea>
            </div>
            <div class="input-group mb-3">
                <textarea name="full-text" id="full-text" placeholder="Новость" cols="250" rows="20"></textarea>
            </div>
            <input type="hidden" name="id" value="<?=$id?>">
            <button type="submit"  class="btn btn-primary">Проверить как выглядит</button>
        </form>
    </div>

    <?php


    }else{
    ?>
        <div class="col-8 text-bg-dark my-5 rounded-5 p-3 mx-auto">
            <div class="text-white text-align-center"><h1 class="display-6 fw-normal">Какую новость изменить</h1></div>
            <hr>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post"> <!--внутри action записывается файл, который обрабатывает информацию из формочки-->
                <div class="input-group mb-3">
                    <label for="file_label"> Введите id нужной новости</label>
                    <input type="text" id="news-id"  name="news-id">
                </div>
                <input name="hiddenField" type="hidden" value="add_n">
                <button type="submit"  class="btn btn-primary">Изменить</button>
            </form>
        </div>
        <?php } ?>


</main>
<?php //require_once "../blocks/footer.php"?>

<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
<script src="../node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
</body>
</html>
