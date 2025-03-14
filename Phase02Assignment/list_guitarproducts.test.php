<?php
require_once 'guitarproduct.php';
$products = GuitarProduct::retrieveAll();
foreach ($products as $prod) {
    echo "ID: {$prod['GuitarProductID']}, Code: {$prod['GuitarProductCode']}, Name: {$prod['GuitarProductName']}, List Price: {$prod['GuitarListPrice']}<br>";
}
?>
