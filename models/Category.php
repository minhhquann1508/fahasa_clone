<?php 
    include_once 'Database.php';
    include_once './configs/helper.php';

    class Category {
        public static function get_all_categories() {
            try {
                $conn = Database::get_connection();
                $sql = "SELECT * FROM category WHERE is_show = 1";
                $stmt = $conn->query($sql);
                return return_data(true, $stmt->fetchAll(PDO::FETCH_ASSOC), 'Hiển thị danh mục thành công');
            } catch (PDOException $e) {
                return return_data(false, [], $e->getMessage());
            }
        }

        public static function get_all_category_pagination($show_all = false, $page = 1, $page_size = 10) {
            try {
                $conn = Database::get_connection();
                $format_page = ((int)$page - 1) * $page_size;
                if($show_all) {
                    $sql = "SELECT * FROM category LIMIT :start, :size";
                    $sql_total = "SELECT COUNT(*) as total FROM category";
                } else {
                    $sql = "SELECT * FROM category WHERE is_show = 1 LIMIT :start, :size";
                    $sql_total = "SELECT COUNT(*) as total FROM category WHERE is_show = 1";
                }
                
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(':start', $format_page, PDO::PARAM_INT);
                $stmt->bindValue(':size', $page_size, PDO::PARAM_INT);

                $stmt_total = $conn->query($sql_total);
                $total = $stmt_total->fetch(PDO::FETCH_ASSOC)['total'];

                if($stmt->execute()) {
                    $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    return return_data(true, ['categories' => $categories, 'total' => $total], 'Hiển thị danh mục thành công');
                } else {
                    return return_data(false, [], 'Hiển thị danh mục thất bại');
                }
            } catch (PDOException $e) {
                return return_data(false, [], $e->getMessage());
            }
        }

        public static function add_new_category($category) {
            try {
                $conn = Database::get_connection();
                $sql = "INSERT INTO category (name, slug, thumbnail, is_show)
                        VALUES(:name, :slug, :thumbnail, :is_show)";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(':name', $category['name']);
                $stmt->bindValue(':slug', $category['slug']);
                $stmt->bindValue(':thumbnail', $category['thumbnail']);
                $stmt->bindValue(':is_show', $category['is_show']);
                
                if($stmt->execute()) {
                    return return_data(true, [], 'Thêm thành công');
                } else {
                    return return_data(false, [], 'Thêm thất bại');
                }
            } catch (PDOException $e) {
                return return_data(false, [], $e->getMessage());
            }
        }

        public static function delete_category($id) {
            try {
                $conn = Database::get_connection();
                $sql = "DELETE FROM category WHERE id = :id";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(':id', $id, PDO::PARAM_INT);
                
                if($stmt->execute()) {
                    return return_data(true, [], 'Xóa thành công');
                } else {
                    return return_data(false, [], 'Xóa thất bại');
                }
            } catch (PDOException $e) {
                return return_data(false, [], $e->getMessage());
            }
        }

        public static function update_category($category) {
            try {
                $conn = Database::get_connection();
                $sql = "UPDATE category SET name = :name, slug = :slug, thumbnail = :thumbnail, is_show = :is_show WHERE id = :id";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(':name', $category['name']);
                $stmt->bindValue(':slug', $category['slug']);
                $stmt->bindValue(':thumbnail', $category['thumbnail']);
                $stmt->bindValue(':is_show', $category['is_show']);
                $stmt->bindValue(':id', $category['id'], PDO::PARAM_INT);

                if($stmt->execute()) {
                    return return_data(true, [], 'Sửa thành công');
                } else {
                    return return_data(false, [], 'Sửa thất bại');
                }
            } catch (PDOException $e) {
                return return_data(false, [], $e->getMessage());
            }
        }
    }
?>