<?php
session_start();
?>

<?php
if($_SESSION['name']==null){
    echo '<meta http-equiv=REFRESH CONTENT=0;url=login.php>';
}
?>

<html>
<head>
	<title>論壇</title>
	<meta charset="UTF-8">
</head>
<body>
<div>Welcome to my world! <a href="php_logout.php">登出</a> </div>
<div>
	<a href="anime.php">動漫專題版</a>
	<a href="game.php">遊戲專題版</a>
</div>
<div>
	管理員專區：
	<a href="delete_article.php">刪文章</a>
	<a href="delete_response.php">刪留言</a>
</div>

</body>
</html>