<?php
$mysql = new mysqli("localhost", "root", "", 'newsbase');
if($mysql->connect_error){
echo('Error connecting to database');
exit();
}
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
$mysql->close();
//echo $id,$query;
ob_start();
header('Location: ../php/Main.php');
exit();
ob_end_flush();
