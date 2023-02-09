<header>
    <div class="px-3 py-2 bg-black border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/php/Main.php" class="<?php echo ($name!="Main.php") ? ("navbar-brand my-2 me-lg-auto text-white") : ("d-flex align-items-center my-2 my-lg-0 me-lg-auto text-decoration-none") ?> ">SSS IMIT</a>
                <ul class="nav col-lg-auto my-2 justify-content-center">
                    <li class="nav-item">
                        <a href="/php/VkGroup.php" class="nav-link <?php if($name != "VkGroup.php") echo "text-white"?>">
                            Наша группа ВК
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/php/News.php" class="nav-link <?php if(($name != "News.php")and ($name != "viewNews.php")) echo "text-white"?>">
                            Новости
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/php/CardGame.php" class="nav-link <?php if($name != "CardGame.php") echo "text-white"?>">
                            Карточная игра
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/php/Market.php" class="nav-link <?php if($name != "Market.php") echo "text-white"?>">
                            Магазин
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/php/Tasks.php" class="nav-link <?php if($name != "Tasks.php") echo "text-white"?>">
                            Задания
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/php/Profile.php" class="nav-link <?php if($name != "Profile.php") echo "text-white"?>">
                            Профиль
                        </a>
                    </li>
                    <?php
                    if($_SESSION['admin_lvl'] >1):
                    ?>
                    <li class="nav-item">
                        <a href="/php/Admin.php" class="nav-link <?php if(($name != "Admin.php") and ($name != "addNews.php")and ($name != "editNews.php")and ($name != "removeNews.php")) echo "text-white"?>">
                            Админка
                        </a>
                    </li>
                    <?php endif;?>
                </ul>
            </div>
        </div>
    </div>
</header>
<?php require_once "../functions/bdConnects.php"?>