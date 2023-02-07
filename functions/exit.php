<?php
    //require_once "data.php";
    session_start();
    session_destroy();
    //echo $_SESSION['user_name'];
    //setcookie('user', $user['user_name'] , time() - 3600*365, "/");
    header('Location: ../php/Profile.php');