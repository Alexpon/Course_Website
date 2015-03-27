
<head>
<style>
h2{font-family:"Comic Sans MS";
width:200px;}
h3{font-family:"Comic Sans MS";
width:200px;}
</style>
</head>
<body align="center" background="./teacherCov.jpg">
<br><br><br>
<table border="0" align="center">
<?php
$id=$_GET["id"];
$sel=$_GET["type"];

include "./config_inc.php";
$result=mysql_query("SELECT * FROM `$sel` WHERE id='$_REQUEST[id]'",$link);
if($rows=mysql_fetch_array($result,MYSQL_ASSOC)){
	$result=mysql_query("DELETE FROM `$sel` WHERE id='$_REQUEST[id]'",$link);
	echo "<script type='text/javascript'>alert('Success');</script>";
	print "<script>location.href='teacher_show.php';</script>";
}else{
	echo "<script type='text/javascript'>alert('No this item');</script>";
	print "<script>location.href='teacher_show.php';</script>";
}