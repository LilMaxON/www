<?php
    header('Content-Type: text/html; charset=UTF-8');
    session_start();
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_EMAIL);
    $pass = filter_var(trim($_POST['password']),FILTER_SANITIZE_EMAIL);
    $mail = filter_var(trim($_POST['e-mail']),FILTER_VALIDATE_EMAIL);

    $pass = md5($pass."pjustl34d9sf");
    require_once "../functions/bdConnects.php";
    $mysql=ConnectBD('register-bd');
    $result = $mysql->query("SELECT * FROM `users` WHERE `user_volsu` = '$mail' AND `user_pass` = '$pass'");
    $user = $result->fetch_assoc();
    if(count($user) == 0)
    {
        echo "Такого аккаунта не существует";
        exit();
    }
    $_SESSION['admin_lvl'] = $user['admin_lvl'];
    $_SESSION['user_mail'] = $user['user_volsu'];
    $_SESSION['user_pass'] = $user['user_pass'];
    $_SESSION['user_name'] = $user['user_name'];
    CloseBD($mysql);
    ob_start();
    header('Location: ../php/Profile.php');
    exit();
    ob_end_flush();
