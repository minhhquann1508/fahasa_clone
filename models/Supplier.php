<?php 
    include_once 'Database.php';
    include_once './configs/helper.php';
    class Supplier {
        static function add_new_supplier($supplier) {
            try {
                $conn = Database::get_connection();
                $sql = "INSERT INTO supplier (name, thumbnail, description, slug, is_show) VALUES(:name, :thumbnail, :description, :slug, :is_show)";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(':name', $supplier['name']);
                $stmt->bindValue(':thumbnail', $supplier['thumbnail']);
                $stmt->bindValue(':description', $supplier['description']);
                $stmt->bindValue(':slug', $supplier['slug']);
                $stmt->bindValue(':is_show', $supplier['is_show']);

                if($stmt->execute()) {
                    return return_data(true, [], 'Thêm nhà cung cấp thành công');
                } else {
                    return return_data(false, [], 'Thêm nhà cung cấp thất bại');
                }
            } catch (PDOException $e) {
                return return_data(false, [], $e->getMessage());
            }
        }

        static function get_all_suppliers($show_all = true) {
            try {
                $conn = Database::get_connection();
                if($show_all) {
                    $sql = "SELECT * FROM supplier";
                } else {
                    $sql = "SELECT * FROM supplier WHERE is_show = 1";
                }
                $stmt = $conn->query($sql);
                return return_data(false, $stmt->fetchAll(PDO::FETCH_ASSOC), 'Thêm nhà cung cấp thất bại');
            } catch (PDOException $e) {
                return return_data(false, [], $e->getMessage());
            }
        }

        static function get_supplier_by_id($id, $show_all = true) {
            try {
                $conn = Database::get_connection();
                if($show_all) {
                    $sql = "SELECT * FROM supplier WHERE id = :id";
                } else {
                    $sql = "SELECT * FROM supplier WHERE id = :id AND is_show = 1";
                }
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(':id', $id);
                $stmt->execute();
                return return_data(false, $stmt->fetch(PDO::FETCH_ASSOC), 'Lấy nhà cung cấp thất bại');
            } catch (PDOException $e) {
                return return_data(false, [], $e->getMessage());
            }
        }

        static function update_supplier($supplier) {
            try {
                $conn = Database::get_connection();
                $sql = "UPDATE supplier SET name = :name, thumbnail = :thumbnail, description = :description, slug = :slug, is_show = :is_show WHERE id = :id";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(':name', $supplier['name']);
                $stmt->bindValue(':thumbnail', $supplier['thumbnail']);
                $stmt->bindValue(':description', $supplier['description']);
                $stmt->bindValue(':slug', $supplier['slug']);
                $stmt->bindValue(':is_show', $supplier['is_show']);
                $stmt->bindValue(':id', $supplier['id']);
                if($stmt->execute()) {
                    return return_data(true, [], 'Cập nhật nhà cung cấp thành công');
                } else {
                    return return_data(false, [], 'Cập nhật nhà cung cấp thất bại');
                }
            } catch (PDOException $e) {
                return return_data(false, [], $e->getMessage());
            }
        }

        static function delete_supplier($id) {
            try {
                $conn = Database::get_connection();
                $sql = "DELETE FROM supplier WHERE id = :id";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(':id', $id);
                if($stmt->execute()) {
                    return return_data(true, [], 'Xóa nhà cung cấp thành công');
                } else {
                    return return_data(false, [], 'Xóa nhà cung cấp thất bại');
                }
            } catch (PDOException $e) {
                return return_data(false, [], $e->getMessage());
            }
        }

    }
?>