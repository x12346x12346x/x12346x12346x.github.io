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
function showArticle($row){
    $title = $row['title'];
    $content = $row['content'];
    echo "文章標題: ".$title."</br>";
    echo "內容: ".$content."</br>";
}
function showResponse($row){
	$name = $row['name'];
    $content = $row['content'];
    echo $name.": ".$content."</br>";
}
// 留言
if(isset($_POST['title']) & isset($_POST['content']) && $_POST['title'] && $_POST['content']){
    $name = $_SESSION['name'];
    $content = $_POST['content'];
    $title = $_POST['title'];
    $sql = "SELECT * FROM `article` WHERE category='game' AND title='$title'";
    $result = mysql_query($sql);
    if(mysql_num_rows($result) == 0){
    	echo '<script> alert("沒有這篇文章！") </script>';
    }
    else{
    	$sql = "INSERT INTO `response`(`category`, `title`, `name`, `content`) VALUES ('game','$title','$name','$content')";
    	mysql_query($sql);
    }
    echo '<meta http-equiv=REFRESH CONTENT=0;url=game.php>';
}
?>

<html>
<head>
	<title>遊戲專題板</title>
	<meta charset="UTF-8">
</head>
<body>
<div>
	<h1>遊戲專題板</h1>
	<a href="game_post.php">發文</a>
	<a href="php_index.php">回首頁</a>
</div>

</br>說說你的想法:</br>
<form action="game.php" method="post">
	文章標題：<input type="text" name="title"><br/>
	內容：<input type="text" name="content"><br/>
	<input type="submit">
</form>

<?php
$sql = "SELECT * from article WHERE category='game'";
$article = mysql_query($sql);
while($row_a = mysql_fetch_array($article)){
	echo "<hr>";
    showArticle($row_a);
    $title = $row_a['title'];
    $sql = "SELECT * from response WHERE category='game' AND title='$title'";
    $res = mysql_query($sql);
    if(mysql_num_rows($res) == 0){
    	continue;
    }
    echo "大家的留言: </br>";
    while($row_r = mysql_fetch_array($res)){
    	showResponse($row_r);
    }
}
?>

</body>
</html>