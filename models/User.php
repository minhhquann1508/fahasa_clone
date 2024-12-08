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
    
    // Lấy thông tin user theo id
    public static function get_UserById($id) {
        try {
            $conn = Database::get_connection();
            if (!$conn) {
                throw new Exception('Không thể kết nối đến cơ sở dữ liệu');
            }
    
            $stmt = $conn->prepare("SELECT * FROM user WHERE id = :id");
            $stmt->bindValue(":id", (int)$id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            return false;
        } catch (Exception $e) {
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

    // Cập nhật thông tin cá nhân
    public function updatePersonal($id, $name, $email, $phone, $gender, $day, $month, $year) {
        try {
        $conn = Database::get_connection();
        if (empty($name) || empty($email) || empty($phone) || empty($gender)) {
            return ['success' => false, 'message' => 'Thông tin không đầy đủ!'];
        }
        $birthday = $year . '-' . $month . '-' . $day; 

        $sql = "UPDATE user SET name = :name, email = :email, phone = :phone, gender = :gender, birthday = :birthday WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':phone', $phone); 
        $stmt->bindValue(':gender', $gender);
        $stmt->bindValue(':birthday', $birthday);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        
        if ($stmt->execute()) {
            return return_data(true, [], 'Cập nhật thành công');
        } else {
            return return_data(false, [], 'Cập nhật thất bại');
        }
    } catch (PDOException $e) {
        return return_data(false, [], $e->getMessage());
    }
    }


    public function updateAdress($id, $name, $phone, $city, $district, $ward, $address) {
        try {
        $conn = Database::get_connection();
        $sql = "UPDATE user SET name = :name, phone = :phone, city = :city, district = :district, ward = :ward, address = :address WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':phone', $phone);
        $stmt->bindValue(':city', $city);
        $stmt->bindValue(':district', $district);
        $stmt->bindValue(':ward', $ward);
        $stmt->bindValue(':address', $address);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        
        if ($stmt->execute()) {
            return return_data(true, [], 'Cập nhật thành công');
        } else {
            return return_data(false, [], 'Cập nhật thất bại');
        }
    } catch (PDOException $e) {
        return return_data(false, [], $e->getMessage());
    }
    }

    
    
}
?>