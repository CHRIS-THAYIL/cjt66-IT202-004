<?php
$host = 'sql.njit.edu'; // Adjust if different
$dbname = 'cjt66_guitarshop';
$user = 'cjt66@njit.edu';
$pass = 'cj#NJIT2&27';
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
