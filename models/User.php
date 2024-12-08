<?php
include_once 'Database.php';
include_once './configs/helper.php';

class User {
    // Đăng ký user
    public static function register($username, $email, $hashed_password) {
        try {
            $conn = Database::get_connection();
            $sql = "INSERT INTO user (name, email, password) VALUES (:name, :email, :password)";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':name', $username);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':password', $hashed_password);
            if ($stmt->execute()) {
                return return_data(true, [], 'Đăng ký thành công');
            } else {
                return return_data(false, [], 'Đăng ký thất bại');
            }
        } catch (PDOException $e) {
            return return_data(false, [], $e->getMessage());
        }
    }

    // Đăng nhập user
    public static function login($email) {
        try {
            $conn = Database::get_connection();
            $stmt = $conn->prepare("SELECT * FROM user WHERE email = :email");
            $stmt->bindValue(":email", $email);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($result) {
                return $result; 
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return false;
        }
    }

    // Kiểm tra email tồn tại
    public static function checkmail($email) {
        try {
            $conn = Database::get_connection();
            $stmt = $conn->prepare("SELECT * FROM user WHERE email = :email");
            $stmt->bindValue(":email", $email);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                return return_data(true, [], 'Email đã tồn tại');
            } else {
                return return_data(false, [], 'Email chưa tồn tại');
            }
        } catch (PDOException $e) {
            return return_data(false, [], $e->getMessage());
        }
    }
}
?>