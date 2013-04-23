<?php 

    session_start();
   
	$name=$_GET["name"];
	$price=$_GET["price"];
	
	//$item = $xml->xpath("//category[@name='$category']/items/item");
	//$item=$xml->menu->category["$category"]->items->item;
	if(!isset($name))
	{
		header("Location:test.php");
	}
	$key=$name.".".$price;
	$_SESSION["cart"][$key]=$_SESSION["cart"][$key]+1;
	header("Location:cart1.php");
	

?>
