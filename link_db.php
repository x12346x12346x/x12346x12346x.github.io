<?php
 
$db_server = "mysql.lionfree.net";
$db_user = "u386465239_admin";
$db_passwd = "xji4dk4bp6";
$db_name = "u386465239_hw6";
 
if(!@mysql_connect($db_server, $db_user, $db_passwd)){
        die("Can't connect to database");
}
 
mysql_query("SET NAMES utf8");
 
if(!@mysql_select_db($db_name)){
        die("Can't select database");
}
 
?>