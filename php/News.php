<!doctype html>
<html lang="ru">
<head>
    <?php
    $title = "SSSite";
    $page_css ="News.css";
    ?>
    <?php require_once "../blocks/head.php"?>

</head>
<body class="bg-black">
<header>
    <div class="px-3 py-2 bg-black border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="Main.php" class="navbar-brand my-2 me-lg-auto text-white">SSS IMIT</a>
                <ul class="nav col-lg-auto my-2 justify-content-center">
                    <li class="nav-item">
                        <a href="VkGroup.php" class="nav-link text-white">
                            Наша группа ВК
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="News.php" class="nav-link">
                            Новости
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="CardGame.php" class="nav-link text-white">
                            Карточная игра
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Market.php" class="nav-link text-white">
                            Магазин
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Tasks.php" class="nav-link text-white">
                            Задания
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Profile.php" class="nav-link text-white">
                            Профиль
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- <div class="px-3 py-2 border-bottom mb-3">
    <div class="container d-flex flex-wrap justify-content-center">
        <div class="text-end">
        <button type="button" class="btn btn-light text-dark me-2">Login</button>
        <button type="button" class="btn btn-primary">Sign-up</button>
        </div>
    </div>
    </div>     -->
</header>



<?php require_once "../blocks/footer.php"?>

</body>
</html>