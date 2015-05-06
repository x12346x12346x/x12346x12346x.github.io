<?php
session_start();
include("link_db.php");
?>

<?php
if(isset($_SESSION['name']) && $_SESSION['name']!=null){ // 如果登入過，則直接轉到登入後頁面
    echo '<meta http-equiv=REFRESH CONTENT=0;url=php_index.php>';
}
else if(isset($_POST['name']) && isset($_POST['password'])){
    $acc = $_POST['name'];
    $pwd = $_POST['password'];
    $acc = preg_replace("/[^A-Za-z0-9]/","",$acc);
    $pwd = preg_replace("/[^A-Za-z0-9]/","",$pwd);
    if($acc!=NULL && $pwd!=NULL){
        $sql = "SELECT name, password FROM account where name = '$acc'";
        $result = mysql_query($sql);
        $row = mysql_fetch_array($result);
        // 比對密碼
        if($row['password']==$pwd){
            $_SESSION['name'] = $row['name'];
            echo '<meta http-equiv=REFRESH CONTENT=0;url=php_index.php>';
        }
    }
}
?>

<html>
<head>
	<title>登入頁面</title>
	<meta charset="UTF-8">
</head>
<body>
<form action="php_login.php" method="post">
    名字：<input type="text" name="name"><br/>
    密碼：<input type="password" name="password"><br/>
    <input type="submit">
</form>
<a href="php_sign.php">點我註冊</a>


</body>
</html>