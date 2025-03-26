<?php
require_once 'guitarproduct.php';
$prod = new GuitarProduct();
$prod->GuitarProductID = $_POST['productID'];
$prod->GuitarProductCode = $_POST['productCode'];
$prod->GuitarProductName = $_POST['productName'];
$prod->GuitarDescription = $_POST['description'];
$prod->GuitarCategoryID = $_POST['categoryID'];
$prod->GuitarWholesalePrice = $_POST['wholesalePrice'];
$prod->GuitarListPrice = $_POST['listPrice'];
$prod->GuitarStockQuantity = $_POST['stockQuantity'];
if ($prod->save()) {
    echo "Product added successfully!";
} else {
    echo "Failed to add product.";
}
?>
