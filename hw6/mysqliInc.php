<?php
$db_server = "mysql.lionfree.net";
$db_user = "u386465239_admin";
$db_passwd = "xji4dk4bp6";
$db_name = "u386465239_hw6";
 
$link = @mysqli_connect($db_server, $db_user, $db_passwd, $db_name);
 
if(!$link){
    die('無法對資料庫連線');
}
 
mysqli_query($link, "SET NAMES utf8");
?>