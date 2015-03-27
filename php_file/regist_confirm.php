<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body align="center" background="./teacherLin.jpg">

<?php
include_once "./config_inc.php";

$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$school = $_POST['school'];
$nickname = $_POST['nickname'];
$job = $_POST['job'];

if($id != null && $pw != null && $pw2 != null && $pw == $pw2 && $school != null && $nickname != null  &&$job ==S )
{
        //新增資料
        $sql = "insert into student (id, password, school, nickname, score) values ('$id', '$pw', '$school', '$nickname', 0)";
        if(mysql_query($sql))
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
        }
}

else if($id != null && $pw != null && $pw2 != null && $pw == $pw2 && $school != null  &&$job ==T)
{
	$sql = "INSERT INTO `teacher` (`id`, `password`, `school`, `nickname`) VALUES ('$id', '$pw', '$school', '$nickname')";
        if(mysql_query($sql))
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
        }

}

else
{
        echo 'Something wrong';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
}
?>

 </body>
</html>