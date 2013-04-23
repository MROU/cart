

<?php  
    
	$xml=new SimpleXMLElement(file_get_contents("restaurants.xml"));
	$category=$_GET["category"];
	$item = $xml->xpath("//category[@name='$category']/items/item");
	//$item=$xml->menu->category["$category"]->items->item;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>笑笑</title>
</head>

<body>
<table border="1">
<caption><strong><?php  echo $category ?></strong></caption>
<?php foreach($item as $allitem) {?>
<tr>
<td>
<a href="addcart.php?name=<?php  echo $allitem['name']  ?>">
<?php  echo $allitem['name'];?>
</a>
</td>
</tr>

<?php }?>


</table>
</body>
</html>