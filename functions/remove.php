<?php
require_once "../functions/bdConnects.php";
$mysql=ConnectBD('newsbase');

if($_POST['news-id']!=NULL)
{
    $id = $_POST['news-id'];
    $query = "DELETE FROM `news` WHERE id = '$id'";

}
 else if($_POST['news-date']!= NULL)
{
    $date= $_POST['news-date'];
    $query = "DELETE FROM `news` WHERE date <= '$date'";

}
$mysql->query($query);
CloseBD($mysql);
ob_start();
header('Location: ../php/Main.php');
exit();
ob_end_flush();
