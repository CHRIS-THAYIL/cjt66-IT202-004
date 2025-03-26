<?php
require_once 'guitarproduct.php';
$prod = new GuitarProduct($_POST['productID']);
if ($prod->remove()) {
    echo "Product removed!";
} else {
    echo "Remove failed.";
}
?>
