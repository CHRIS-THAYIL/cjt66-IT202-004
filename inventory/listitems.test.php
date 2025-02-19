<?php
include("item.php");
$items = Item::getItems();
foreach ($items as $item) {
   $itemID = $item->itemID;
   $itemName = $item->itemName;
   $itemPrice = $item->listPrice;
   $option = $itemID . " - " . $itemName .  " - " . $itemPrice;
   echo "$option<br>";
}
?>
