<?php
	$xml = new SimpleXMLElement(file_get_contents("store.xml"));

	$category = $_GET["category"];
	$items = $xml->xpath("//category[@name='$category']/items/item");
?>
<?php require_once("begin.php"); ?>
<br />
<br />
		<table border="1" cellpadding="10">
		<th colspan="3" align="left">Item(s): <?php print($category); ?></th>
		<?php foreach($items as $item) { ?>
			<tr>
				<td><?php print($item["name"]); ?></td>
				<?php foreach($item->price as $price) { ?>
					<td><a href="add2cart.php?name=<?php print(htmlspecialchars($item["name"]));?>&size=<?php echo $price["size"]?>"><?php print($price); ?></a></td>
				<?php } ?>
			</tr>
		<?php } ?>
		</table>
		
