<?php
include("item.php");
$itemID = $_POST['itemID'];
$item = Item::findItem($itemID);
$item->itemID = $_POST['itemID'];
$item->itemName = $_POST['itemName'];
$item->categoryID = $_POST['categoryID'];
$item->listPrice = $_POST['listPrice'];
$result = $item->updateItem();
if ($result) {
   echo "<h2>Item $itemID updated</h2>\n";
} else {
   echo "<h2>Problem updating item $itemID</h2>\n";
}
?>
