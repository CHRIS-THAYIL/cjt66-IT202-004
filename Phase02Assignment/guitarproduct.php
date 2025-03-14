<?php
require_once 'db_connect.php';

class GuitarProduct {
    public $GuitarProductID;
    public $GuitarProductCode;
    public $GuitarProductName;
    public $GuitarDescription;
    public $GuitarCategoryID;
    public $GuitarWholesalePrice;
    public $GuitarListPrice;
    public $GuitarStockQuantity;
    public $DateCreated;

    public function __construct($id = null) {
        global $pdo;
        if ($id) {
            $stmt = $pdo->prepare("SELECT * FROM GuitarProducts WHERE GuitarProductID = ?");
            $stmt->execute([$id]);
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($data) {
                foreach ($data as $key => $value) {
                    $this->$key = $value;
                }
            }
        }
    }

    public function save() {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO GuitarProducts (GuitarProductID, GuitarProductCode, GuitarProductName, GuitarDescription, GuitarCategoryID, GuitarWholesalePrice, GuitarListPrice, GuitarStockQuantity, DateCreated) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())");
        return $stmt->execute([$this->GuitarProductID, $this->GuitarProductCode, $this->GuitarProductName, $this->GuitarDescription, $this->GuitarCategoryID, $this->GuitarWholesalePrice, $this->GuitarListPrice, $this->GuitarStockQuantity]);
    }

    public static function retrieveAll() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM GuitarProducts");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update() {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE GuitarProducts SET GuitarProductCode = ?, GuitarProductName = ?, GuitarDescription = ?, GuitarCategoryID = ?, GuitarWholesalePrice = ?, GuitarListPrice = ?, GuitarStockQuantity = ? WHERE GuitarProductID = ?");
        return $stmt->execute([$this->GuitarProductCode, $this->GuitarProductName, $this->GuitarDescription, $this->GuitarCategoryID, $this->GuitarWholesalePrice, $this->GuitarListPrice, $this->GuitarStockQuantity, $this->GuitarProductID]);
    }

    public function remove() {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM GuitarProducts WHERE GuitarProductID = ?");
        return $stmt->execute([$this->GuitarProductID]);
    }
}
?>
