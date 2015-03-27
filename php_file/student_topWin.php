<?php session_start(); ?>
<html>
<?php
header("Content-Type:text/html; charset=utf-8");
?>
<body background="./teacherTop.jpg">
	<h2 align=middle>同學您好 歡迎光臨對對碰</h2>
	<h4 align=left><?php
			print("學生個人資料");
			echo '</br>';
			print("nickname :");
			echo $_SESSION['nickname'];
			echo '</br>';
			print("school :");
			echo $_SESSION['school'];
			echo '</br>';
			print("score :");
			echo $_SESSION['score'];
			$AA = $_SESSION['score'];
			echo '</br>';
			print("rank :");
			echo $_SESSION['rank'];
			echo '</br>';
			echo '<a href="update.php">修改基本資料</a> ';
			echo '</br>';
			echo '<a href="logout.php">登出</a> ';

?></h4>
</body>
</html>