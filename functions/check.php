<?php //'login' - то, что, написано в input name=
    header('Content-Type: text/html; charset=UTF-8');
    //require_once "data.php"; //нужно
    session_start();
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_EMAIL);
    $pass = filter_var(trim($_POST['password']),FILTER_SANITIZE_EMAIL);
    //$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_ENCODED);
    $mail = filter_var(trim($_POST['e-mail']),FILTER_VALIDATE_EMAIL);
    $ticket = filter_var(trim($_POST['sd_ticket']),FILTER_SANITIZE_EMAIL);
    //$surname = filter_var(trim($_POST['surname']),FILTER_SANITIZE_ENCODED);
    $name = $_POST['name'];
    $surname = $_POST['surname'];

    /*filtervar нужен, чтобы предотвратить взлом через sql инъекции. Поэтому как-то, но фильтровать всегда надо*/
//mysql_escape - защита от склю инъекций, но работает, только если мы подключены к бд, но он устарел опять. усука
    //$login = $_POST['login'];
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
//проверки
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
    //$mysql->query("SET NAMES utf8");
    //$result = $mysql->query("SELECT * FROM `users` WHERE `user_volsu` = '$mail' AND `user_pass` = '$pass'");
    //$user = $result->fetch_assoc();
    //echo $_SESSION['admin_lvl'];
    //setcookie('user', $user['user_name'], time() + 3600*365, "/");
    $mysql->close();
    header('Location: ../php/Profile.php');
