<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<style type = "text/css">
			h1{color:blue; text-align: center; font-size:36}
			em{color:black; font-weight:bold; font-size:18}
	</style>
</head>

<body align="center" background="./teacherCov.jpg" >
<br><br><br>

<?php

include_once "./config_inc.php";

switch($_GET["type"]){
	case "phonetic":
		$id=$_GET["id"];
		$content1=$_GET["content1"];
		$content2=$_GET["content2"];
		if($content1&&$content2)
			mysql_query ("INSERT INTO phonetic(id, content1, content2) VALUES('$id', '$content1', '$content2')");  ?>
		<table border="1" align="center" style="border: 5px; background-color: yellow;">
		<tr><td><h2>同注音</h2></td></tr>
		<table border="1" align="center" style="border: 5px  dashed rgb(109, 2, 107); background-color: rgb(255, 255, 255);">
		<tr>
		<td><h3>編號</h3></td><td><h3>內容I</h3></td><td><h3>內容II</h3></td>
		</tr>
<?php	$result = mysql_query("SELECT * FROM phonetic ORDER BY id");
		while($rows=mysql_fetch_array($result,MYSQL_ASSOC)){
			print "<tr><td><h3>".$rows['id']."</h3></td><td><h3>".$rows['content1']."</h3></td><td><h3>".$rows['content2']."</h3></td></tr>";
		}
		print '<tr></tr>';
		break;
		
		
	case "radical":
		$id=$_GET["id"];
		$content1=$_GET["content1"];
		$content2=$_GET["content2"];
		if($content1&&$content2)
			mysql_query ("INSERT INTO radical(id, content1, content2) VALUES('$id', '$content1', '$content2')");  ?>
		
		<table border="1" align="center" style="border: 5px; background-color: yellow;">
		<tr><td><h2>同部首</h2></td></tr>
		<table border="1" align="center" style="border: 5px  dashed rgb(109, 2, 107); background-color: rgb(255, 255, 255);">
		<tr>
		<td><h3>編號</h3></td><td><h3>內容I</h3></td><td><h3>內容II</h3></td>
		</tr>
<?php	$result = mysql_query("SELECT * FROM radical ORDER BY id");
		while($rows=mysql_fetch_array($result,MYSQL_ASSOC)){
			print '<tr><td><h3>'.$rows['id']."</h3></td><td><h3>".$rows['content1']."</h3></td><td><h3>".$rows['content2']."</h3></td></tr>";
		}
		break;
		
		
	case "synonyms":
		$id=$_GET["id"];
		$content1=$_GET["content1"];
		$content2=$_GET["content2"];
		if($content1&&$content2)
			mysql_query ("INSERT INTO synonyms(id, content1, content2) VALUES('$id', '$content1', '$content2')");  ?>
		
		<table border="1" align="center" style="border: 5px; background-color: yellow;">
		<tr><td><h2>同義詞</h2></td></tr>
		<table border="1" align="center" style="border: 5px  dashed rgb(109, 2, 107); background-color: rgb(255, 255, 255);">
		<tr>
		<td><h3>編號</h3></td><td><h3>內容I</h3></td><td><h3>內容II</h3></td>
		</tr>
<?php	$result = mysql_query("SELECT * FROM synonyms ORDER BY id");
		while($rows=mysql_fetch_array($result,MYSQL_ASSOC)){
			print '<tr><td><h3>'.$rows['id']."</h3></td><td><h3>".$rows['content1']."</h3></td><td><h3>".$rows['content2']."</h3></td></tr>";
		}
		break;
		
		
	case "antonym":
		$id=$_GET["id"];
		$content1=$_GET["content1"];
		$content2=$_GET["content2"];
		if($content1&&$content2)
			mysql_query ("INSERT INTO antonym(id, content1, content2) VALUES('$id', '$content1', '$content2')");  ?>
		
		<table border="1" align="center" style="border: 5px; background-color: yellow;">
		<tr><td><h2>反義詞</h2></td></tr>
		<table border="1" align="center" style="border: 5px  dashed rgb(109, 2, 107); background-color: rgb(255, 255, 255);">
		<tr>
		<td><h3>編號</h3></td><td><h3>內容I</h3></td><td><h3>內容II</h3></td>
		</tr>
<?php	$result = mysql_query("SELECT * FROM antonym ORDER BY id");
		while($rows=mysql_fetch_array($result,MYSQL_ASSOC)){
			print '<tr><td><h3>'.$rows['id']."</h3></td><td><h3>".$rows['content1']."</h3></td><td><h3>".$rows['content2']."</h3></td></tr>";
		}
		break;

	default:
}
?>
</body>

