<h2>Select Item</h2>
<form name="items" method="post">
   <select name="itemID" size="20">
       <?php
   //    include('item.php');
       $items = Item::getItems();
       foreach ($items as $item) {
           $itemID = $item->itemID;
           $itemName = $item->itemName;
           $option = $itemID . " - " . $itemName;
           echo "<option value=\"$itemID\">$option</option>\n";
       }
       ?>
   </select>
</form>
