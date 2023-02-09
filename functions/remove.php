<?php
require_once "../functions/bdConnects.php";
$mysql=ConnectBD('newsbase');
$id = $_POST['news-id'];
if(isset($_POST['news-date']))
{
    $date= $_POST['news-date'];
    $query = "DELETE FROM `news` WHERE date <= '$date'";

}
else{
    $query = "DELETE FROM `news` WHERE id = '$id'";

}
$mysql->query($query);
CloseBD($mysql);
ob_start();
header('Location: ../php/Main.php');
exit();
ob_end_flush();
