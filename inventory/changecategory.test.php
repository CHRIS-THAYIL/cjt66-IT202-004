<?php
include("category.php");
$categoryID = $_POST['categoryID'];
$category = Category::findCategory($categoryID);
$category->categoryID = $_POST['categoryID'];
$category->categoryCode = $_POST['categoryCode'];
$category->categoryName = $_POST['categoryName'];
$result = $category->updateCategory();
if ($result) {
   echo "<h2>Category $categoryID updated</h2>\n";
} else {
   echo "<h2>Problem updating category $categoryID</h2>\n";
}
?>
