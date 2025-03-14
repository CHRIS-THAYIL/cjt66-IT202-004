<?php
require_once 'guitarcategory.php';
$cat = new GuitarCategory();
$cat->GuitarCategoryID = $_POST['categoryID'];
$cat->GuitarCategoryCode = $_POST['categoryCode'];
$cat->GuitarCategoryName = $_POST['categoryName'];
$cat->GuitarAisleNumber = $_POST['aisleNumber'];
if ($cat->save()) {
    echo "Category added successfully!";
} else {
    echo "Failed to add category.";
}
?>
