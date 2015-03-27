<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>

<body align="center" background="./teacherCov.jpg">
對對碰<p>
<?php 
include_once "./config_inc.php";
$score = $_GET['score'];
$score_for_rank = $score / 100 ;
if($score > $_SESSION['score'])
	$_SESSION['score'] = $score ;

print("score :");
echo $score;
echo '</br>';
print("score_for_rank :");
echo $score_for_rank;
echo '</br>';
$id = $_SESSION['id'];
$score_top = $_SESSION['score'] ;
$aa = $score_for_rank + $_SESSION['rank_score'];//之前分數和本次分數相加
//更新資料庫
$sql = "update student set score='$score_top',rank_score='$aa' where id='$id'";
if(mysql_query($sql) )
        {
				$_SESSION['score'] = $score_top;
				$_SESSION['rank_score'] = $aa;
        }


if($aa < 10){
	$sql2 = "update student set rank='初心者' where id='$id'";	
	if(mysql_query($sql2) )
        {
				$_SESSION['rank'] = 初心者;
        }
}
		
else if($aa >= 10 and $aa < 20){
$sql2 = "update student set rank='盜賊' where id='$id'";	
	if(mysql_query($sql2) )
        {
				$_SESSION['rank'] = 盜賊;
        }
}

else if($aa >= 20 and $aa < 30){
$sql2 = "update student set rank='浪人' where id='$id'";	
	if(mysql_query($sql2) )
        {
				$_SESSION['rank'] = 浪人;
        }
}


else if($aa >= 30 and $aa < 40){
$sql2 = "update student set rank='遊俠' where id='$id'";	
	if(mysql_query($sql2) )
        {
				$_SESSION['rank'] = 遊俠;
        }
}	
		
else if($aa >= 40 and $aa < 50){
$sql2 = "update student set rank='夜遊神' where id='$id'";	
	if(mysql_query($sql2) )
        {
				$_SESSION['rank'] = 夜遊神;
        }
}

else if($aa >= 50){
$sql2 = "update student set rank='安爺' where id='$id'";	
	if(mysql_query($sql2) )
        {
				$_SESSION['rank'] = 安爺;
        }
}

echo '<meta http-equiv=REFRESH CONTENT=2;url=rank.php>';

?>

  </body>
</html>
