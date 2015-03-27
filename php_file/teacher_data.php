<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
print("教師個人資料");
include("config.php");
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


?>