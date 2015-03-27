<?php session_start(); ?>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<style type = "text/css">
			h1{color:blue; text-align: center; font-size:36}
			em{color:black; font-weight:bold; font-size:18}
	</style>
</head>

<body align="center" background="./teacherTop.jpg" >
對對碰<p>
<?php 
include_once "./config_inc.php";
$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$nickname = $_POST['nickname'];

//完全不知道這樣行不行~~~~~~~~~~~~~~~~~~~~~~~~~~~~
if($_SESSION['id'] != null && $pw != null && $pw2 != null && $pw == $pw2 && $nickname != null )
{
        $id = $_SESSION['id'];
        //更新資料庫
        $sql = "update teacher set password='$pw',nickname='$nickname' where id='$id'";
		
        if(mysql_query($sql) )
        {
                echo '修改成功';
				$_SESSION['nickname'] = $nickname;
				
                echo '<meta http-equiv=REFRESH CONTENT=2;url=teacher_topWin.php>';
        }
		
        else
        {
                echo '修改失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=teacher_topWin.php>';
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
}
?>
</body>
</html>