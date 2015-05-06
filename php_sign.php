<?php
session_start();
include("link_db.php");
?>

<?php
if(isset($_SESSION['name']) && $_SESSION['name']!=null){ // 如果登入過，則直接轉到登入後頁面
    echo '<meta http-equiv=REFRESH CONTENT=0;url=php_index.php>';
}
if(isset($_POST['name']) && isset($_POST['password'])&& isset($_POST['password2'])){
    $acc = $_POST['name'];
    $pwd = $_POST['password'];
    $pwd2 = $_POST['password2'];
    $acc = preg_replace("/[^A-Za-z0-9]/","",$acc);
    $pwd = preg_replace("/[^A-Za-z0-9]/","",$pwd);
    $pwd2 = preg_replace("/[^A-Za-z0-9]/","",$pwd2);
    if($acc!=NULL && $pwd!=NULL){
        $sql = "SELECT name FROM account where name = '$acc'";
        $result = mysql_query($sql);
        $row = mysql_fetch_array($result);
        if(mysql_num_rows($result) == 1){
        	echo "<script> alert('名字重複了！')</script>";
        }
	else if($pwd!=$pwd2){
		echo "<script> alert('密碼輸入不正確')</script>";
	}
        else{
        	$sql = "INSERT INTO `account`(`name`,`password`,`admin`) VALUES ('$acc','$pwd',0)";
        	mysql_query($sql);
        	$_SESSION['name'] = "{$acc}";
        	echo '<meta http-equiv=REFRESH CONTENT=0;url=php_index.php>';
        }
    }
}
?>

<html>
<head>
	<title>註冊頁面</title>
	<meta charset="UTF-8">
</head>
<body>
請輸入名字和密碼:
<form action="php_sign.php" method="post">
    你的名字：<input type="text" name="name"><br/>
    你的密碼：<input type="password" name="password"><br/>
    再次輸入密碼：<input type="password" name="password2"><br/>
    <input type="submit">
</form>
<a href="php_login.php">回登入頁面</a>

</body>
</html>