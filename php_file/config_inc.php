<?php

//////////////////////////////////////
//You need to change the data here	//
$host="host name";					//
$user="userID";						//
$upwd="password";					//
$db="db name";						//
//////////////////////////////////////

$link=mysql_connect($host,$user,$upwd) or die ("Unable to connect!");
mysql_select_db($db, $link) or die ("Unable to select database!");


?>