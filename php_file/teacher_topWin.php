<?php session_start(); ?>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<style type = "text/css">
			h1{color:blue; text-align: center; font-size:36}
			em{color:black; font-weight:bold; font-size:18}
	</style>
</head>

<body align="center" background="./teacherTop.jpg" >
	<h1 align=middle>老師您好 歡迎登入老師系統</h1>
	<h4 align=left><?php
			print("教師個人資料");
			echo '</br>';
			print("id :");
			echo $_SESSION['id'];
			echo '</br>';
			print("nickname :");
			echo $_SESSION['nickname'];
			echo '</br>';
			print("school :");
			echo $_SESSION['school'];
			echo '</br>';
			echo '<a href="update_teacher.php">修改基本資料</a> ';
			echo '</br>';
			echo '<a href="logout.php">登出</a> ';

?></h4>
</body>
</html>