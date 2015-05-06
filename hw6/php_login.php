<?php
session_start();
include("mysqliInc.php");
?>
 
<?php
if(isset($_SESSION['account']) && $_SESSION['account']!=null){ // 如果登入過，則直接轉到登入後頁面
    echo '<meta http-equiv=REFRESH CONTENT=0;url=php_index.php>';
}
else if(isset($_POST['account'])&&isset($_POST['password'])){
    $acc = $_POST['account'];
    $pwd = $_POST['password'];
    $acc = preg_replace("/[^A-Za-z0-9]/","",$acc);
    $pwd = preg_replace("/[^A-Za-z0-9]/","",$pwd);
    if($acc!=NULL && $pwd!=NULL){
        $sql = "SELECT account, password, nickname FROM user where account = '$acc'";
        $result = mysql_query($sql);
        $row = mysql_fetch_array($result);
        // 比對密碼
        if($row['password']==md5($pwd)){
            $_SESSION['account'] = $row['account'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['nickname'] = $row['nickname'];
            echo '<meta http-equiv=REFRESH CONTENT=0;url=php_index.php>';
        }
    }
}
?>
 
<html><head></head>
<body bgcolor="#ccccff">
 
<form action="php_login.php" method="post">
    帳號：<input type="text" name="account"><br/>
    密碼：<input type="text" name="password"><br/>
    <input type="submit">
</form>
 
</body></html>