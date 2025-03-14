<?php
require_once 'db_connect.php';

class GuitarCategory {
    public $GuitarCategoryID;
    public $GuitarCategoryCode;
    public $GuitarCategoryName;
    public $GuitarAisleNumber;
    public $DateCreated;

    public function __construct($id = null) {
        global $pdo;
        if ($id) {
            $stmt = $pdo->prepare("SELECT * FROM GuitarCategories WHERE GuitarCategoryID = ?");
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
        $stmt = $pdo->prepare("INSERT INTO GuitarCategories (GuitarCategoryID, GuitarCategoryCode, GuitarCategoryName, GuitarAisleNumber, DateCreated) VALUES (?, ?, ?, ?, NOW())");
        return $stmt->execute([$this->GuitarCategoryID, $this->GuitarCategoryCode, $this->GuitarCategoryName, $this->GuitarAisleNumber]);
    }

    public static function retrieveAll() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM GuitarCategories");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update() {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE GuitarCategories SET GuitarCategoryCode = ?, GuitarCategoryName = ?, GuitarAisleNumber = ? WHERE GuitarCategoryID = ?");
        return $stmt->execute([$this->GuitarCategoryCode, $this->GuitarCategoryName, $this->GuitarAisleNumber, $this->GuitarCategoryID]);
    }

    public function remove() {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM GuitarCategories WHERE GuitarCategoryID = ?");
        return $stmt->execute([$this->GuitarCategoryID]);
    }
}
?>
