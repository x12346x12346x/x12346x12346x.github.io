<?php
session_start();
include("link_db.php");
?>

<?php
if($_SESSION['name']==null){
    echo '<meta http-equiv=REFRESH CONTENT=0;url=php_login.php>';
}
$name = $_SESSION['name'];
$sql = "SELECT * FROM `account` WHERE name='$name'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
if($row['admin'] == 0){
	echo '<script>alert("你無此權限")</script>';
	echo '<meta http-equiv=REFRESH CONTENT=0;url=php_login.php>';
}
?>

<?php
// 刪文
if(isset($_POST['title']) & isset($_POST['category']) && $_POST['title'] && $_POST['category']){
    $category = $_POST['category'];
    $title = $_POST['title'];
    $sql = "DELETE FROM `article` WHERE category='$category' AND title='$title'";
    mysql_query($sql);
    $sql = "DELETE FROM `response` WHERE category='$category' AND title='$title'";
    mysql_query($sql);
    echo '<meta http-equiv=REFRESH CONTENT=0;url=php_index.php>';
}
?>

<html>
<head>
	<title>刪文頁面</title>
	<meta charset="UTF-8">
</head>
<body>

刪文章:</br>
<form action="delete_article.php" method="post">
	哪個版？<input type="text" name="category"><br/>
	哪篇文章？<input type="text" name="title"><br/>
	<input type="submit">
</form>
<a href="php_index.php">回首頁</a>

</body>
</html>