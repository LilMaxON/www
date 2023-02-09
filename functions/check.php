<?php
    header('Content-Type: text/html; charset=UTF-8');
    session_start();
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_EMAIL);
    $pass = filter_var(trim($_POST['password']),FILTER_SANITIZE_EMAIL);
    $mail = filter_var(trim($_POST['e-mail']),FILTER_VALIDATE_EMAIL);
    $ticket = filter_var(trim($_POST['sd_ticket']),FILTER_SANITIZE_EMAIL);
    $name = $_POST['name'];
    $surname = $_POST['surname'];

//проверки
if(mb_strlen($login) <5 || mb_strlen($login) > 90 )
    {
        echo "Логин должен содержать не менее 5 символов и не более 90";
        exit();
    }
elseif (mb_strlen($pass) <5)
    {
        echo "Пароль должен содержать не менее 5 символов";
        exit();
    }
elseif (mb_strlen($name) >20)
    {
        echo "Вас точно так зовут?";
        echo $name;
        exit();
    }
elseif (mb_strlen($mail) <13)
    {
        echo "Это не волсушная почта";
        exit();
    }
elseif (mb_strlen($surname) >30)
    {
        echo "Фамилия слегка длинновата, вам не кажется?";
        exit();
    }
    $admin_level = (int)1;
    $pass = md5($pass."pjustl34d9sf");
    $mysql = new mysqli("localhost", "root", "", 'register-bd');
    $mysql->query("SET NAMES utf8");
    $mysql->query("INSERT INTO `users` (`user_login`, `user_pass`, `user_name`, `user_volsu`, `user_id_ticket`, `user_surname`, `admin_lvl`)
    VALUES ('$login','$pass','$name','$mail','$ticket','$surname', '$admin_level')");

    $_SESSION['admin_lvl'] = $admin_level;
    $_SESSION['user_mail'] = $mail;
    $_SESSION['user_pass'] = $pass;
    $_SESSION['user_name'] = $name;
    $mysql->close();
ob_start();
header('Location: ../php/Profile.php');
exit();
ob_end_flush();