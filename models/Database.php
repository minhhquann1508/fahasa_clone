<?php
    class Database {
        protected static $conn;
        public static function get_connection() {
            if (!self::$conn) {
                $host = 'localhost';
                $dbname = 'fahasa';
                $username = 'root';
                $password = '';

                try {
                    self::$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
                    self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch (PDOException $e) {
                    die('Kết nối thất bại: ' . $e->getMessage());
                }
            }
            return self::$conn;
        }
    
        public static function get_by_cond($cond) {
            $conn = Database::get_connection();
            $sql = $cond;
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>