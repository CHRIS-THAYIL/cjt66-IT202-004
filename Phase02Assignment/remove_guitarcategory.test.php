<?php
require_once 'guitarcategory.php';
$cat = new GuitarCategory($_POST['categoryID']);
if ($cat->remove()) {
    echo "Category removed!";
} else {
    echo "Remove failed.";
}
?>
