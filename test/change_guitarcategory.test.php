<?php
require_once 'guitarcategory.php';
$cat = new GuitarCategory($_POST['categoryID']);
$cat->GuitarCategoryCode = $_POST['categoryCode'];
$cat->GuitarCategoryName = $_POST['categoryName'];
$cat->GuitarAisleNumber = $_POST['aisleNumber'];
if ($cat->update()) {
    echo "Category updated!";
} else {
    echo "Update failed.";
}
?>
