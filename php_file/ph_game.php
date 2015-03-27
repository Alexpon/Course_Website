<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">

<script type="text/javascript">
var flag = 0;
var temp1 = 0;
var temp2 = -1;
var tempb = 0;
var score = 0;
var item = 6;
var count = 30;

function clock(){
	var obj=document.getElementById('time');
    count--;
    obj.style.width = "30px";
    obj.innerHTML=count;
	if (count == 0 || item == 0){
        obj.style.width="80px";
            obj.innerHTML="End !!";
			var finsco = score + count*10;
			alert("Your score: " + score + "+" + count + "*10 = " + finsco);
            clearInterval(apid);
			window.location.assign("change_score.php?score=" + finsco);
	}
}


function test(a, b){ 
	
	if(flag==0){
		temp1 = a;
		document.getElementById('block'+b).src= "gray_block.jpg"
		tempb = b;
		flag = 1;	
	}
	else{
		temp2 = a;
		flag = 0;
		if(temp1 == temp2 && tempb != b){
			document.getElementById('block'+tempb).src= "teacherCov.jpg"
			document.getElementById('block'+b).src= "teacherCov.jpg"
			tempb = 0;
			item--;
			score += 100;
			document.getElementById('score').innerHTML = score;
		}
		else{
			document.getElementById('block'+tempb).src= "game_block.jpg"
			temp1 = 0;
			temp2 = -1;
			tempb = 0;
			score -= 100;
			document.getElementById('score').innerHTML = score;
		}
	}	
	
}
</script>

</head>



<body align="center" background="./teacherCov.jpg">

<style>
h2{font-family:"Comic Sans MS";
width:200; align="center"}
h3{font-family:"Comic Sans MS";
width:200px;}
.block { 
	width: 200; 
	height: 100; 
	background:url(game_block.jpg);
	font-size:3em; 
	font-family:DFKai-sb;
}


</style>

<?php
include_once "./config_inc.php";
$res=mysql_query("SELECT * FROM `phonetic`");
$num=mysql_num_rows($res);

function getRand($begin,$end,$limit){
    $rand_array=range($begin,$end);
    shuffle($rand_array);
    return array_slice($rand_array,0,$limit);
}
$arry = getRand(1, $num, 6);
$sort1 = getRand(0, 5, 6);
$sort2 = getRand(0, 5, 6);
for ($i = 0; $i <= 5; $i++) {
	$result[$i] = mysql_query("SELECT * FROM phonetic WHERE id=".$arry[$i]);
	$rows[$i]=mysql_fetch_array($result[$i],MYSQL_ASSOC);
}

?>
<table border="1" align="left" style="border: 5px double rgb(109, 2, 107); height: 100px; background-color: yellow; width: 180px;">
<tr><td><h2>分數:
<span id=score>0</span>
</h2>
</td></tr>
<tr><td><h2>時間:
<span id=time>30</span>
</h2>
</td></tr>
<script>
var apid=setInterval('clock()',1000);
</script>

<table border="1" align="left" style="border: 5px double rgb(109, 2, 107); height: 200px; background-color: rgb(255, 255, 255); width: 200px;">

<tr>
<td><div style="position: relative; width: 200; height: 100;">
<img src="game_block.jpg" width="200" height="100" alt="" id="block11" onclick="test(<?php print $sort1[0]?>, 11)">
<span style="position: absolute; top: 0; left: 0;font-size:3em; font-family:DFKai-sb;"><?php print $rows[$sort1[0]]['content1']?></span>
</div></td>
<td><div style="position: relative; width: 200; height: 100;">
<img src="game_block.jpg" width="200" height="100" alt="" id="block12" onclick="test(<?php print $sort2[0]?>, 12)">
<span style="position: absolute; top: 0; left: 0;font-size:3em; font-family:DFKai-sb;"><?php print $rows[$sort2[0]]['content2']?></span>
</div></td>
<td><div style="position: relative; width: 200; height: 100;">
<img src="game_block.jpg" width="200" height="100" alt="" id="block13" onclick="test(<?php print $sort1[1]?>, 13)">
<span style="position: absolute; top: 0; left: 0;font-size:3em; font-family:DFKai-sb;"><?php print $rows[$sort1[1]]['content1']?></span>
</div></td>
<td><div style="position: relative; width: 200; height: 100;">
<img src="game_block.jpg" width="200" height="100" alt="" id="block14" onclick="test(<?php print $sort2[1]?>, 14)">
<span style="position: absolute; top: 0; left: 0;font-size:3em; font-family:DFKai-sb;"><?php print $rows[$sort2[1]]['content2']?></span>
</div></td>
</tr>

<tr>
<td><div style="position: relative; width: 200; height: 100;">
<img src="game_block.jpg" width="200" height="100" alt="" id="block21" onclick="test(<?php print $sort1[2]?>, 21)">
<span style="position: absolute; top: 0; left: 0;font-size:3em; font-family:DFKai-sb;"><?php print $rows[$sort1[2]]['content1']?></span>
</div></td>
<td><div style="position: relative; width: 200; height: 100;">
<img src="game_block.jpg" width="200" height="100" alt="" id="block22" onclick="test(<?php print $sort2[2]?>, 22)">
<span style="position: absolute; top: 0; left: 0;font-size:3em; font-family:DFKai-sb;"><?php print $rows[$sort2[2]]['content2']?></span>
</div></td>
<td><div style="position: relative; width: 200; height: 100;">
<img src="game_block.jpg" width="200" height="100" alt="" id="block23" onclick="test(<?php print $sort1[3]?>, 23)">
<span style="position: absolute; top: 0; left: 0;font-size:3em; font-family:DFKai-sb;"><?php print $rows[$sort1[3]]['content1']?></span>
</div></td>
<td><div style="position: relative; width: 200; height: 100;">
<img src="game_block.jpg" width="200" height="100" alt="" id="block24" onclick="test(<?php print $sort2[3]?>, 24)">
<span style="position: absolute; top: 0; left: 0;font-size:3em; font-family:DFKai-sb;"><?php print $rows[$sort2[3]]['content2']?></span>
</div></td>
</tr>

<tr>
<td><div style="position: relative; width: 200; height: 100;">
<img src="game_block.jpg" width="200" height="100" alt="" id="block31" onclick="test(<?php print $sort1[4]?>, 31)">
<span style="position: absolute; top: 0; left: 0;font-size:3em; font-family:DFKai-sb;"><?php print $rows[$sort1[4]]['content1']?></span>
</div></td>
<td><div style="position: relative; width: 200; height: 100;">
<img src="game_block.jpg" width="200" height="100" alt="" id="block32" onclick="test(<?php print $sort2[4]?>, 32)">
<span style="position: absolute; top: 0; left: 0;font-size:3em; font-family:DFKai-sb;"><?php print $rows[$sort2[4]]['content2']?></span>
</div></td>
<td><div style="position: relative; width: 200; height: 100;">
<img src="game_block.jpg" width="200" height="100" alt="" id="block33" onclick="test(<?php print $sort1[5]?>, 33)">
<span style="position: absolute; top: 0; left: 0;font-size:3em; font-family:DFKai-sb;"><?php print $rows[$sort1[5]]['content1']?></span>
</div></td>
<td><div style="position: relative; width: 200; height: 100;">
<img src="game_block.jpg" width="200" height="100" alt="" id="block34" onclick="test(<?php print $sort2[5]?>, 34)">
<span style="position: absolute; top: 0; left: 0;font-size:3em; font-family:DFKai-sb;"><?php print $rows[$sort2[5]]['content2']?></span>
</div></td>
</tr>


</body>
</html>