<?php session_start(); ?>


<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<style type = "text/css">
			h1{color:blue; text-align: center; font-size:36}
			em{color:black; font-weight:bold; font-size:18}
	</style>
</head>

<body align="center" background="./teacherLin.jpg">
對對碰<p>
<!--
<a href="regist.php">AA</a>
<a href="regist.php">BB</a>
<a href="regist.php">CC</a>
-->
<?php

include_once "./config_inc.php";
$id = $_POST['id'];
$pw = $_POST['password'];
$job = $_POST['job'];



if($job == S){
//搜尋資料庫資料
$sql = "SELECT * FROM student where id = '$id'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);

if($id != null && $pw != null && $row[1] == $id && $row[2] == $pw  )
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['id'] = $id;
        echo '學生登入成功!';
		$sql2 = "SELECT * FROM student where id = '$id'";
		$result2 = mysql_query($sql2);
		while($row = mysql_fetch_row($result2))
        {
            //     print (" id :$row[1] ") ;
				 echo '</br>';
				 print (" nickname :$row[3] ") ;
				 $_SESSION['nickname'] = $row[3];
				 echo '</br>';
				 print (" school :$row[4] ") ;
				 $_SESSION['school'] = $row[4];
				 echo '</br>';
				 print (" score :$row[5] ") ;
				 $_SESSION['score'] = $row[5];
				 echo '</br>';
				 print (" rank :$row[6] ") ;
				 $_SESSION['rank'] = $row[6];
				 echo '</br>';
				 print (" rank_score :$row[7] ") ;
				 $_SESSION['rank_score'] = $row[7];


                 echo '</br>';
        }
        echo '<meta http-equiv=REFRESH CONTENT=1;url=student_index.html>';
}
else
{
        echo '登入失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.html>';
}
}
else if($job == T){
$sql = "SELECT * FROM teacher where id = '$id'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);

if($id != null && $pw != null && $row[1] == $id && $row[2] == $pw && $job == T )
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['id'] = $id;
        echo '教師登入成功!';
		print (" school :$row[4] ") ;
				 $_SESSION['school'] = $row[4];
				 echo '</br>';
		print (" nickname :$row[3] ") ;
				 $_SESSION['nickname'] = $row[3];
				 echo '</br>';
		
        echo '<meta http-equiv=REFRESH CONTENT=1;url=teacher_index.html>';
}
else
{
        echo '登入失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.html>';
}
}

echo '</br>';
echo '<a href="logout.php">登出</a> ';
?>

  </body>
</html>
