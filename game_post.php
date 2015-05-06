<?php
session_start();
include("link_db.php");
?>

<?php
if($_SESSION['name']==null){
    echo '<meta http-equiv=REFRESH CONTENT=0;url=php_login.php>';
}
?>

<?php
// 發文
if(isset($_POST['title']) & isset($_POST['content']) && $_POST['title'] && $_POST['content']){
    $content = $_POST['content'];
    $title = $_POST['title'];
    $sql = "SELECT * FROM `article` WHERE category='game' AND title='$title'";
    $result = mysql_query($sql);
    if(mysql_num_rows($result) != 0){
    	echo '<script> alert("標題重複") </script>';
    	echo '<meta http-equiv=REFRESH CONTENT=0;url=game_post.php>';
    }
    else{
    	$sql = "INSERT INTO `article`(`category`, `title`, `content`) VALUES ('game','$title','$content')";
    	mysql_query($sql);
    	echo '<meta http-equiv=REFRESH CONTENT=0;url=game.php>';
    }
}
?>

<html>
<head>
	<title>發文頁面</title>
	<meta charset="UTF-8">
</head>
<body>

你想發表什麼？:</br>
<form action="game_post.php" method="post">
	文章：<input type="text" name="title"><br/>
	內容：<input type="textarea" name="content"><br/>
	<input type="submit">
</form>
<a href="game.php">回動漫專題版</a>

</body>
</html>