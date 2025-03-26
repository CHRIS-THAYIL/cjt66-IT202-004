<?php
require_once 'guitarcategory.php';
$categories = GuitarCategory::retrieveAll();
foreach ($categories as $cat) {
    echo "ID: {$cat['GuitarCategoryID']}, Code: {$cat['GuitarCategoryCode']}, Name: {$cat['GuitarCategoryName']}<br>";
}
?>
