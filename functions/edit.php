<?php
            $news_title = $_POST['news-title'];
            $id = $_POST['id'];
            $intro_text = $_POST['intro-text'];
            $full_text = $_POST['full-text'];
            $source_link = $_POST['news-link'];
            $image = $_POST['image-file'];
            $dir = $_FILES['image-file']['tmp_name'];
            $imagedata = file_get_contents($dir,FILE_USE_INCLUDE_PATH);
            $base64 = base64_encode($imagedata);
            $mysql = new mysqli("localhost", "root", "", 'newsbase');
            if($mysql->connect_error){
                echo('Error connecting to database');
                exit();
            }
            $query = "UPDATE `news` SET `title` = '$news_title', `intro_text` = '$intro_text', `full_text` = '$full_text', `image` = '$base64', `source_link` = '$source_link' WHERE `id` = '$id'";
            $mysql->query("SET NAMES utf8");
            $mysql->query($query);
            $mysql->close();
ob_start();
header('Location: ../php/Main.php');
exit();
ob_end_flush();
