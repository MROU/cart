<?php

$xml=new  SimpleXMLElement(file_get_contents("restaurants.xml"));
$category=$xml->xpath('//category');

?>

<html>

<head>
<style type="text/css">
.bg
{
	background-color:#00B9E8;
	width:100px;
	height:20px;
	border:solid 1px #c3c3c3;
}
.bg1
{
	background-color:#FFF;
	width:100px;
	height:80px;
	border:solid 1px #c3c3c3;
}
</style>
<title>笑笑购物</title>
</head>
<body>
<p>
<?php require_once("begin.html"); ?>
</p>
<!--

这里下面那段代码纠结好久，在处理$xml时，如果文件中开头是<restaurants>，每次都不能正常输出$newrest->name，只能输出第一个<restaurant>《name》，
当我加了我们商店名称笑笑购物<xxiao>开头时，就可以进行输出了，也就是要循环输出的xml中不能放在第一位。

-->
<?php  for($i=0;$i<2;$i++){?>
<div class="bg">
<?php  echo $xml->restaurants->restaurant[$i]->name; echo $xml->restaurants->restaurant[$i]['id'];?>
</div>
<div class="bg1">

<?php
foreach($xml->restaurants->restaurant[$i]->menu->category as $c)
{?>
<a href="caidan.php?category=<?php echo ($c['name']);?>&id=<?php echo ($xml->restaurants->restaurant[$i]['id']);?>" style="text-decoration:none">
	
<?php	echo $c['name']."<br>";  }?>

</a>

</div>
<?php }?>



</body>
</html>