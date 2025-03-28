<!-- displayitems.inc.php -->
<h2>Items</h2>
<table>
    <tr>
        <th>Item ID</th>
        <th>Item Name</th>
        <th>Category ID</th>
        <th>List Price</th>
        <th>Actions</th>
    </tr>
    <?php
    // Include the Item class
    include('item.php');

    // Get all items
    $items = Item::getItems();

    if (empty($items)) {
        echo "<tr><td colspan='5'>No items found.</td></tr>";
    } else {
        foreach ($items as $item) {
            $itemID = htmlspecialchars($item->itemID);
            $itemName = htmlspecialchars($item->itemName);
            $categoryID = htmlspecialchars($item->categoryID);
            $listPrice = htmlspecialchars($item->listPrice);
            echo "<tr>";
            echo "<td>$itemID</td>";
            echo "<td>$itemName</td>";
            echo "<td>$categoryID</td>";
            echo "<td>$listPrice</td>";
            echo "<td>";
            echo "<a href='index.php?content=updateitem&itemID=$itemID'>Update</a>";
            echo "</td>";
            echo "</tr>";
        }
    }
    ?>
</table>