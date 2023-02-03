<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body class="bg-black">
<header>
    <div class="px-3 py-2 bg-black border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="main.php" class="navbar-brand my-2 me-lg-auto text-white">SSS IMIT</a>
                <ul class="nav col-lg-auto my-2 justify-content-center">
                    <li class="nav-item">
                        <a href="VK_Group.php" class="nav-link text-white">
                            Наша группа ВК
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="News.php" class="nav-link text-white">
                            Новости
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="CardGame.php" class="nav-link text-white">
                            Карточная игра
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="market.php" class="nav-link text-white">
                            Магазин
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Tasks.php" class="nav-link text-white">
                            Задания
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Profile.php" class="nav-link">
                            Профиль
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="col-4 text-bg-dark my-5 rounded-5 p-3 mx-auto">
        <div class="text-white text-align-center"><h1 class="display-6 fw-normal">Sign up</h1></div>
        <hr>
        <div class="input-group mb-3">
            <span class="input-group-text" id="">@</span>
            <input type="email" class="form-control" placeholder="e-mail" aria-label="e-mail" aria-describedby="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="">*</span>
            <input type="password" class="form-control" placeholder="password" aria-label="password" aria-describedby="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="">*</span>
            <input type="password" class="form-control" placeholder="password" aria-label="password" aria-describedby="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="">№</span>
            <input type="text" class="form-control" placeholder="номер студенческого билета" aria-label="номер студенческого билета" aria-describedby="">
        </div>
        <button type="button" class="btn btn-primary">Sign up</button>
    </div>
</main>
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
<script src="../node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
</body>
</html>