<?php
$ConnectBD_userName = "root";
$ConnectBD_hostName = "localhost";
$ConnectBD_password = "";
function ConnectBD($bd_name){
    global $ConnectBD_hostName,$ConnectBD_userName,$ConnectBD_password;
    $mysql = new mysqli($ConnectBD_hostName, $ConnectBD_userName,$ConnectBD_password , $bd_name);
    if ($mysql->connect_error) {
        die("Connection failed: " . $mysql->connect_error);
        exit();
    }
    $mysql->query("SET NAMES utf8");
    return $mysql;
}
function CloseBD($mysql){
    $mysql->close();
}?>