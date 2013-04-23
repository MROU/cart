
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
.content
{
	position:relative;
	border:solid 1px #c3c3c3;
	background-color:#00B9E8;
	height:200px;
	width:750px;
}
</style>
</head>

<body>
<?php 
$xml=new  SimpleXMLElement(file_get_contents("store.xml"));
//获得Session
 session_start();
 $cart=$_SESSION["cart"];
 $allsub=0;
 
?>
<?php require_once("begin.html"); ?>
<br />
<br />
<br />
<div class="content">
<?php 
if($cart){
?>
<table border="1">
<caption>购物车账单</caption>	 
<tr><td>Name</td><td>数量</td><td>单价</td><td>总价</td></tr>
<?php
//将获得的Session转变为数组
$keys=array_keys($cart);
foreach($keys as $key)
{ ?>
<?php
	 
	//将其分开
	$array=explode(".",$key);
	$name=$array[0];
	$price=$array[1];
	$quity=$cart["$key"];
	//$price=$xml->xpath("//item[@name='$name']/price[@size='$size']");
	$sub=(float)($price)*$quity;
	$allsub+=$sub;
	
?>
<tr>
	<td>
	<?php echo $name;?>
	</td>

	<td>
	<?php echo $quity;?>
	</td>
	<td>
	<?php echo $price;?>
	</td>
	<td>
	<?php echo $sub;?>
	</td>
	
	</tr>
<?php 
}
?>

<tr><td colspan="5" align="right">总计：<?php echo  $allsub?></td></tr>


<?php }?> 
</table>

 
</div>
<a href="test.php">
继续购物
</a>
</body>
</html>

