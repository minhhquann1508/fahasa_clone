<?php 
    include_once 'Database.php';
    include_once './configs/helper.php';

    class Type {
        static function add_new_type($name) {
            try {
                $conn = Database::get_connection();
                $sql = "INSERT INTO type (name) VALUES (:name)";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(':name', $name);
                
                if($stmt->execute()) {
                    return return_data(true, [], 'Thêm loại thành công');
                } else {
                    return return_data(false, [], 'Thêm loại thất bại');
                }
            } catch (PDOException $e) {
                return return_data(false, [], $e->getMessage());
            }
        }

        static function get_all_types() {
            try {
                $conn = Database::get_connection();
                $sql = "SELECT * FROM type";
                $stmt = $conn->query($sql);
                $types = $stmt->fetchAll(PDO::FETCH_ASSOC);

                return return_data(true, $types, 'Thêm loại thành công');
            } catch (PDOException $e) {
                return return_data(false, [], $e->getMessage());
            }
        }

        static function update_type($id, $name) {
            try {
                $conn = Database::get_connection();
                $sql = "UPDATE type SET name = :name WHERE id = :id";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(':name', $name);
                $stmt->bindValue(':id', $id);
                
                if($stmt->execute()) {
                    return return_data(true, [], 'Cập nhật loại thành công');
                } else {
                    return return_data(false, [], 'Cập nhật loại thất bại');
                }
            } catch (PDOException $e) {
                return return_data(false, [], $e->getMessage());
            }
        }

        static function delete_type($id) {
            try {
                $conn = Database::get_connection();
                $sql = "DELETE FROM type WHERE id = :id";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(':id', $id);
                
                if($stmt->execute()) {
                    return return_data(true, [], 'Xóa loại thành công');
                } else {
                    return return_data(false, [], 'Xóa loại thất bại');
                }
            }  catch (PDOException $e) {
                return return_data(false, [], $e->getMessage());
            }
        }
    }
?>