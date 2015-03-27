<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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


if($_SESSION['id'] != null)
{

        $id = $_SESSION['id'];
        $sql = "SELECT * FROM student where id='$id'";
        $result = mysql_query($sql);
        $row = mysql_fetch_row($result);
    
        echo "<form name=\"form\" method=\"post\" action=\"update_finish.php\">";
        echo "帳號：<input type=\"text\" name=\"id\" value=\"$row[1]\" />(此項目無法修改) <br>";
        echo "輸入新密碼：<input type=\"password\" name=\"pw\" value=\"$row[2]\" /> <br>";
        echo "確認密碼：<input type=\"password\" name=\"pw2\" value=\"$row[2]\" /> <br>";
		
		echo "輸入新暱稱：<input type=\"text\" name=\"nickname\" value=\"$row[3]\" /> <br>";
//		echo "輸入等級：<input type=\"text\" name=\"rank_score\" value=\"$row[7]\" /> <br>";

        echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
        echo "</form>";
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
}
?>

</body>
</html>