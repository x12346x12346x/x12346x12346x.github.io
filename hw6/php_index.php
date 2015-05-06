<?php
session_start();
include("mysqlInc.php");
?>
 
<?php
if($_SESSION['id']==null){
    echo '<meta http-equiv=REFRESH CONTENT=0;url=php_login.php>';
}
?>
 
<html><head></head>
<body bgcolor="#ccccff">
 
<?php
echo "Hi, ".$_SESSION['id']."(".$_SESSION['nickName'].")";
?>
 
<a href="php_logout.php">登出</a>
 
</body></html>