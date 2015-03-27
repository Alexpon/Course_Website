<?php session_start(); ?>

<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<style type = "text/css">
			h1{color:blue; text-align: center; font-size:36}
			em{color:black; font-weight:bold; font-size:18}
	</style>
</head>

<body align="center" background="./teacherTop.jpg" >
<h1 align=middle font-family:"Comic Sans MS";>對對碰</h1>

<p>

<?php 
include_once "./config_inc.php";


if($_SESSION['id'] != null)
{

        $id = $_SESSION['id'];
        $sql = "SELECT * FROM teacher where id='$id'";
        $result = mysql_query($sql);
        $row = mysql_fetch_row($result);
    
        echo "<form name=\"form\" method=\"post\" action=\"update_finish_teacher.php\">";
        echo "<b>帳號(無法修改)：".$_SESSION['id']."<br>";
        echo "<b>輸入新密碼：<input type=\"password\" name=\"pw\" value=\"$row[2]\" /> <br>";
        echo "<b>確認新密碼：<input type=\"password\" name=\"pw2\" value=\"$row[2]\" /> <br>";
		
		echo "<b>輸入新暱稱：<input type=\"text\" name=\"nickname\" value=\"$row[3]\" /> <br>";

        echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
        echo "</form>";
}
else
{
        echo '<b>您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
}
?>

</body>
</html>