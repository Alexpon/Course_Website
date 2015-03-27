<?php session_start(); ?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body align="center" background="./teacherTop.jpg">
<?php
	//將session清空
	unset($_SESSION['id']);
	unset($_SESSION['rank']);

	echo '<b>登出中......';
?>
<script>
javascript:window.close();
window.open('index.html', 'index', config='height=500,width=500');
//window.location.assign("index.html");
</script>
</body>
</html>