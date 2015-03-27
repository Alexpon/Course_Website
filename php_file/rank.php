<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>
<head>
<style>
h1{font-family:"Comic Sans MS";
width:200px;}
h2{font-family:"Comic Sans MS";
width:200px;}
h3{font-family:"Comic Sans MS";
width:200px;}
</style>
</head>
<body align="center" background="./teacherCov.jpg">

<table border="1" align="center" style="border: 5px; background-color: red;">
		<tr><td><h2>龍虎榜</h2></td></tr>
		<table border="1" align="center" style="border: 5px  dashed rgb(109, 2, 107); background-color: rgb(255, 255, 255);">
		<tr>
		<td><h3>排名</h3></td><td><h3>暱稱</h3></td><td><h3>職位</h3></td><td><h3>分數</h3></td><td><h3>學校</h3></td>
		</tr>
<?php	
		include_once "./config_inc.php";
		$result = mysql_query("SELECT * FROM `student` ORDER BY `score` DESC");
		$count = 5;
		$num = 5;
		while($row = mysql_fetch_row($result) and ($count > 0)){
			$rank = $num - $count + 1;
			print "<tr><td><h3>".$rank."</h3></td><td><h3>".$row[3]."</h3></td><td><h3>".$row[6]."</h3></td><td><h3>".$row[5]."</h3></td><td><h3>".$row[4]."</h3></td></tr>";
			$count = $count - 1 ;
		}
		print '<tr></tr>';



?>

  </body>
</html>