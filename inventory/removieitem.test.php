<?php
include("item.php");
$itemID = $_POST['itemID'];
$item = Item::findItem($itemID);
$result = $item->removeItem();
if ($result)
   echo "<h2>Item $itemID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing item $itemID</h2>\n";
?>