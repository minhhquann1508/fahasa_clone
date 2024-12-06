<?php
include_once 'Database.php';
class Product {
    public static function get_all_product() {
        $conn = Database::get_connection();
        $sql = "SELECT * FROM product";
        $stmt = $conn->query($sql); 
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }
}
?>