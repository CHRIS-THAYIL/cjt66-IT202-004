<!-- updatecategory.inc.php -->
<?php
if (!isset($_POST['categoryID']) || !is_numeric($_POST['categoryID'])) {
    echo "<h2>You did not select a valid categoryID value.</h2>";
    echo "<a href='index.php?content=displaycategories'>List Categories</a>";
} else {
    $categoryID = $_POST['categoryID'];
    $category = Category::findCategory($categoryID);
    if ($category) {
?>
<h2>Update Category <?php echo htmlspecialchars($categoryID); ?></h2>
<form name="category" action="index.php" method="post">
    <table>
        <tr>
            <td>Category ID:</td>
            <td><?php echo htmlspecialchars($category->categoryID); ?></td>
        </tr>
        <tr>
            <td>Category Code:</td>
            <td><input type="text" name="categoryCode" value="<?php echo htmlspecialchars($category->categoryCode); ?>" size="20"></td>
        </tr>
        <tr>
            <td>Category Name:</td>
            <td><input type="text" name="categoryName" value="<?php echo htmlspecialchars($category->categoryName); ?>" size="50"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="answer" value="Update Category">
                <input type="submit" name="answer" value="Cancel">
                <input type="hidden" name="categoryID" value="<?php echo htmlspecialchars($category->categoryID); ?>">
                <input type="hidden" name="content" value="changecategory">
            </td>
        </tr>
    </table>
</form>
<?php
    } else {
        echo "<h2>Sorry, category " . htmlspecialchars($categoryID) . " not found.</h2>";
        echo "<a href='index.php?content=displaycategories'>List Categories</a>";
    }
}
?>