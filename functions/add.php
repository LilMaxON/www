<?php
        $date= date('Y-m-d H:i:s');
        $news_title = $_POST['news-title'];
        $intro_text = $_POST['intro-text'];
        $full_text = $_POST['full-text'];
        $source_link = $_POST['news-link'];
        $image = $_POST['image-file'];
        $dir = $_FILES['image-file']['tmp_name'];
        $imagedata = file_get_contents($dir);
        $base64 = base64_encode($imagedata);
        $mysql = new mysqli("localhost", "root", "", 'newsbase');

        if($mysql->connect_error){
            echo('Error connecting to database');
            exit();
        }
        $query = "INSERT INTO `news` (date, title, intro_text, full_text, source_link, image)VALUES('$date','$news_title','$intro_text','$full_text','$source_link', '$base64')";
        $mysql->query("SET NAMES utf8");
        $mysql->query($query);
        $mysql->close();

ob_start();
header('Location: ../php/Main.php');
exit();
ob_end_flush();